@extends('layouts.website')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Apply For Accommodation</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Apply For Accommodation</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Admission</h2>
                <h3>Apply For <span>Accommodation</span></h3>
            </div>

            <div class="row">
                <div class="col-lg-12" data-aos="fade-right" data-aos-delay="100">
                    <div class="form-wrap">
                        <form id="survey-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fullname" class="fpb">Full Name of Applicant / आवेदक का पूरा नाम</label>
                                        <input type="text" name="fullname" id="fullname" placeholder="Enter full name in capital letters" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fathername" class="fpb">Father's Name / पिता का नाम </label>
                                        <input type="text" name="fathername" id="fathername" placeholder="Enter Father Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mothername" class="fpb">Mother's Name / माता का नाम </label>
                                        <input type="text" name="mothername" id="mothername" placeholder="Enter Mother Name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="fpb">Gender / लिंग </label>
                                        <select id="dropdown" name="role" class="form-control" required>
                                            <option disabled selected value>Select Gender</option>
                                            <option value="student">Male</option>
                                            <option value="job">Female</option>
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
                                                <input type="radio" id="customRadioInline1" value="Definitely" name="customRadioInline1" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="customRadioInline1">GEN</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline2" value="Maybe" name="customRadioInline2" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline2">OBC</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline3" value="Not sure" name="customRadioInline3" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline3">ST</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline4" value="Not sure" name="customRadioInlin4" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline4">SC</label>
                                            </div>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadioInline5" value="Not sure" name="customRadioInline5" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadioInline5">EWS</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="aadharno" class="fpb">Aadhaar No. / आधार नंबर</label>
                                        <input type="text" name="aadharno" id="aadharno" placeholder="Enter Aadhar Number" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mobileno" class="fpb">Mobile No. / मोबाइल नंबर </label>
                                        <input type="text" name="mobileno" id="mobileno" placeholder="Enter Mobile Number" class="form-control" required>
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
                                        <label  for="insadmission" class="fpb">Name of the Educational Institution in which Admission is Sought </label>
                                        <label  for="insadmission" class="fpb"> शिक्षण संस्थान का नाम, जिसमें प्रवशे लिया जाना है। </label>
                                        <input type="text" name="insadmission" id="insadmission" placeholder="Enter Institution Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fpb">Who is in the Police Service? Mother/ Father</label>
                                        <label for="name" class="fpb">पुलिस में कौन है, माता/पिता  </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="name-label" for="PName" class="fpb">Name / नाम </label>
                                        <input type="text" name="PName" id="PName" placeholder="Enter Name" class="form-control" required>
                                        <label id="name-label" for="PDesignation" class="fpb">Designation / पद </label>
                                        <select id="dropdown" name="PDesignation" class="form-control" required>
                                            <option disabled selected value>Select Designation</option>
                                            <option value="student">Inspector</option>
                                            <option value="job">Sub Inspector</option>
                                            <option value="job">Assistent Sub Inspector</option>
                                            <option value="job">Head Constable</option>
                                            <option value="job">Constable</option>
                                        </select>
                                        <label id="name-label" for="PMobile" class="fpb">Mobile No. / मोबाइल नंबर </label>
                                        <input type="text" name="PMobile" id="PMobile" placeholder="Enter Mobile Number" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="dud" class="fpb">Deployment Unit and District / पदस्थापना इकाई एवं जिला</label>
                                        <input type="text" name="dud" id="dud" placeholder="Enter District" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pps" class="fpb">Posted Police Station/Office / तैनाती का थाना/कार्यालय</label>
                                        <input type="text" name="pps" id="pps" placeholder="Enter Police Station Name" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name" class="fpb">Local Guardian (if any) </label>
                                        <label for="name" class="fpb"> स्थानीय अभिभावक (यदि कोई हो तो) </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label id="name-label" for="LName" class="fpb">Name / नाम </label>
                                        <input type="text" name="LName" id="LName" placeholder="Enter Name" class="form-control" required>
                                        <label id="name-label" for="LDesignation" class="fpb">Designation / पद </label>
                                        <select id="dropdown" name="PDesignation" class="form-control" required>
                                            <option disabled selected value>Select Designation</option>
                                            <option value="student">Inspector</option>
                                            <option value="job">Sub Inspector</option>
                                            <option value="job">Assistent Sub Inspector</option>
                                            <option value="job">Head Constable</option>
                                            <option value="job">Constable</option>
                                            <option value="job">Non Police Officer</option>
                                        </select>
                                        <label id="name-label" for="LMobile" class="fpb">Mobile No. / मोबाइल नंबर </label>
                                        <input type="text" name="LMobile" id="LMobile" placeholder="Enter Mobile Number" class="form-control" required>
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
                                        <label for="Photo" class="form-label fpb">Coloured Photo / रंगीन फोटो</label>
                                        <input type="file" class="form-control" id="Photo">
                                        <label for="Aadhaar" class="form-label fpb">Copy of Aadhaar Card / आधार कार्ड की छायाप्रति</label>
                                        <input type="file" class="form-control" id="Aadhaar">
                                        <label for="Marksheets" class="form-label fpb">Copy of Marksheets / अंकसूची की छायाप्रति</label>
                                        <input type="file" class="form-control" id="Marksheets">
                                        <label for="pil" class="form-label fpb">Copy of mother/father's police identification letter / माता/पिता के पुलिस परिचय पत्र की छायाप्रति</label>
                                        <input type="file" class="form-control" id="pil">
                                        <label for="psc" class="form-label fpb">Copy of mother/father's police service certificate / माता/पिता के पुलिस सेवा प्रमाण पत्र की छायाप्रति</label>
                                        <input type="file" class="form-control" id="psc">
                                        <label for="id" class="form-label fpb">Copy of identity card issued by coaching/college / कोचिंग/कॉलजे द्वारा जारी परिचय पत्र की छायाप्रति</label>
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
