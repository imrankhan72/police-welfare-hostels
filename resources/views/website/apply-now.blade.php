@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">


            <div class="d-flex justify-content-between align-items-center">
                <h2>Apply For Accommodation</h2>
                <ol>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Apply For Accommodation</li>
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
                <h2>Admission</h2>
                <h3>Apply For <span>Accommodation</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">
                    <div class="form-wrap">
                        <form method="post" action="{{route('applicants-store')}}">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fpb">Full Name of Applicant / आवेदक का पूरा नाम</label>
                                        <input type="text" name="name" id="name" placeholder="Enter full name in capital letters" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="father_name" class="fpb">Father's Name / पिता का नाम </label>
                                        <input type="text" name="father_name" id="father_name" placeholder="Enter Father Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mother_name" class="fpb">Mother's Name / माता का नाम </label>
                                        <input type="text" name="mother_name" id="mother_name" placeholder="Enter Mother Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fpb">Gender / लिंग </label>
                                        <select id="dropdown" name="gender" class="form-control" required>
                                            <option disabled selected value>Select Gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="fpb">Caste / जाति</label><br/><br/>
                                        <fieldset>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline1" value="General" name="caste" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="customRadioInline1">GEN</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" value="OBC" name="caste" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">OBC</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" value="ST" name="caste" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">ST</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline4" value="SC" name="caste" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline4">SC</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline5" value="EWS" name="caste" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline5">EWS</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="aadhar_no" class="fpb">Aadhaar No. / आधार नंबर</label>
                                        <input type="text" name="aadhar_no" id="aadhar_no" placeholder="Enter Aadhar Number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobile_no" class="fpb">Mobile No. / मोबाइल नंबर </label>
                                        <input type="text" name="mobile_no" id="mobile_no" placeholder="Enter Mobile Number" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dob" class="fpb">Date of Birth (DD/MM/YY) / जन्म तारीख</label>
                                        <input type="date" id="dob" name="dob" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label  for="education" class="fpb">Education/Course / शिक्षा </label>
                                        <input type="text" name="education" id="education" placeholder="Enter Education Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label  for="institute_name" class="fpb">Name of the Educational Institution in which Admission is Sought </label>
                                        <label  for="institute_name" class="fpb"> शिक्षण संस्थान का नाम, जिसमें प्रवशे लिया जाना है। </label>
                                        <input type="text" name="institute_name" id="institute_name" placeholder="Enter Institution Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="in_police_service_name" class="fpb">Who is in the Police Service? Mother/ Father</label>
                                        <label for="in_police_service_name" class="fpb">पुलिस में कौन है, माता/पिता  </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="name-label" for="PName" class="fpb">Name / नाम </label>
                                        <input type="text" name="in_police_service_name" id="in_police_service_name" placeholder="Enter Name" class="form-control" required>
                                        <label id="name-label" for="designation" class="fpb">Designation / पद </label>
                                        <select id="dropdown" name="designation" class="form-control" required>
                                            <option disabled selected value>Select Designation</option>
                                            <option value="Inspector">Inspector</option>
                                            <option value="Sub Inspector">Sub Inspector</option>
                                            <option value="Assistent Sub Inspector">Assistent Sub Inspector</option>
                                            <option value="Head Constable">Head Constable</option>
                                            <option value="Constable">Constable</option>
                                        </select>
                                        <label id="name-label" for="inservice_contact" class="fpb">Mobile No. / मोबाइल नंबर </label>
                                        <input type="text" name="inservice_contact" id="inservice_contact" placeholder="Enter Mobile Number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="deployment_unit_district" class="fpb">Deployment Unit and District / पदस्थापना इकाई एवं जिला</label>
                                        <input type="text" name="deployment_unit_district" id="deployment_unit_district" placeholder="Enter District" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="posted_police_station" class="fpb">Posted Police Station/Office / तैनाती का थाना/कार्यालय</label>
                                        <input type="text" name="posted_police_station" id="posted_police_station" placeholder="Enter Police Station Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="local_guardian_name" class="fpb">Local Guardian (if any) </label>
                                        <label for="local_guardian_name" class="fpb"> स्थानीय अभिभावक (यदि कोई हो तो) </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="name-label" for="local_guardian_name" class="fpb">Name / नाम </label>
                                        <input type="text" name="local_guardian_name" id="local_guardian_name" placeholder="Enter Name" class="form-control" required>
                                        <label id="name-label" for="guardian_designation" class="fpb">Designation / पद </label>
                                        <select id="dropdown" name="guardian_designation" class="form-control" required>
                                            <option disabled selected value>Select Designation</option>
                                            <option value="Inspector">Inspector</option>
                                            <option value="Sub Inspector">Sub Inspector</option>
                                            <option value="Assistent Sub Inspector">Assistent Sub Inspector</option>
                                            <option value="Head Constable">Head Constable</option>
                                            <option value="Constable">Constable</option>
                                            <option value="Non Police Officer">Non Police Officer</option>
                                        </select>
                                        <label id="name-label" for="guardian_contact_no" class="fpb">Mobile No. / मोबाइल नंबर </label>
                                        <input type="text" name="guardian_contact_no" id="guardian_contact_no" placeholder="Enter Mobile Number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group">
                                    <h5>Attachment checklist </h5>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="coloured_photo_file_url" class="form-label fpb">Coloured Photo / रंगीन फोटो</label>
                                        <input type="file" name="coloured_photo_file_url" class="form-control" id="Photo">
                                        <label for="Aadhaar" class="form-label fpb">Copy of Aadhaar Card / आधार कार्ड की छायाप्रति</label>
                                        <input type="file" name="aadhar_copy_file_url"class="form-control" id="Aadhaar">
                                        <label for="Marksheets" class="form-label fpb">Copy of Marksheets / अंकसूची की छायाप्रति</label>
                                        <input type="file" name="police_id_letter_file_url" class="form-control" id="Marksheets">
                                        <label for="pil" class="form-label fpb">Copy of mother/father's police identification letter / माता/पिता के पुलिस परिचय पत्र की छायाप्रति</label>
                                        <input type="file" name="police_service_cert_file_url" class="form-control" id="pil">
                                        <label for="psc" class="form-label fpb">Copy of identity card issued by coaching/college / कोचिंग/कॉलजे द्वारा जारी परिचय पत्र की छायाप्रति</label>
                                        <input type="file" name="college_id_card_file_url"class="form-control" id="psc">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="btn-wrap pricing">
                                        <button type="submit" class="btn-buy">Submit Form </button>
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
