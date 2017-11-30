<?php
    
    namespace App\Controllers;

    // use App\Models\Post;
   
    class HomeController extends Controller
    {
    	public function index()
    	{
    		header('location: ./Post/index');
        }

    }