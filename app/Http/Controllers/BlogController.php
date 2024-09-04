<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class BlogController extends Controller
{



    public function index(Request $request){

        $blogs = Blog::query()->orderBy('updated_at', 'desc')->get();

        return view('blog.index', compact('blogs'));
    }



    public function create():View{
        return  view('blog.create');
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'tag' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);
        try{
            DB::beginTransaction();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));

            Blog::create([
                'tag' => $request->filled('tag') ? $request->input('tag') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'content' => $request->filled('content') ? $request->input('content') : null,
                'image' => $imageBase64,
                'user_id' => Auth::id()
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('blog.index')->with('success', 'Blog Content added successfully.');
    }

    public function update(Request $request, $id){

        $blog = Blog::findOrFail($id);
        try{

            DB::beginTransaction();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));

            $blog->update([
                'tag' => $request->filled('tag') ? $request->input('tag') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'content' => $request->filled('content') ? $request->input('content') : null,
                'image' => $imageBase64,
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('blog.index')->with('success', 'Blog Content updated successfully.');
    }


    public function edit(Request $request, $id){
        $blog = Blog::findOrFail($id);
        return view('blog.edit', compact('blog'));
    }


    public function show(Request $request, $id){
        $blog = Blog::findOrFail($id);
        return view('blog.view', compact('blog'));
    }




    public function delete(Request $request, $id){

        $blog = Blog::findOrFail($id);

        try {
            $blog->delete();
        }catch (\Exception $e){
            Log::info('error_delete', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('blog.index')->with('success', 'Blog Content deleted successfully.');
    }

}
