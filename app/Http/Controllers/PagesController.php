<?php

namespace App\Http\Controllers;


class PagesController extends Controller
{
    public function getIndex() {
    	return view('welcome');
    }

    public function getAbout () {
    	return view('about');
    }

    public function getContact () {
    	return view('contact');
    }

    public function getLogIn () {
    	return view('Authentication/LogIn');
    }

    public function getSignUp () {
    	return view('Authentication/SignUp');
    }

    public function getHome () {
    	return view('home');
    }
}
