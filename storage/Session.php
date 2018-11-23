<?php 

namespace App\Storage;


class Session
{
	
		public static function start()
		{
			if (session_id() ==='') {
	        session_start();
			}
		}

	 	public static function setsession()
    	{	
	         if (isset($_POST['army1']) && isset($_POST['army2'])) {
	            $army1 = $_SESSION['army1'] = $_POST['army1'];
	            $army2 = $_SESSION['army2'] = $_POST['army2'];
	        }
	        else{
	      
	            $army1 = $_SESSION['army1'];
	            $army2 = $_SESSION['army2'];
	        }
	            return [$army1,$army2];
 	}
}
 ?>