@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.contact_us') }}</h2>
                <ol>
                    <li><a href="index.html">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.contact_us') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            {!! __('messages.contcat_us_page') !!}

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        {!! __('messages.bhopal_address') !!}

                        <br/>
                        <p>
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.34596400216!2d77.24108052383016!3d23.199639464627683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1684407453871!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 284px;" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-map"></i>
                        {!! __('messages.indore_address') !!}

                        <br/>
                        <p>
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.34596400216!2d77.24108052383016!3d23.199639464627683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1684407453871!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 284px;" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-map"></i>
                        {!! __('messages.gwalior_address') !!}
                        <br/>
                        <p>
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234700.34596400216!2d77.24108052383016!3d23.199639464627683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c428f8fd68fbd%3A0x2155716d572d4f8!2sBhopal%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1684407453871!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 284px;" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>

            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6 ">
                    <div class="row" data-aos="fade-up" data-aos-delay="100">
                        <div class="col-lg-12">
                            <div class="info-box mb-4">
                                <i class="bx bx-map"></i>
                                {!! __('messages.headquarter_address') !!}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                {!! __('messages.headquarter_email') !!}
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                {!! __('messages.headquarter_phone') !!}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('messages.your_name') }}" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="{{ __('messages.your_email') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{ __('messages.subject') }}" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="{{ __('messages.message') }}" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">{{ __('messages.send_messgae') }}</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
