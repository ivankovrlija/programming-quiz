<?php

namespace App\Controllers;
use App\Models\Questions;
use App\Models\Answers;
use App\Storage\Session;

class FinishGameController
{
	public function show()
	{
		Session::start();
		return view('finish');
	}
}