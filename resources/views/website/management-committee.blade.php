@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.management_committee') }}</h2>
                <ol>
                    <li><a href="#">{{ __('messages.home') }}</a></li>
                    <li>{{ __('messages.management_committee') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <section id="team" class="team">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-title">
          <h3>{!! __('messages.mgnt-bhopal') !!}</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.b-team-name1') }}</h4>
                <span>{{ __('messages.b-team-designation1') }}</span>
                <span>{{ __('messages.b-team-mobile1') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.b-team-name2') }}</h4>
                <span>{{ __('messages.b-team-designation2') }}</span>
                <span>{{ __('messages.b-team-mobile2') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.b-team-name3') }}</h4>
                <span>{{ __('messages.b-team-designation3') }}</span>
                <span>{{ __('messages.b-team-mobile3') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.b-team-name4') }}</h4>
                <span>{{ __('messages.b-team-designation4') }}</span>
                <span>{{ __('messages.b-team-mobile4') }}</span>
              </div>
            </div>
          </div>
        </div>

        <hr>

        <div class="section-title">
          <h3>{{ __('messages.mgnt-indore') }}</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.i-team-name1') }}</h4>
                <span>{{ __('messages.i-team-designation1') }}</span>
                <span>{{ __('messages.i-team-mobile1') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.i-team-name2') }}</h4>
                <span>{{ __('messages.i-team-designation2') }}</span>
                <span>{{ __('messages.i-team-mobile3') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.i-team-name3') }}</h4>
                <span>{{ __('messages.i-team-designation3') }}</span>
                <span>{{ __('messages.i-team-mobile3') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.i-team-name4') }}</h4>
                <span>{{ __('messages.i-team-designation4') }}</span>
                <span>{{ __('messages.i-team-mobile4') }}</span>
              </div>
            </div>
          </div>
        </div>

        <hr>

        <div class="section-title">
          <h3>{{ __('messages.mgnt-gwalior') }}</h3>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.g-team-name1') }}</h4>
                <span>{{ __('messages.g-team-designation1') }}</span>
                <span>{{ __('messages.g-team-mobile1') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.g-team-name2') }}</h4>
                <span>{{ __('messages.g-team-designation2') }}</span>
                <span>{{ __('messages.g-team-mobile2') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.g-team-name3') }}</h4>
                <span>{{ __('messages.g-team-designation3') }}</span>
                <span>{{ __('messages.g-team-mobile3') }}</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch aos-init" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{ __('messages.g-team-name4') }}</h4>
                <span>{{ __('messages.g-team-designation4') }}</span>
                <span>{{ __('messages.g-team-mobile4') }}</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

@endsection
