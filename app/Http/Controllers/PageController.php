<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PgSql\Lob;

class PageController extends Controller
{
    public function about(Request $request)  {
        return view('about');
    }
    public function blog(Request $request)  {
        return view('blog');
    }
    public function coming(Request $request)  {
        return view('coming');
    }
    public function contact(Request $request)  {
        return view('contact');
    }
    public function destination(Request $request)  {
        return view('destination');
    }
    public function faq(Request $request)  {
        return view('faq');
    }
    public function service(Request $request)  {
        return view('service');
    }
    public function team(Request $request)  {
        return view('team');
    }
    public function testimonial(Request $request)  {
        return view('testimonial');
    }

       public function found(Request $request)  {
        return view('404');
    }


    public function index(Request $request){
        $customer = Media::query()
        ->where('category', 'Happy Customer')
        ->orderBy('updated_at', 'desc')
        ->first();
           $special = Media::query()
        ->where('category', 'Speicial Offer 1')
        ->orderBy('updated_at', 'desc')
        ->first();
           $offer = Media::query()
        ->where('category', 'Speicial Offer 2')
        ->orderBy('updated_at', 'desc')
        ->first();
        $travels = Media::query()
                    ->where('category', 'Travel')
                    ->orderBy('updated_at', 'desc')
                    ->get();
        return view('welcome', compact('customer', 'special', 'offer', 'travels'));
    }



    public function book(Request $request)  {
        return view('book');
    }



    public function store(Request $request){

    
         $validatedData = $request->validate([
             'name' => 'required',
             'email' => 'required|email',
             'date' => 'required|date',
             'description' => 'required'
         ]);

         try{
            DB::beginTransaction();

            Book::create([
              'name' => $validatedData['name'],
              'email' => $validatedData['email'],
              'date' => $validatedData['date'],
              'description' => $validatedData['description']  
            ]);
            DB::commit();
         }catch(\Exception $e){
            DB::rollBack();
            Log::info('error', [$e]);
            return redirect()->back()->with('error', 'Something Went Wrong Try again later');

         }

         return redirect()->back()->with('success', 'You have booked successfully');

    }
    
}
