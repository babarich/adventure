<?php

namespace App\Http\Controllers;

use App\Models\Testimonal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;
use PHPUnit\Util\Test;

class TestimonialController extends Controller
{



    public function index(Request $request){

        $testimonials = Testimonal::query()->orderBy('updated_at', 'desc')->get();

        return view('testimonial.index', compact('testimonials'));
    }



    public function create():View{
        return  view('testimonial.create');
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'rate' => 'required',
        ]);
        try{
            DB::beginTransaction();

            Testimonal::create([
                'name' => $request->filled('name') ? $request->input('name') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'content' => $request->filled('content') ? $request->input('content') : null,
                'rate' => $request->filled('rate') ? $request->input('rate') : null,
                'user_id' => Auth::id()
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('testimonial.index')->with('success', 'Testimonial added successfully.');
    }

    public function update(Request $request, $id){

        $testimonial = Testimonal::findOrFail($id);
        try{
            DB::beginTransaction();

            $testimonial->update([
                'name' => $request->filled('name') ? $request->input('name') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'content' => $request->filled('content') ? $request->input('content') : null,
                'rate' => $request->filled('rate') ? $request->input('rate') : null,
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('testimonial.index')->with('success', 'Testimonial updated successfully.');
    }


    public function edit(Request $request, $id){

        $testimonial = Testimonal::findOrFail($id);
        return view('testimonial.edit', compact('testimonial'));
    }


    public function show(Request $request, $id){
        $testimonial = Testimonal::findOrFail($id);
        return view('testimonial.view', compact('testimonial'));
    }




    public function delete(Request $request, $id){

        $testimonial = Testimonal::findOrFail($id);
        try {
            $testimonial->delete();
        }catch (\Exception $e){
            Log::info('error_delete', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('testimonial.index')->with('success', 'Testimonial has been deleted successfully.');
    }



}
