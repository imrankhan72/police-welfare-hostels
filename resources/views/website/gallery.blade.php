@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Photo Gallery</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Photo Gallery</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Gallery</h2>
                <h3>Explore <span>Photographs</span></h3>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-bhopal">Bhopal</li>
                        <li data-filter=".filter-indore">Indore</li>
                        <li data-filter=".filter-gwalior">Gwalior</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior">
                    <img src="assets/img/gallery/gwl-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="assets/img/gallery/gwl-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior">
                    <img src="assets/img/gallery/gwl-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="assets/img/gallery/gwl-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior">
                    <img src="assets/img/gallery/gwl-3.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="assets/img/gallery/gwl-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior">
                    <img src="assets/img/gallery/gwl-4.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="assets/img/gallery/gwl-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-indore">
                    <img src="assets/img/gallery/ind-1.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="assets/img/gallery/ind-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-indore">
                    <img src="assets/img/gallery/ind-2.jpg" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <a href="assets/img/gallery/ind-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
