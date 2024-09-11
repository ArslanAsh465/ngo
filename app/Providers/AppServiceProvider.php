<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\InfoSection;
use App\Models\Visitor;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function($view){

                $ip = \Request::ip();
                if (env("APP_ENV") != "local"){
                  // $ip = '48.188.144.248'; /* Static IP address */
                 $check_ip = Visitor::where('ip',$ip)->first();
                 if(empty($check_ip)){
                    $currentUserInfo = Location::get($ip);
                    $check_ip = new Visitor();
                    $check_ip->ip = $currentUserInfo->ip;
                    $check_ip->country = $currentUserInfo->countryName;
                    $check_ip->state   = $currentUserInfo->regionName;
                    $check_ip->city    = $currentUserInfo->cityName;
                    $check_ip->lat = $currentUserInfo->latitude;
                    $check_ip->lng = $currentUserInfo->longitude;
                    $check_ip->count = 1;
                 }else{
                    //$check_ip->count = $check_ip->count + 1;
                 }
                    $check_ip->save();
                 }
/*                    dd($check_ip);*/
                $info_sections_f = InfoSection::first();
                $view->with('info_sections_f',$info_sections_f);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
