@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.photo_gallery') }}</h2>
                <ol>
                    <li><a href="{{route('home')}}">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.photo_gallery') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
            {!! __('messages.gallery_page') !!}
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">{{ __('messages.all') }}</li>
                        <li data-filter=".filter-bhopal">{{ __('messages.bhopal') }}</li>
                        <li data-filter=".filter-indore">{{ __('messages.indore') }}</li>
                        <li data-filter=".filter-gwalior">{{ __('messages.gwalior') }}</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" style="position: relative; height: 2311.39px;">

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 0px; top: 0px;">
            <img src="assets/img/gallery/indore/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 380px; top: 0px;">
            <img src="assets/img/gallery/indore/2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 760px; top: 0px;">
            <img src="assets/img/gallery/indore/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 0px; top: 296.062px;">
            <img src="assets/img/gallery/indore/4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 760px; top: 297.344px;">
            <img src="assets/img/gallery/indore/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 380px; top: 297.453px;">
            <img src="assets/img/gallery/indore/6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 0px; top: 525.953px;">
            <img src="assets/img/gallery/indore/7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 380px; top: 527.187px;">
            <img src="assets/img/gallery/indore/8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 760px; top: 594.11px;">
            <img src="assets/img/gallery/indore/9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-indore" style="position: absolute; left: 0px; top: 823.062px;">
            <img src="assets/img/gallery/indore/10.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/indore/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Indore Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 380px; top: 824.187px;">
            <img src="assets/img/gallery/gwalior/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 760px; top: 891.11px;">
            <img src="assets/img/gallery/gwalior/2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 0px; top: 1120.06px;">
            <img src="assets/img/gallery/gwalior/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 380px; top: 1123.39px;">
            <img src="assets/img/gallery/gwalior/4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 760px; top: 1188.11px;">
            <img src="assets/img/gallery/gwalior/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 0px; top: 1416.83px;">
            <img src="assets/img/gallery/gwalior/6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 380px; top: 1420.39px;">
            <img src="assets/img/gallery/gwalior/7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 760px; top: 1485.11px;">
            <img src="assets/img/gallery/gwalior/8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 0px; top: 1713.83px;">
            <img src="assets/img/gallery/gwalior/9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-gwalior" style="position: absolute; left: 380px; top: 1717.39px;">
            <img src="assets/img/gallery/gwalior/10.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/gwalior/10.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Gwalior Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bhopal" style="position: absolute; left: 760px; top: 1782.11px;">
            <img src="assets/img/gallery/bhopal/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/bhopal/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bhopal Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bhopal" style="position: absolute; left: 0px; top: 2010.83px;">
            <img src="assets/img/gallery/bhopal/2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/bhopal/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bhopal Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-bhopal" style="position: absolute; left: 380px; top: 2014.39px;">
            <img src="assets/img/gallery/bhopal/3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="assets/img/gallery/bhopal/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Bhopal Hostel"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

        </div>
    </section><!-- End Portfolio Section -->
@endsection
