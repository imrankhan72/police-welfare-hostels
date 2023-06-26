@extends('layouts.website')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.facilities') }}</h2>
                <ol>
                    <li><a href="{{route('home')}}">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.facilities') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Facilities Section ======= -->
    <section class="about facility">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
            {!! __('messages.facilities_page') !!}
            </div>
            <div class="row member justify-content-center">
                <div class="col-lg-6 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 content d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                    <ul>
                        <ul style="text-align:left;">
                            <li>
                                <i class="facility"><img src="assets/img/bed.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_1') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/hot-water.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_2') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/computer.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_3') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/cctv.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_4') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/television.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_5') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/water-filter.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_6') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/canteen.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_7') }}</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/meeting.png" alt=""></i>
                                <div>
                                    <h5>{{ __('messages.facility_8') }}</h5>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Facilities Section -->
@endsection
