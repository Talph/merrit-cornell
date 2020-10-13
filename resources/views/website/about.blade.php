@extends('layouts.menu')

@section('content')
@include('partials.banners.about-banner')
@include('partials.quick-contact')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="page-header py-4">
<div class="row"><h1 class="col-md-8">We focus on delivering high-impact solutions that incorporate customized functionality specific to the client’s
    requirements.</h1></div> 
            </div>  
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 ">
            <div class="about__p">
            <p class="first-letter ">Merrit Cornell specializes in the provision of cost effective products and services ranging from electronics
products and accessories, supply of food stuffs, beverages, office automations, and stationeries among others
all over Zimbabwe.
            </p>
            <p>
                The combination of thorough process, comprehensive experience and expansive creative vision enables us
                to provide services and products that are innovative, usable and reliable. Merrit Cornell was established in response to the growing market demand for high quality innovative solutions at affordable prices.                
                </p>
                <p>Our commitment to refining the development has allowed us to introduce a wide range of products as well as customized solutions that enable businesses to simplify their operations. With business experience and an ongoing relationship with well established companies, our staffs have worked
                    with business leading companies to acquire an in depth understanding of the latest technologies and processes.
                </p>
            </div>
        </div>
<div class="col-md-6">
    <img class="merrit-cornell-products" src="images/png/cm-products.png" alt="merrit cornell products" width="100%">
</div>
    </div>
<br/><br/>
    <hr class="py-2">
    <div class="row py-4">
        <div class="col-md-4">
            <h3 class="company_h text-primary">Our mission
            </h3>
            <p class="company_p">Our mission is to become an efficient and effective black empowered supplier, supplying any office environment and satisfying any company with solutions to stationery, cleaning chemicals, electrical
                components, IT Equipment, corporate clothing (gifting) and vagetable produces. We intend on offering
                our clients the ultimate in satisfactory service, economically viable and competitive prices yet never
                compromising on our quality.</p>
        </div>
        <div class="col-md-4">
            <h3 class="company_h text-success">Our vision 
            </h3>
            <p class="company_p">We intend on becoming an all-encompassing business supplier by:</p>
                <ul>
                    <li>Exceeding customer’s expectations by understanding their business.</li>
                    <li>Providing competitive and cost effective solutions combined with new technology and innovation.</li>
                    <li>Providing first class service being customer centric focused.</li>
            </ul>
        </div>

        <div class="col-md-4">
            <h3 class="company_h text-danger"> Core values
            </h3>
            <p class="company_p">
                <ul>
                <li>Innovation-Always looking out for new and better ways of working.</li>
                <li>Teamwork – We all work seamlessly to ensure our clients are happy.</li>
                <li>Integrity - Efficiency in how we use resources to deliver on our role.</li>
                <li>Quality – From our products, branding and customer service.</li>
            </ul>
        </p>
        </div>
    </div>
</div>
@include('partials.team')
@include('partials.banners.contact-banner')
@include('partials.footer')
@endsection
