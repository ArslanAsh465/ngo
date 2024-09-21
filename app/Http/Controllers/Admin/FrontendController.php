<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\Gallery;
use App\Models\HomepageSlider;
use App\Models\InfoSection;
use App\Models\Visitor;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontend_settings(Request $r)
    {
        $slider = HomepageSlider::get();

        return view('admin.frontendSettings.home_page_slider',compact('slider'));
    }

    public function frontend_settings_homepage_slider_save(Request $r)
    {
        $new = new HomepageSlider();

        $new->heading = $r->heading;
        $new->description = $r->description;

            if($r->hasFile('image')){
                  $file =  $r->file('image')->getClientOriginalName();
                  $r->file('image')->storeAs(
                      'frontend/home/',
                      $file,
                      'public' );

            $new->image = $file;
        }
        $new->save();
        $r->session()->flash('success', 'Successfully Saved');
        return redirect()->back();
    }

    public function frontend_settings_homepage_slider_delete($id)
    {
       HomepageSlider::where('id',$id)->delete();
       \Toastr::success('Deleted','Success');
        return redirect()->back();
    }

    public function frontend_settings_homepage_gallery_delete($id)
    {
       Gallery::where('id',$id)->delete();
       \Toastr::success('Deleted','Success');
        return redirect()->back();
    }
    public function frontend_settings_homepage_event_delete($id)
    {
       Events::where('id',$id)->delete();
       \Toastr::success('Deleted','Success');
        return redirect()->back();
    }



    public function frontend_settings_info(Request $r){
        return view('admin.frontendSettings.info_section');
    }

     public function frontend_settings_about(Request $r){
        return view('admin.frontendSettings.about_section');
    }

    public function frontend_settings_gallery(Request $r){
        $gallery = Gallery::get();
        return view('admin.frontendSettings.gallery',compact('gallery'));
    }

    public function frontend_settings_about_save(Request $r)
    {
        $new = InfoSection::first();
        if(empty($new)){
            $new = new InfoSection();
        }

        $new->about_us = $r->about_us;
        $new->save();
       \Toastr::success('Successfully Saved','Success');
        return redirect()->back();

    }

    public function frontend_settings_gallery_save(Request $r)
    {

        if($r->has('id')){
            $new = Gallery::where('id',$r->id)->first();
        }else{
            $new = new Gallery();
        }

        $new->heading = $r->heading;
        $new->description = $r->desc;
          if($r->hasFile('image')){
                  $file =  $r->file('image')->getClientOriginalName();
                  $r->file('image')->storeAs(
                      'frontend/home/',
                      $file,
                      'public' );

        $new->image = $file;
    }
        $new->save();
       \Toastr::success('Successfully Saved','Success');
        return redirect()->back();


    }

     public function frontend_settings_info_save(Request $r)
    {

        $new = InfoSection::first();
        if(empty($new)){
            $new = new InfoSection();
        }
        $new->heading = $r->heading;
        $new->description = $r->desc;
        $new->box_1_heading = $r->box_1_heading;
        $new->box_1_description = $r->box_1_description;
        $new->box_2_heading = $r->box_2_heading;
        $new->box_2_description = $r->box_2_description;
        $new->box_3_heading = $r->box_3_heading;
        $new->box_3_description = $r->box_3_description;

                if($r->hasFile('box_1_image')){
                  $box_1_image =  $r->file('box_1_image')->getClientOriginalName();
                  $r->file('box_1_image')->storeAs(
                      'frontend/home/',
                      $box_1_image,
                      'public' );
                $new->box_1_image = $box_1_image;
              }

              if($r->hasFile('box_2_image')){
                  $box_2_image =  $r->file('box_2_image')->getClientOriginalName();
                  $r->file('box_2_image')->storeAs(
                      'frontend/home/',
                      $box_2_image,
                      'public' );
                $new->box_2_image = $box_2_image;
              }


              if($r->hasFile('box_3_image')){
                  $box_3_image =  $r->file('box_3_image')->getClientOriginalName();
                  $r->file('box_3_image')->storeAs(
                      'frontend/home/',
                      $box_3_image,
                      'public' );
                $new->box_3_image = $box_3_image;
              }

        $new->save();
       \Toastr::success('Successfully Saved','Success');
        return redirect()->back();


    }

    public function frontend_settings_events()
    {
        return view('admin.frontendSettings.events');
    }

    public function frontend_settings_events_save(Request $r)
    {

        if($r->has('id')){
            $new = Events::where('id',$r->id)->first();
        }else{
            $new = new Events();
        }

        $new->title = $r->title;
        $new->short_description = $r->short_desc;
        $new->long_description = $r->long_desc;
        $new->slug = \Str::slug($r->title);
        $new->datetime = $r->date.' '.$r->time;

        if($r->hasFile('image')){
                  $image =  $r->file('image')->getClientOriginalName();
                  $r->file('image')->storeAs(
                      'frontend/home/',
                      $image,
                      'public' );
                $new->image = $image;
              }


        $new->save();

\Toastr::success('Successfully Saved','Success');
        return redirect()->back();
    }

    public function frontend_settings_address()
    {
        $info = InfoSection::first();
        return view('admin.frontendSettings.address', compact('info'));
    }

    public function frontend_settings_address_save(Request $r)
    {
        try {
            $infoSection = InfoSection::first();
            if (empty($infoSection)) {
                $infoSection = new InfoSection();
            }

            if ($r->filled('email')) {
                $infoSection->email = $r->email;
            }
            if ($r->filled('phone')) {
                $infoSection->phone = $r->phone;
            }
            if ($r->filled('address')) {
                $infoSection->address = $r->address;
            }

            $infoSection->save();

            $r->session()->flash('success', 'Address settings updated successfully.');
        } catch (\Exception $e) {
            $r->session()->flash('error', 'There was an error updating the address settings.');
        }

        return redirect()->back();
    }

    public function frontend_settings_footer()
    {
        $info = InfoSection::first();
        return view('admin.frontendSettings.footer', compact('info'));
    }

    public function frontend_settings_footer_save(Request $r)
    {
        try {
            $infoSection = InfoSection::first();
            if (empty($infoSection)) {
                $infoSection = new InfoSection();
            }

            if ($r->has('footer_about')) {
                $infoSection->footer_about = $r->footer_about;
            }
            if ($r->has('facebook_link')) {
                $infoSection->facebook_link = $r->facebook_link;
            }
            if ($r->has('youtube_link')) {
                $infoSection->youtube_link = $r->youtube_link;
            }
            if ($r->has('linkedin_link')) {
                $infoSection->linkedin_link = $r->linkedin_link;
            }

            $infoSection->save();

            $r->session()->flash('success', 'Footer settings updated successfully.');
        } catch (\Exception $e) {
            $r->session()->flash('error', 'There was an error updating the footer settings.');
        }

        return redirect()->back();
    }

    public function frontend_settings_insights()
    {
        $info = InfoSection::first();
        return view('admin.frontendSettings.insights', compact('info'));
    }

    public function frontend_settings_insights_save(Request $r)
    {
        try {
            $infoSection = InfoSection::first();
            if (empty($infoSection)) {
                $infoSection = new InfoSection();
            }

            if ($r->has('events_participated')) {
                $infoSection->events_participated = $r->events_participated;
            }
            if ($r->has('classes_completed')) {
                $infoSection->classes_completed = $r->classes_completed;
            }
            if ($r->has('awards_won')) {
                $infoSection->awards_won = $r->awards_won;
            }
            if ($r->has('student_enrolled')) {
                $infoSection->student_enrolled = $r->student_enrolled;
            }

            $infoSection->save();

            $r->session()->flash('success', 'Insights updated successfully.');
        } catch (\Exception $e) {
            $r->session()->flash('error', 'There was an error updating the insights.');
        }

        return redirect()->back();
    }

    public function visitors_ip(Request $request)
    {
        $visitors = Visitor::orderBy('id','desc')->paginate(100);
        return view('admin.visitors_ip',compact('visitors'));
    }
}
