<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('caste');
            $table->string('aadhar_no');
            $table->string('mobile_no');
            $table->string('education');
            $table->string('dob');
            $table->string('institute_name');
            $table->string('in_police_service_name');
            $table->string('designation');
            $table->string('inservice_contact');
            $table->string('deployment_unit_district');
            $table->string('posted_police_station');
            $table->string('local_guardian_name');
            $table->string('guardian_designation');
            $table->string('guardian_contact_no');
            $table->string('coloured_photo_file_url');
            $table->string('aadhar_copy_file_url');
            $table->string('police_id_letter_file_url');
            $table->string('police_service_cert_file_url');
            $table->string('college_id_card_file_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
