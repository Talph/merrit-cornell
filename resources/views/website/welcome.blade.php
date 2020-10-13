@extends('layouts.menu')

@section('content')
@include('partials.banners.hero')
@include('partials.quick-contact')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="page-header text-center py-4">
           <h1>Why our services are the best</h1>
           <small>We specialize in the provision of cost effective products and services</small>
           </div>
        </div>
        <div class="row">
            <div class="col-md-12">
        <div class="col-md-4 text-center">
            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi text-primary bi-wallet2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
              </svg>

            <h3 class="why_us__heading my-4">Cost effective</h3>
            <p class="why_us_p">
                Providing competitive and cost effective solutions combined with new technology and innovation. 
            </p>
        </div>
        <div class="col-md-4 text-center">
            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi text-success bi-check2-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                <path fill-rule="evenodd" d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
              </svg>

            <h3 class="why_us__heading my-4">Quality</h3>
            <p class="why_us_p">
                Exceed customer’s expectations by providing top quality products and service.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi text-secondary bi-person-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M8 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10zm4.854-7.85a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
              </svg>

            <h3 class="why_us__heading my-4">Customer Service</h3>
            <p class="why_us_p">
                Providing first class service being customer centric focused.
            </p>
        </div>
            </div>
        </div>
        <hr/>
<div class="row">
        <div class="col-md-5 brief_img_container_">
            <img src="images/png/windows.png" alt="Laptop" class="windows img image" width="100%"/>
        </div>
        <div class="col-md-7 brief__container_">
            <h3 class="brief_h3">About Merrit Cornell</h3>
            <p class="brief_p">
                Merrit Cornell specializes in the provision of cost effective products and services ranging from electronics
products and accessories, supply of food stuffs, beverages, office automations, and stationeries among others
all over Zimbabwe.</p> <p class="brief_p">
We focus on delivering high-impact solutions that incorporate customized functionality specific to the client’s
requirements.</p> <p class="brief_p">
The combination of thorough process, comprehensive experience and expansive creative vision enables us
to provide services and products that are innovative, usable and reliable. Merrit Cornell was established in response to the growing market demand for high quality innovative solutions at affordable prices... <a class="link btn bg-primary text-white" href="/who-we-are">read more</a>
</p>       
        </div>
        </div>

    </div>
</div>
@include('partials.banners.contact-banner')
@include('partials.footer')
@endsection
