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
        <div class="col-md-4 text-center">
            <i class="fas fa-6x text-info fa-dollar-sign"></i>
            <h3 class="why_us__heading my-4">Cost effective</h3>
            <p class="why_us_p">
                Providing competitive and cost effective solutions combined with new technology and innovation. 
            </p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-6x text-success fa-check"></i>
            <h3 class="why_us__heading my-4">Quality</h3>
            <p class="why_us_p">
                Exceed customer’s expectations by providing top quality products and service.
            </p>
        </div>
        <div class="col-md-4 text-center">
            <i class="fas fa-6x color-ci fa-hands-helping"></i>
            <h3 class="why_us__heading my-4"> Service</h3>
            <p class="why_us_p">
                Providing first class service being customer centric focused.
            </p>
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
to provide services and products that are innovative, usable and reliable. Merrit Cornell was established in response to the growing market demand for high quality innovative solutions at affordable prices...<a class="link" href="/who-we-are">read more</a>
</p>       
        </div>
        </div>

    </div>
</div>
@include('partials.banners.contact-banner')
@include('partials.footer')
@endsection
