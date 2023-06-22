@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.about_us') }}</h2>
                <ol>
                    <li><a href="#">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.about_us') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3> <span>Management Committee</span></h3>
            </div>

            <div class="row member">
               This is Management Committee.
            </div>

        </div>
    </section><!-- End About Section -->

@endsection
