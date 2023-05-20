<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Pages') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-hidden  sm:rounded-lg">
                        <div class="p-6 text-gray-900 dark:text-gray-100">

                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Title
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Content
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Status
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Photo-url
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Action
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pages as $page)
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{$page->title}}
                                            </th>
                                            <td class="px-6 py-4">
                                                {{$page->content}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$page->status}}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{$page->photo_url}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <a href="{{route('pages.show',$pages)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Details</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
