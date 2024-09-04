<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class TeamController extends Controller
{


    public function index(Request $request){

        $teams = Team::query()->orderBy('updated_at', 'desc')->get();

        return view('team.index', compact('teams'));
    }



    public function create():View{
        return  view('team.create');
    }


    public function store(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);
        try{
            DB::beginTransaction();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));

            Team::create([
                'name' => $request->filled('name') ? $request->input('name') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'image' => $imageBase64,
                'user_id' => Auth::id()
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('team.index')->with('success', 'Team Member added successfully.');
    }

    public function update(Request $request, $id){

        $team = Team::findOrFail($id);
        try{
            DB::beginTransaction();
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));
            $team->update([
                'name' => $request->filled('name') ? $request->input('name') : null,
                'title' => $request->filled('title') ? $request->input('title') : null,
                'image' => $imageBase64,
            ]);
            DB::commit();
        }catch(\Exception $e){
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }


    public function edit(Request $request, $id){
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
    }


    public function show(Request $request, $id){
        $team = Team::findOrFail($id);
        return view('team.view', compact('team'));
    }




    public function delete(Request $request, $id){

        $team = Team::findOrFail($id);
        try {
            $team->delete();
        }catch (\Exception $e){
            Log::info('error_delete', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('team.index')->with('success', 'Team member deleted successfully.');
    }

}
