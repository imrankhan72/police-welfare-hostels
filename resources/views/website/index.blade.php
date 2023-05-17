@extends('layouts.website')


@section('content')
    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">
        <div class="container align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <a href="{{route('home')}}" class="logo"><img src="/assets/img/mppolicelogo.png" alt=""></a>
            <h2> {{ __('messages.welcome') }}</h2>
            <h2 style="font-weight:600;">{{ __('messages.bhopal') }} | {{ __('messages.indore') }} | {{ __('messages.gwalior') }}</h2>
            <div class="align-items-center">
                <a href="/apply-now" class="btn-get-started">{{ __('messages.apply_now') }}</a>
                <a href="hostels.html" class="btn-get-started">{{ __('messages.more_details') }}</a>
            </div>
        </div>
    </section><!-- End Hero -->
@endsection


