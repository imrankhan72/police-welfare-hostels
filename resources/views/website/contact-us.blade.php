@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact Us</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h3><span>Contact Us</span></h3>
                <p>If you have any queries, Please feel free to contact us on working hours.</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-4">
                    <div class="info-box mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Bhopal</h3>
                        <p><b>Address-</b> Police Welfare Hostel, Bhopal</p>
                        <p><b>Email-</b> contact@example.com</p>
                        <p><b>Phone-</b> +91-1234567890</p>
                        <br/>
                        <p>
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 284px;" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Indore</h3>
                        <p><b>Address-</b> Police Welfare Hostel, Indore</p>
                        <p><b>Email-</b> contact@example.com</p>
                        <p><b>Phone-</b> +91-1234567890</p>
                        <br/>
                        <p>
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 284px;" allowfullscreen></iframe>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-box  mb-4">
                        <i class="bx bx-map"></i>
                        <h3>Gwalior</h3>
                        <p><b>Address-</b> Police Welfare Hostel, Gwalior</p>
                        <p><b>Email-</b> contact@example.com</p>
                        <p><b>Phone-</b> +91-1234567890</p>
                        <br/>
                        <p>
                            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 284px;" allowfullscreen></iframe>
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
                                <h3>Headquarter Address</h3>
                                <p>Police Welfare Hostels, PHQ, Jail Road, Bhopal</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Headquarter Email</h3>
                                <p>contact@example.com</p>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="info-box  mb-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Headquarter Phone</h3>
                                <p>+91 5589 55488 55</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
