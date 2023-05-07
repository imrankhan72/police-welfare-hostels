<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
       $applicants = Applicant::all();
       return view('applicants.index',compact('applicants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Applicant $applicant):View
    {
        return view('applicants.show',compact('applicant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
