<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class FaqController extends Controller
{



    public function index(){
        $faqs = Faq::query()->orderBy('updated_at', 'desc')->get();

        return view('faq.index', compact('faqs'));
    }


    public function create():View
    {
        return view('faq.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'answer' => 'required'
        ]);

        try {
            DB::beginTransaction();
            Faq::create([
                'title' => $request->filled('title') ? $request->input('title') : null,
                'response' => $request->filled('answer') ? $request->input('answer') : null,
                'user_id' => Auth::id()
            ]);
            DB::commit();
        }catch(\Exception $e){
           DB::rollBack();
           return redirect()->back()->with('error', 'Sorry something went wrong please try again');
        }

        return redirect()->route('faq.index')->with('success', 'You have added an Faq successfully');
    }


    public function update(Request $request, $faqId)
    {
        $faq = Faq::findOrFail($faqId);
        try {
            DB::beginTransaction();
            $faq->update([
                'title' => $request->filled('title') ? $request->input('title') : null,
                'response' => $request->filled('answer') ? $request->input('answer') : null,
            ]);
            DB::commit();
        }catch(\Exception $e){
            DB::rollBack();
            return redirect()->back()->with('error', 'Sorry something went wrong please try again');
        }

        return redirect()->route('faq.index')->with('success', 'You have updated an Faq successfully');
    }




    public function edit(Request $request, $id){
        $faq = Faq::findOrFail($id);
        return view('faq.edit', compact('faq'));
    }


    public function show(Request $request, $id){
        $faq = Faq::findOrFail($id);
        return view('faq.view', compact('faq'));
    }




    public function delete(Request $request, $id){

        $faq = Faq::findOrFail($id);
        try {
            $faq->delete();
        }catch (\Exception $e){
            Log::info('error_delete', [$e]);
            return redirect()->back()->with('error', 'Something went wrong please try again later');
        }

        return redirect()->route('faq.index')->with('success', 'Faq deleted successfully.');
    }



}
