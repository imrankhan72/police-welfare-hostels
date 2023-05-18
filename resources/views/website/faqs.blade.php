@extends('layouts.website')

@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.faq') }} </h2>
                <ol>
                    <li><a href="index.html">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.faq') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-5">
                <h3>{{ __('messages.faq') }}</h3>
            </div>
            <div class="row justify-content-center member">
                <div class="col-xl-10">
                    <ul class="faq-list">
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">{{ __('messages.faq_1') }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                {{ __('messages.faq_list1') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">{{ __('messages.faq_2') }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                {{ __('messages.faq_list2') }}
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">{{ __('messages.faq_3') }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                {{ __('messages.faq_list3') }}
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">{{ __('messages.faq_4') }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                {{ __('messages.faq_list4') }}
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">{{ __('messages.faq_5') }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                {{ __('messages.faq_list5') }}</p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">{{ __('messages.faq_6') }}<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                {{ __('messages.faq_list6') }}
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">{{ __('messages.faq_7') }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                {{ __('messages.faq_list7') }}
                                <p></p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">{{ __('messages.faq_8') }} <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                                {{ __('messages.faq_list8') }}
                                <p></p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
