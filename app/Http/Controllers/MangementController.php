<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MangementController extends Controller
{
    


    public function index(Request $request){

     $images = Media::query()->orderBy('updated_at', 'desc')->get();

     return view('media.index', compact('images'));
    }



     public function create()
    {
        return view('media.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

            try{
            DB::beginTransaction();


               $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));

                    Media::create([
                        'category' => $request->filled('name') ? $request->input('name') : null,
                        'name' => $imageName,
                        'image' => $imageBase64,
                        'user_id' => Auth::id()
                    ]);
            DB::commit();
            }catch(\Exception $e){
                Log::info('error', [$e]);
                return redirect()->back()->with('error', 'Something went wrong please try again later');
            }
                 

        return redirect()->route('manage.index')->with('success', 'Image uploaded successfully.');
    }



    public function edit(Request $request, $id){

        $image = Media::findOrFail($id);


        return view('media.edit', compact('image'));
    }


    public function show(Request $request, $id){

        $image = Media::findOrFail($id);

        return view('media.view', compact('image'));

    }


    public function delete(Request $request, $id){
         $image = Media::findOrFail($id);


        try{

           $image->delete();
        }catch(\Exception $e){
          Log::info('error', [$e]);
          return redirect()->back()->with('error', 'something went wrong please try again later');
        }

        return redirect()->back()->with('success', 'You have deleted successfully your image');

    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

            try{
            DB::beginTransaction();
            $image = Media::findOrFail($id);

               $image = $request->file('image');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $imageBase64 = base64_encode(file_get_contents($image->getRealPath()));

                    $image->update([
                        'category' => $request->filled('name') ? $request->input('name') : null,
                        'name' => $imageName,
                        'image' => $imageBase64,
                        'user_id' => Auth::id()
                    ]);
            DB::commit();
            }catch(\Exception $e){
                Log::info('error', [$e]);
                return redirect()->back()->with('error', 'Something went wrong please try again later');
            }
                 

        return redirect()->route('manage.index')->with('success', 'Image updated successfully.');
    }
}
