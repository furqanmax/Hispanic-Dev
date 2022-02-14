<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function login()
    {
        return view('login');
    
    }
    public function signup()
    {
        return view('signup');
    
    }
    public function forgot()
    {
        return view('forgot');
    
    }
    public function searesu()
    {
        return view('search_result');
    
    }
    public function search()
    {
        return view('search');
    
    }
    public function addpost()
    {
        return view('add_new');
    
    }
    public function postdet()
    {
        return view('post_detail');
    
    }
    public function profile()
    {
        return view('profile.profile');
    
    }
    public function payment()
    {
        return view('payment');
    
    }
    public function my_events()
    {
        return view('events.my_events');
    
    }
    public function create_event()
    {
        return view('events.create');
    
    }
    public function events()
    {
        return view('events.events');
    
    }
    public function long_form()
    {
        return view('events.long_form');
    
    }
    public function subscription()
    {
        return view('profile.subscription');
    
    }
    // yellow
    public function create_yellow()
    {
        return view('yellow.create');
    
    }
    public function yellow_details()
    {
        return view('yellow.details');
    
    }
    public function my_yellow()
    {
        return view('yellow.my_yellow_page');
    
    }
    public function yellow_long_form()
    {
        return view('yellow.long_form');
    
    }
    public function create_add()
    {
        return view('ads.create');
    
    }
    public function my_add()
    {
        return view('ads.my_add');
    
    }
    public function my_activities()
    {
        return view('profile.my_activities');
    
    }
    public function my_jobs()
    {
        return view('jobs.my_job');
    
    }
    public function create_jobs()
    {
        return view('jobs.create');
    
    }
    public function edit_profile()
    {
        return view('profile.edit_profile');
    
    }
    public function notification()
    {
        return view('profile.notifications');
    
    }
    public function job_long_form()
    {
        return view('jobs.job_long_form');
    
    }
    public function hiring()
    {
        return view('jobs.hiring');
    
    }
    public function job_detail()
    {
        return view('jobs.detail');
    
    }
    public function employee()
    {
        return view('jobs.employee');
    
    }
    public function create_sell()
    {
        return view('buy_sell.create');
    
    }
    public function sell_detail()
    {
        return view('buy_sell.detail');
    
    }
    public function sell_index()
    {
        return view('buy_sell.index');
    
    }
    public function sell_long_form()
    {
        return view('buy_sell.sell_form');
    
    }
    public function sell_type()
    {
        return view('buy_sell.sell_type');
    
    }
   
}
