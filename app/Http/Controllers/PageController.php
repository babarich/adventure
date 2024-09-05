<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Book;
use App\Models\Faq;
use App\Models\HomeContent;
use App\Models\Media;
use App\Models\Team;
use App\Models\Testimonal;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class PageController extends Controller
{
    public function about(Request $request)  {
        $customer = Media::query()
        ->where('category', 'Happy Customer')
        ->orderBy('updated_at', 'desc')
        ->first();
           $special = Media::query()
        ->where('category', 'Special Offer 1')
        ->orderBy('updated_at', 'desc')
        ->first();
           $offer = Media::query()
        ->where('category', 'Special Offer 2')
        ->orderBy('updated_at', 'desc')
        ->first();

        $what = Media::query()
            ->where('category', 'What Do')
            ->orderBy('updated_at', 'desc')
            ->first();

        $teams = Team::query()->orderBy('updated_at', 'desc')->get();

        $homeContents = HomeContent::query()
            ->whereIn('type', [
                 'About-Title', 'About-Content',  'Choose Card 1',
                'Choose Card 2', 'Choose Card 3', 'Choose Card 4', 'Choose Para 1', 'Choose Para 2',
                'Choose Para 3', 'Choose Para 4'
            ])
            ->get()
            ->keyBy('type');



        $aboutTitle = $homeContents->get('About-Title');
        $aboutContent = $homeContents->get('About-Content');
        $choose1 = $homeContents->get('Choose Card 1');
        $choose2 = $homeContents->get('Choose Card 2');
        $choose3 = $homeContents->get('Choose Card 3');
        $choose4 = $homeContents->get('Choose Card 4');
        $choosePara1 = $homeContents->get('Choose Para 1');
        $choosePara2 = $homeContents->get('Choose Para 2');
        $choosePara3 = $homeContents->get('Choose Para 3');
        $choosePara4 = $homeContents->get('Choose Para 4');


        return view('about', compact('customer','special','offer','teams',
            'what','aboutTitle', 'aboutContent','choose1','choose2','choose3', 'choose4','choosePara1', 'choosePara2', 'choosePara3','choosePara4'));
    }



    public function blog(Request $request)  {
        $blogs = Blog::query()->orderBy('updated_at', 'desc')->get();
        return view('blog', compact('blogs'));
    }
    public function coming(Request $request)  {
        return view('coming');
    }
    public function contact(Request $request)  {
        return view('contact');
    }
    public function destination(Request $request)  {

        $travels = Travel::query()
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('destination', compact('travels'));
    }
    public function faq(Request $request)  {
        $faqs = Faq::query()->orderBy('updated_at', 'desc')
            ->get();
        return view('faq', compact('faqs'));
    }
    public function service(Request $request)  {

        $special = Media::query()
            ->where('category', 'Special Offer 1')
            ->orderBy('updated_at', 'desc')
            ->first();

        $offer = Media::query()
            ->where('category', 'Special Offer 2')
            ->orderBy('updated_at', 'desc')
            ->first();

        $serviceSmall = Media::query()
            ->where('category', 'Service Small')
            ->orderBy('updated_at', 'desc')
            ->first();

        $serviceLarge = Media::query()
            ->where('category', 'Service Large')
            ->orderBy('updated_at', 'desc')
            ->first();

        $homeContents = HomeContent::query()
            ->whereIn('type', [
                 'Special 1', 'Special 2',
                'Special Para1', 'Special Para2'
            ])
            ->get()
            ->keyBy('type');

        $specialOne = $homeContents->get('Special 1');
        $specialTwo = $homeContents->get('Special 2');
        $specialPara1 = $homeContents->get('Special Para1');
        $specialPara2 = $homeContents->get('Special Para2');


        return view('service', compact('special','offer',
            'serviceSmall','serviceLarge','specialOne','specialTwo','specialPara1','specialPara2'));
    }
    public function team(Request $request)  {

        $teams = Team::query()->orderBy('updated_at', 'desc')->get();

        return view('team', compact('teams'));
    }
    public function testimonial(Request $request)  {
        $testimonials = Testimonal::query()->orderBy('updated_at', 'desc')->get();

        return view('testimonial', compact('testimonials'));
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
            ->where('category', 'Special Offer 1')
            ->orderBy('updated_at', 'desc')
            ->first();
           $offer = Media::query()
            ->where('category', 'Special Offer 2')
            ->orderBy('updated_at', 'desc')
            ->first();

        $serviceSmall = Media::query()
            ->where('category', 'Service Small')
            ->orderBy('updated_at', 'desc')
            ->first();

        $serviceLarge = Media::query()
            ->where('category', 'Service Large')
            ->orderBy('updated_at', 'desc')
            ->first();


        $what = Media::query()
            ->where('category', 'What Do')
            ->orderBy('updated_at', 'desc')
            ->first();

        $travels = Travel::query()
                    ->orderBy('updated_at', 'desc')
                    ->get();

        $faqs = Faq::query()->orderBy('updated_at', 'desc')
            ->get();

        // Fetch all the required HomeContent items in one query
        $homeContents = HomeContent::query()
            ->whereIn('type', [
                'Title', 'Sub Title', 'Paragraph', 'Second Card 1', 'Second Card 2', 'Second Card 3',
                'Second Card 4', 'About-Title', 'About-Content', 'Special 1', 'Special 2',
                'Special Para1', 'Special Para2', 'Tour Title', 'Tour Content', 'Choose Card 1',
                'Choose Card 2', 'Choose Card 3', 'Choose Card 4', 'Choose Para 1', 'Choose Para 2',
                'Choose Para 3', 'Choose Para 4', 'Service Title', 'Service Content',
                'Explore Content', 'Newsletter Content'
            ])
            ->get()
            ->keyBy('type');


        $title = $homeContents->get('Title');
        $subTitle = $homeContents->get('Sub Title');
        $paraTit = $homeContents->get('Paragraph');
        $secondCardFirst = $homeContents->get('Second Card 1');
        $secondCardSecond = $homeContents->get('Second Card 2');
        $secondCardThird = $homeContents->get('Second Card 3');
        $secondCardFourth = $homeContents->get('Second Card 4');
        $aboutTitle = $homeContents->get('About-Title');
        $aboutContent = $homeContents->get('About-Content');
        $specialOne = $homeContents->get('Special 1');
        $specialTwo = $homeContents->get('Special 2');
        $specialPara1 = $homeContents->get('Special Para1');
        $specialPara2 = $homeContents->get('Special Para2');
        $tourTitle = $homeContents->get('Tour Title');
        $tourContent = $homeContents->get('Tour Content');
        $choose1 = $homeContents->get('Choose Card 1');
        $choose2 = $homeContents->get('Choose Card 2');
        $choose3 = $homeContents->get('Choose Card 3');
        $choose4 = $homeContents->get('Choose Card 4');
        $choosePara1 = $homeContents->get('Choose Para 1');
        $choosePara2 = $homeContents->get('Choose Para 2');
        $choosePara3 = $homeContents->get('Choose Para 3');
        $choosePara4 = $homeContents->get('Choose Para 4');
        $serviceTitle = $homeContents->get('Service Title');
        $serviceContent = $homeContents->get('Service Content');
        $exploreContent = $homeContents->get('Explore Content');
        $newsContent = $homeContents->get('Newsletter Content');

        $blogs = Blog::query()->orderBy('updated_at', 'desc')->get();



        $teams = Team::query()->orderBy('updated_at', 'desc')->get();


        $testimonials = Testimonal::query()->orderBy('updated_at', 'desc')->get();

        return view('welcome', compact(
            'customer', 'special', 'offer', 'travels', 'faqs',
            'title', 'subTitle', 'paraTit', 'secondCardFirst', 'secondCardSecond',
            'secondCardThird', 'secondCardFourth', 'aboutTitle', 'aboutContent',
            'specialOne', 'specialTwo', 'specialPara1', 'specialPara2',
            'tourTitle', 'tourContent', 'choose1', 'choose2', 'choose3',
            'choose4', 'choosePara1', 'choosePara2', 'choosePara3',
            'choosePara4', 'serviceTitle', 'serviceContent',
            'exploreContent', 'newsContent','blogs', 'teams','testimonials','serviceSmall', 'serviceLarge', 'what'
        ));



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
