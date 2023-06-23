@extends('layouts.website')

@section('content')


        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ __('messages.hostels') }}</h2>
                    <ol>
                        <li><a href="#">{{ __('messages.admission') }}</a></li>
                        <li>{{ __('messages.hostels') }}</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Hostel Section ======= -->
        <section class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                {!! __('messages.hostel_page') !!}
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><img src="assets/img/bhopal.jpg" class="img-fluid" alt=""></div>
                            <h4><a href="">{{ __('messages.bhopal') }}</a></h4>
                            <p>{!! __('messages.b_hostel_seats') !!}</p>
                            <p>{!! __('messages.b_hostel_time') !!}</p>
                            <p>{!! __('messages.b_hostel_contact') !!}</p>
                            <div class="btn-wrap pricing pt-3">
                                <a href="{{route('apply-now')}}" class="btn-buy">{{ __('messages.apply_now') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><img src="assets/img/indore.jpg" class="img-fluid" alt=""></div>
                            <h4><a href="">{{ __('messages.indore') }}</a></h4>
                            <p>{!! __('messages.i_hostel_seats') !!}</p>
                            <p>{!! __('messages.i_hostel_time') !!}</p>
                            <p>{!! __('messages.i_hostel_contact') !!}</p>
                            <div class="btn-wrap pricing pt-3">
                                <a href="{{route('apply-now')}}" class="btn-buy">{{ __('messages.apply_now') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><img src="assets/img/gwalior.jpg" class="img-fluid" alt=""></div>
                            <h4><a href="">{{ __('messages.gwalior') }}</a></h4>
                            <p>{!! __('messages.g_hostel_seats') !!}</p>
                            <p>{!! __('messages.g_hostel_time') !!}</p>
                            <p>{!! __('messages.g_hostel_contact') !!}</p>
                            <div class="btn-wrap pricing pt-3">
                                <a href="{{route('apply-now')}}" class="btn-buy">{{ __('messages.apply_now') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Hostel Section -->


@endsection
