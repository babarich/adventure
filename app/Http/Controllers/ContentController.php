<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ContentController extends Controller
{



    public function index(Request $request){

        $homes = HomeContent::query()->orderBy('updated_at', 'desc')->get();

        return view('content.index', compact('homes'));
    }


    public function  create(Request $request){

        return view('content.create');
    }




    public function store(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'content' => 'required'
        ]);

        try {
            DB::beginTransaction();

            HomeContent::create([
                'type' => $request->filled('type') ? $request->input('type') : null,
                'content' => $request->filled('content') ? $request->input('content') : null,
                'user_id' => Auth::id()
            ]);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'Sorry something went wrong please try again');
        }

        return redirect()->route('content.index')->with('success', 'You have added an Faq successfully');
    }


    public function edit(Request $request, $id){

        $content = HomeContent::findOrFail($id);

        return view('content.edit', compact('content'));

    }

    public function update(Request $request, $id)
    {
        $content = HomeContent::findOrFail($id);

        try {
            DB::beginTransaction();

            $content->update([
                'type' => $request->filled('type') ? $request->input('type') : null,
                'content' => $request->filled('content') ? $request->input('content') : null,
            ]);

            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'Sorry something went wrong please try again');
        }

        return redirect()->route('content.index')->with('success', 'You have added an Faq successfully');
    }





    public function delete(Request $request, $id){

        $content = HomeContent::findOrFail($id);
        try {
            $content->delete();
        }catch (\Exception $e){
            Log::info('error_delete', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('content.index')->with('success', 'Content deleted successfully.');
    }



}
