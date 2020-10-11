<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactUs;
use Mail;
use App\Email;

class EmailController extends Controller
{
    //
    public function contact_us(Request $request){

        // try {
            $this->validate($request,[
                'first__name'=>'required|string',
                'last__name'=>'required|string',
                '__email'=>'required|email',
                '__phone'=>'required|string',
                '__message'=>'required|string',
                '__document'=>'mimes:doc,docx,pdf,xlsx,pptx,jpeg,png,jpg',
                '__terms'=>'required|string'
            ]);

if($request->get('__terms') !== 'off'){

    $pattern = '/(http|ftp|mailto|Act now|Apply now|Buy direct|Click here|Exclusive deal|Offer expires|Email marketing|Order now|Visit our website)/';
    $subject = $request->get('__message');
    if(preg_match($pattern, $subject, $matches, PREG_OFFSET_CAPTURE)){
        return \redirect()->back()->with('err_message', 'Your message has been detected as spam, please write a clean massage');
        // return response()->json('Your message has been detected as spam, please write a clean massage');
    }else{
        if($request->hasFile('__document')){
            $doc = $request->file('__document');
            $allowedfileExtension = ['doc','docx','pdf','xlsx','pptx','jpeg','png','jpg'];
            $name = pathinfo($doc->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $doc->getClientOriginalExtension();
            $filename = $name.'_'.time().'.'.$extension;
            $check=in_array($extension,$allowedfileExtension);
    if($check){
        $document = $doc->storeAs('/docs', $filename);
    }else{
        return \redirect()->back()->with('err_message', 'The document must be a file of type: doc, docx, pdf, xlsx, pptx, jpeg, png, jpg.');
        // return response()->json('There was a problem uploading your document, please upload supported file format.');
    }
    }else{
        $document = '';
    }

            $data = array([
                'first__name' => $request->get('first__name'),
                'last__name' => $request->get('last__name'),
                '__phone' => $request->get('__phone'),
                '__email' => $request->get('__email'),
                '__message' => $request->get('__message'),
                '__document' => $document,
                '__terms' => $request->get('__terms')
            ]);

                try{
                    
                Mail::send(new ContactUs($data));

                if($request->get('__terms') === 'on' ){
                    $term__ = true;
                }else{
                    $term__ = false;
                }

                    Email::create([
                        'first__name' => $request->get('first__name'),
                        'last__name' => $request->get('last__name'),
                        '__phone' => $request->get('__phone'),
                        '__email' => $request->get('__email'),
                        '__message' => $request->get('__message'),
                        '__document' => $document,
                        '__terms' => $term__
                        ]);
    
                    return \redirect()->back()->with('message', 'Message sent successfully. One of our consultants will get back to you soon.');
                    // return response()->json('Registration successful. One of our consultants will get back to you soon.');
        
                }catch(\Exception $e){

                    return \redirect()->back()->with('err_message', $e->getMessage());
                    // return response()->json($e->getMessage());
                }
    }

        }else{
        return \redirect()->back()->with('err_message', 'Please read our Term and Conditions, and tick the checkbox.');
            
                // return response()->json('Please read our Term and Conditions, and tick the checkbox.');
        }

}
}
