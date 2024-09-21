<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class HomeController extends Controller
{
    // Home Page
    public function home()
    {
        $news = News::get();
        return view('frontend-page.home',compact('news'));
    }

    public function single_news($slug)
    {
        $news = News::where('slug',$slug)->first();
        if(!$news){
            abort(404);
        }
        return view('frontend-page.single_news',compact('news'));
    }

    // School for Deaf Page
    public function school_for_deaf()
    {
        return view('frontend-page.school_for_deaf');
    }

    // School for Blind Page
    public function school_for_blind()
    {
        return view('frontend-page.school_for_blind');
    }

    // Learning Disability Page
    public function learning_disability()
    {
        return view('frontend-page.learning_disability');
    }

    // Vocational Training Page
    public function vocational_training()
    {
        return view('frontend-page.vocational_training');
    }

    // Rehabilitation Page
    public function rehabilitation()
    {
        return view('frontend-page.rehabilitation');
    }

    // Barnala Branch Page
    public function barnala_branch()
    {
        return view('frontend-page.barnala_branch');
    }

    // Future Projects Page
    public function future_projects()
    {
        return view('frontend-page.future_projects');
    }

    // Success Stories Page
    public function success_stories()
    {
        return view('frontend-page.success_stories');
    }

    // Become a Volunteer Page
    public function become_a_volunteer()
    {
        return view('frontend-page.become_a_volunteer');
    }

    // Gallery Page
    public function gallery()
    {
        return view('frontend-page.gallery');
    }

    // About Us Page
    public function about_us()
    {
        return view('frontend-page.about_us');
    }

    // Contact Us Page
    public function contact_us()
    {
        return view('frontend-page.contact_us');
    }
}
