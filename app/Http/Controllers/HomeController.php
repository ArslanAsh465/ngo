<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Home Page
    public function home()
    {
        return view('frontend-page.home');
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
}
