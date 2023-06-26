@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">


            <div class="d-flex justify-content-between align-items-center">
                <h2>{{ __('messages.apply') }}</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{ __('messages.apply') }}</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif

                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
            </div>
            <div class="section-title">
                <h2>{{ __('messages.admission') }}</h2>
                <h3>{{ __('messages.apply-form') }}</h3>
            </div>

            <div class="row">
          <div class="col-lg-12 aos-init aos-animate" data-aos="fade-right" data-aos-delay="100">
              <div class="form-wrap">	
					<form id="survey-form">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="fullname" class="fpb">{{ __('messages.applicant-name') }} *</label>
									<input type="text" name="fullname" id="fullname" placeholder="Enter full name in capital letters" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="fathername" class="fpb">Father's Name / पिता का नाम *</label>
									<input type="text" name="fathername" id="fathername" placeholder="Enter Father Name" class="form-control" required="">
								</div>
							</div>
						</div>
			
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="mothername" class="fpb">Mother's Name / माता का नाम *</label>
									<input type="text" name="mothername" id="mothername" placeholder="Enter Mother Name" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="fpb">Gender / लिंग *</label>
									<select id="dropdown" name="role" class="form-control" required="">
										<option disabled="" selected="" value="">Select Gender</option>
										<option value="student">Female</option>
										<option value="job">Others</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="fpb">Caste / जाति *</label>
									<select id="dropdown" name="role" class="form-control" required="">
										<option disabled="" selected="" value="">Select Caste</option>
										<option value="student">GEN</option>
										<option value="job">OBC</option>
										<option value="job">ST</option>
										<option value="job">SC</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="aadharno" class="fpb">Aadhaar No. / आधार नंबर *</label>
									<input type="text" name="aadharno" id="aadharno" placeholder="Enter Aadhar Number" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="mobileno" class="fpb">Mobile No. / मोबाइल नंबर *</label>
									<input type="text" name="mobileno" id="mobileno" placeholder="Enter Mobile Number" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="dob" class="fpb">Date of Birth (DD/MM/YY) / जन्म तारीख *</label>
									<input type="date" id="dob" name="dob" class="form-control">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="insadmission" class="fpb">Name of the Educational Institution in which Admission has been taken * </label>
									<label for="insadmission" class="fpb"> शिक्षण संस्थान का नाम, जिसमें प्रवशे लिया जाना है। *</label>
									<input type="text" name="insadmission" id="insadmission" placeholder="Enter Institution Name" class="form-control" required="">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label for="education" class="fpb">Name of Course / शिक्षा का नाम *</label>
									<input type="text" name="education" id="education" placeholder="Enter Course Name" class="form-control" required="">
								</div>
							</div>
						</div>

						<hr>

						<div class="row">
							<label for="name" class="fpb">Who is in the Police Service? Mother/ Father / पुलिस में कौन है, माता/पिता *</label>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="PName" class="fpb">Who is in the Police Service / पुलिस में कौन * </label>
									<select id="dropdown" name="PDesignation" class="form-control" required="">
										<option disabled="" selected="" value="">Select</option>
										<option value="student">Father</option>
										<option value="job">Mother</option>
										<option value="job">Both</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="PName" class="fpb">Name / नाम *</label>
									<input type="text" name="PName" id="PName" placeholder="Enter Name" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="PName" class="fpb">Designation / पद *</label>
									<select id="dropdown" name="PDesignation" class="form-control" required="">
										<option disabled="" selected="" value="">Select Designation</option>
										<option value="student">Inspector</option>
										<option value="job">Sub Inspector</option>
										<option value="job">Assistent Sub Inspector</option>
										<option value="job">Head Constable</option>
										<option value="job">Constable</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="PMobile" class="fpb">Mobile No. / मोबाइल नंबर *</label>
									<input type="text" name="PMobile" id="PMobile" placeholder="Enter Mobile Number" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="PMobile" class="fpb">Employee Code / कर्मचारी कोड *</label>
									<input type="text" name="PMobile" id="PMobile" placeholder="Enter Employee Code" class="form-control" required="">
								</div>
							</div>
						</div>

						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="dud" class="fpb">Deployment Unit and District / पदस्थापना इकाई एवं जिला *</label>
									<input type="text" name="dud" id="dud" placeholder="Enter District" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="pps" class="fpb">Posted Police Station/Office / तैनाती का थाना/कार्यालय *</label>
									<input type="text" name="pps" id="pps" placeholder="Enter Police Station Name" class="form-control" required="">
								</div>
							</div>
						</div>
						<hr>

						<div class="row">
							<label for="name" class="fpb">Local Guardian (if any) / स्थानीय अभिभावक (यदि कोई हो तो)</label>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="LName" class="fpb">Name / नाम </label>
									<input type="text" name="LName" id="LName" placeholder="Enter Name" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="LDesignation" class="fpb">Relation with Guardian / अभिभावक से सम्बन्ध </label>
									<select id="dropdown" name="PDesignation" class="form-control" required="">
										<option disabled="" selected="" value="">Select Relation</option>
										<option value="student">Brother</option>
										<option value="job">Sister</option>
										<option value="job">Maternal Uncle</option>
										<option value="job">Uncle (Paternal)</option>
										<option value="job">Aunt</option>
										<option value="job">Nephew</option>
										<option value="job">Niece</option>
										<option value="job">Cousin</option>
										<option value="job">Grandfather</option>
										<option value="job">Grandmother</option>
										<option value="job">Friend</option>
										<option value="job">Other</option>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="LMobile" class="fpb">Mobile No. / मोबाइल नंबर </label>
									<input type="text" name="LMobile" id="LMobile" placeholder="Enter Mobile Number" class="form-control" required="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label id="name-label" for="LMobile" class="fpb">Address / पता </label>
									<input type="text" name="LMobile" id="LMobile" placeholder="Enter Address" class="form-control" required="">
								</div>
							</div>
						</div>

						<hr>
						<div class="row">
							<div class="form-group">
								<h5>Attachment checklist *</h5>
								<p style="color:red; font-size:13px;">Note: Attachments should not exceed 500 KB and be in JPG, JEPG, and PNG formats.</p>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label for="Photo" class="form-label fpb">Coloured Passport Size Photo / रंगीन पासपोर्ट साइज़ फोटो *</label>
									<input type="file" class="form-control" id="Photo">
									<label for="Aadhaar" class="form-label fpb">Copy of Aadhaar Card / आधार कार्ड की छायाप्रति *</label>
									<input type="file" class="form-control" id="Aadhaar">
									<label for="10" class="form-label fpb">Copy of 10th Marksheets / 10वी की अंकसूची की छायाप्रति *</label>
									<input type="file" class="form-control" id="10">
									<label for="12" class="form-label fpb">Copy of 12th Marksheets / 12वी की अंकसूची की छायाप्रति *</label>
									<input type="file" class="form-control" id="12">
									<label for="pil" class="form-label fpb">Copy of mother/father's police identity card / माता/पिता के पुलिस परिचय पत्र की छायाप्रति *</label>
									<input type="file" class="form-control" id="pil">
									<label for="psc" class="form-label fpb">Copy of mother/father's police service certificate / माता/पिता के पुलिस सेवा प्रमाण पत्र की छायाप्रति *</label>
									<input type="file" class="form-control" id="psc">
									<label for="lg" class="form-label fpb">Passport size photo of local Guardian  / स्थानीय अभिभावक का पासपोर्ट साइज़ फोटो *</label>
									<input type="file" class="form-control" id="lg">
									<label for="id" class="form-label fpb">Copy of identity card issued by coaching/college / कोचिंग/कॉलजे द्वारा जारी परिचय पत्र की छायाप्रति *</label>
									<input type="file" class="form-control" id="id">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-4">
								<div class="btn-wrap pricing">
								   <a href="#" class="btn-buy">Submit Form </a>
								</div>
							</div>
						</div>
					</form>
			  </div>
          </div>
        </div>

        </div>
    </section><!-- End About Section -->
@endsection
