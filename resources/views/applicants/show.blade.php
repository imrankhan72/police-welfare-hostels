<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Applicant details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-base font-semibold leading-7 text-gray-900">Applicant Information</h3>
                        <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
                    </div>
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->name}}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Application for</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Indore</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Mobile No.</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->mobile_no}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Father name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->father_name}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Mother name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->mother_name}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Gender</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->gender}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Caste</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->caste}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Aadhar No.</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->aadhar_no}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Education</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->education}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Date of Birth</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->dob}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Name of the Educational Institution in which Admission is Sought</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->institute_name}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">In Police Service</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->in_police_service_name}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Designation</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->designation}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Contact Details</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->inservice_contact}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Deployment Unit and District </dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->deployment_unit_district}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Posted Police Station/Office</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->posted_police_station}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Local Guardian Name</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->local_guardian_name}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Designation</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->guardian_designation}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Guardian Contact Details</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{$applicant->guardian_contact_no}}</dd>
                            </div>

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Attachments</dt>
                                <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                    <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">resume_back_end_developer.pdf</span>
                                                    <span class="flex-shrink-0 text-gray-400">2.4mb</span>
                                                </div>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                        <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
                                            <div class="flex w-0 flex-1 items-center">
                                                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                                                </svg>
                                                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                                    <span class="truncate font-medium">coverletter_back_end_developer.pdf</span>
                                                    <span class="flex-shrink-0 text-gray-400">4.5mb</span>
                                                </div>
                                            </div>
                                            <div class="ml-4 flex-shrink-0">
                                                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                            </div>
                                        </li>
                                    </ul>
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
