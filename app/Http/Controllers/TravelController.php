<?php

namespace App\Http\Controllers;

use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class TravelController extends Controller
{


    public function index(Request $request){

        $travels = Travel::query()->orderBy('updated_at', 'desc')->get();

        return view('travel.index', compact('travels'));
    }



    public function create():View{
        return  view('travel.create');
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'content' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);
        try{
            DB::beginTransaction();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));

            Travel::create([
                'content' => $request->filled('content') ? $request->input('content') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'image' => $imageBase64,
                'user_id' => Auth::id()
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('travel.index')->with('success', 'Travel has  added successfully.');
    }

    public function update(Request $request, $id){

        $travel = Travel::findOrFail($id);
        try{
            DB::beginTransaction();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
            $travel->update([
                'content' => $request->filled('content') ? $request->input('content') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'image' => $imageBase64,
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('travel.index')->with('success', 'Travel has updated successfully.');
    }


    public function edit(Request $request, $id){
        $travel = Travel::findOrFail($id);
        return view('travel.edit', compact('travel'));
    }


    public function show(Request $request, $id){
        $travel = Travel::findOrFail($id);
        return view('travel.view', compact('travel'));
    }




    public function delete(Request $request, $id){

        $travel = Travel::findOrFail($id);
        try {
            $travel->delete();
        }catch (\Exception $e){
            Log::info('error_delete', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('travel.index')->with('success', 'Travel has been deleted successfully.');
    }



}
