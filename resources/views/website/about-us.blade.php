@extends('layouts.website')

@section('content')

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h3> <span>{{__('messages.about_us')}}</span></h3>
        </div>
{{--11--}}
        <div class="row member">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <img src="assets/img/about.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                <p class="text-justify">
                   {!! __('messages.about_us_page') !!}
                </p>
            </div>
        </div>

    </div>
</section><!-- End About Section -->

@endsection
