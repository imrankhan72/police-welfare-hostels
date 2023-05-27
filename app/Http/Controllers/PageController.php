<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\View\View;

class PageController extends Controller
{

    public function index():View
    {
        $pages = Page::all();
        return view('pages.index',compact('pages'));
    }


    public function create():View
    {
       return view('pages.create');
    }


    public function store(Request $request): string

    {
        $rules = [
            'parent' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'photo_url' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Example validation rule for image file
        ];

        $validatedData = $request->validate($rules);

        $page = new Page;
        $page->parent = $validatedData['parent'];
        $page->title = $validatedData['title'];
        $page->content = $validatedData['content'];
        $page->photo_url = $validatedData['photo_url'];

        $page->status = $validatedData['status'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // Specify the storage location and optional filename
            $path = $file->store('images', 'public');
             $page->photo_url= $file->getClientOriginalName();

        }


        $page->save();

        return redirect('/admin/pages')->with('success', 'Page created successfully');



    }


    public function show(Page $page)
    {
       return view('pages.show',compact('page'));
    }



    public function edit(Page $page)
    {
        //
    }


    public function update(Request $request, Page $page)
    {
        //
    }


    public function destroy(Page $page)
    {
        //
    }
}
