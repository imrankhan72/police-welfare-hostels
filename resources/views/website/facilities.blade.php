@extends('layouts.website')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Facilities</h2>
                <ol>
                    <li><a href="#">Admission</a></li>
                    <li>Facilities</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Facilities Section ======= -->
    <section class="about facility">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h3>Provided <span>Facilities</span></h3>
                <p>Madhya Pradesh Police Department providing facilities for accommodation are following </p>
            </div>
            <div class="row member justify-content-center">
                <div class="col-lg-6 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/about.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <ul>
                        <ul style="text-align:left;">
                            <li>
                                <i class="facility"><img src="assets/img/bed.png" alt=""></i>
                                <div>
                                    <h5>Bed, Almirah & a Study Table</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/hot-water.png" alt=""></i>
                                <div>
                                    <h5>Geyser (for hot water)</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/computer.png" alt=""></i>
                                <div>
                                    <h5>Computer in the common room</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/cctv.png" alt=""></i>
                                <div>
                                    <h5>Security guards and CCTV cameras</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/television.png" alt=""></i>
                                <div>
                                    <h5>Television for entertainment in the common room</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/water-filter.png" alt=""></i>
                                <div>
                                    <h5>R.O. water purifier</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/canteen.png" alt=""></i>
                                <div>
                                    <h5>Canteen for snacks and meals (As per requirement)</h5>
                                </div>
                            </li>
                            <li>
                                <i class="facility"><img src="assets/img/meeting.png" alt=""></i>
                                <div>
                                    <h5>Visitor's room for meeting family members</h5>
                                </div>
                            </li>
                            <li style="margin-top:0px;">
                                <i class="facility"><img src="assets/img/tiffin.png" alt=""></i>
                                <div>
                                    <h5>Girls can order lunch/dinner from outside using tiffin service</h5>
                                </div>
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </section><!-- End Facilities Section -->
@endsection
