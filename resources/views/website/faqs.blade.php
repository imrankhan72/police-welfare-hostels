@extends('layouts.website')

@section('content')


    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>FAQs</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>FAQs</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title mb-5">
                <h3>Frequently Asked <span>Questions</span></h3>
            </div>
            <div class="row justify-content-center member">
                <div class="col-xl-10">
                    <ul class="faq-list">
                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">From which academic session, the admission to the hostel will be begin? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Admission to the hostel can be obtained from 1st July 2023.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Which ranks of police officers and employees can have their daughters admitted to the hostel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Daughters of police officers and employees ranging from constables to inspector levels can be admitted to the hostel.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">How many years can one receive education while staying in the hostel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    The maximum duration of hostel accommodation is limited to maximum 4 years.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">After leaving the hostel once, can one re-enter in another academic year? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Eligibility for re-entry will be determined based on the different academic sessions, but the total duration cannot exceed 4 years.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">What is the minimum and maximum age for admission to the hostel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    For admission to the hostel, the age should be above 18 years, but less than 26 years as of 1st January 2023.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Can family members meet the students while they are staying in the hostel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Yes, there will be a visitors' room in the hostel where girls can meet their family members. However, no family member will be allowed beyond the girls' section.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq7" class="collapsed question">What are the rules for leaving the hostel? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq7" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    A written notice must be given to the hostel administration one month prior to leaving the hostel.
                                </p>
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq8" class="collapsed question">Can we cook meals in the hostel rooms? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
                            <div id="faq8" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    No, cooking meals in the hostel rooms is not allowed. You can avail of snacks and meals from the canteen. Additionally, you can also order lunch/dinner from outside using tiffin service as per the facility available.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
@endsection
