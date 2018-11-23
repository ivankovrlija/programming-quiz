<?php

namespace App\Controllers;

class PagesController
{
    /**
     * Show the home page.
     */
    public function home()
    {
    	//Uvek ce na pocetnoj da ima id=1
  		$id=[1];
        return view('index',$id);
	}
}
