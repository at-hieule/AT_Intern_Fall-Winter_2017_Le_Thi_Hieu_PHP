<?php
    
    namespace App\Controllers;

    // use App\Models\Post;
   
    class PostController extends Controller
    {
    	public function index()
    	{
    		view('home.index');
    	}
        public function post()
        {
            view('home.post');
        }
        public function about()
        {
            view('home.about');
        }
        public function contact()
        {
            view('home.contact');
        }
        public function login()
        {
            view('home.login');
        }
        public function register()
        {
            view('home.register');
        }

    }