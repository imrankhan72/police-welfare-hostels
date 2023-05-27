<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white shadow p-8 rounded-lg">
                    <form action="{{route('pages.store')}}" enctype="multipart/form-data" method="post">
                        {{csrf_field()}}
                        <div class="space-y-1">
                            <div class="border-b border-gray-900/10 pb-12">
                                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                    <div class="sm:col-span-4">

                                            <label for="parent" class="block text-sm font-medium leading-6 text-gray-900">Select Page</label>
                                            <div class="mt-2 mb-12">
                                                <select id="dropdown" name="parent" autocomplete="parent" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                                    <option disabled selected value>Select</option>
                                                    <option value="About">About</option>
                                                    <option value="Admission">Admission</option>
                                                </select>
                                                <span class="text-red-600">
                                                 @error('parent')
                                                    {{$message}}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="sm:col-span-3">
                                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                        <div class="mt-2">
                                            <input type="text" name="title" id="title" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('title')}}">
                                        </div>
                                        <span class="text-red-600">
                                                 @error('title')
                                            {{$message}}
                                            @enderror
                                                </span>
                                    </div>

                                    <div class="col-span-full mt-12">
                                        <label for="content" cltext-red-600ass="block text-sm font-medium leading-6 text-gray-900">Content</label>
                                        <div class="mt-2">
                                            <textarea id="content" name="content" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{old('content')}}</textarea>
                                        </div>
                                        <p class="mt-3 text-sm leading-6 text-gray-600">Write Content</p>
                                        <span class="text-red-600">
                                                 @error('content')
                                            {{$message}}
                                            @enderror
                                                </span>
                                    </div>

                                <div class="col-span-full mt-12">
                                    <label for="image" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                                    <div class="mt-2 flex items-center gap-x-3">
                                        <svg class="h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                        </svg>
                                        <input type="file" id="photo_url" name="photo_url" class="hidden">
                                        <button type="button" onclick="document.getElementById('photo_url').click()" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Upload Photo</button>
                                    </div>
                                </div>



                            </div>



                                <legend class="mt-12 text-sm font-semibold leading-6 text-gray-900">Status</legend>
                                <div class="mt-6 space-y-6">
                                    <div class="flex items-center gap-x-3">
                                        <input id="status" value="1" name="status" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="status" class="block text-sm font-medium leading-6 text-gray-900">ON</label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="status" value="0" name="status" type="radio" checked class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                        <label for="status" class="block text-sm font-medium leading-6 text-gray-900">OFF</label>
                                        <span class="text-red-600">
                                                 @error('status')
                                            {{$message}}
                                            @enderror
                                                </span>
                                    </div>

                        <div class="mt-6 flex items-center justify-end gap-x-6">
                            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                        </div></div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
