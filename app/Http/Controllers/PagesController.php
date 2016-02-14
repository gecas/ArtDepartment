<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\Http\Requests;
use App\Workshop;
use App\Contact;
use App\OurHeroe;
use App\applyopenSession;
use App\Masterclass;
use App\ParticipantsCategory;
use App\Participants;
use App\Http\Controllers\Controller;
use App\PictureCategory;
use App\Picture;
use App\Video;

class PagesController extends Controller
{
  public function phpinfo()
  {
    return view('pages.phpinfo');
  }
   public function apply()
   {
    $openSession = applyopenSession::first();
    $master = Masterclass::first();
    return view('pages.apply', compact('master', $master, 'openSession', $openSession));
   }

   public function applyForm()
   {
    $countries = Country::all();
    return view('pages.applyForm', compact('countries', $countries));
   }

   public function openSessionsForm()
   {
    return view('pages.openSessionsForm');
   }

   public function about()
   {
    return view('pages.about');
   }

   public function ourHeroes()
   {
    $heroes = OurHeroe::first();
    return view('pages.ourHeroes', compact('heroes', $heroes));
   }

   public function workshops()
   {
    $workshops = Workshop::first();
    return view('pages.workshops', compact('workshops', $workshops));
   }

   public function contact()
   {
    $contacts = Contact::first();
    return view('pages.contact', compact('contacts', $contacts));
   }

   public function partners()
   {
    return view('pages.partners');
   }

   public function participants()
   {
    $participants = ParticipantsCategory::all();

    return view('pages.participants', compact('participants', $participants));
   }

   public function participantsDetails($slug)
   {

      $category = ParticipantsCategory::where('slug', '=',$slug)->first();
      $participants = $category->participants;

      return view('pages.participants_details', compact('category', $category, 'participants', $participants));
   }   

   public function pictures()
   {
    $categories = PictureCategory::all();

    return view('pages.pictures',
           compact('categories', $categories));
   }

   public function picturesDetails($slug)
   {

      $category = PictureCategory::where('slug', '=',$slug)->first();
      $pictures = Picture::where('category_id','=', $category->id)->get();
     

      return view('pages.pictures_details', compact('category', $category, 'pictures', $pictures));
   } 

   public function videos()
   {
    $videos = Video::all();

    return view('pages.video', compact('videos', $videos));
   }


}
