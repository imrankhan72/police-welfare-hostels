@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.rules-regulations') }} </h2>
                <ol>
                    <li><a href="{{route('home')}}">{{ __('messages.rules-eligibility') }}</a></li>
                    <li>{{ __('messages.rules-regulations') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row member">
                <div class="section-title">
                  <h3>{{ __('messages.rules-regulations') }} </h3>
              </div>
                <div class="col-lg-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul class="text-justify">
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_1') }}
                        </li>
                   {{--     <li>
                            <i class="bx bx-check"></i><strike>{{ __('messages.point_2') }}</strike>
                        </li> --}}
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_3') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_4') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_5') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_6') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_7') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_8') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_9') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_10') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_11') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_12') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_13') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_14') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_15') }}
                        </li>
                        <li>
                            <i class="bx bx-check"></i>{{ __('messages.point_16') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->

@endsection
