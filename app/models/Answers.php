<?php 

namespace App\Models;
use App\Core\App;

/**
 * 
 */
class Answers 
{

	const TABLENAME = 'answers';

	 public static function showall()
    {
        $answers = App::get('database')->selectAll(self::TABLENAME);
        return $answers;
    }
     public static function showone($id)
     {
        if ($id == 1) {
            $answer = App::get('database')->selectOne(self::TABLENAME,$id);
            return $answer;
        }
        if ($id == 2) {
            $answer = App::get('database')->selectOne(self::TABLENAME,$id+2);
            return $answer;
        }
        if ($id == 3) {
            $answer = App::get('database')->selectOne(self::TABLENAME,$id+4);
            return $answer;
        }
        if ($id == 4) {
            $answer = App::get('database')->selectOne(self::TABLENAME,$id+6);
            return $answer;
        }
        if ($id == 5) {
            $answer = App::get('database')->selectOne(self::TABLENAME,$id+8);
            return $answer;
        }
     }
    
     public static function getRandAnsw($id){
        if ($id == 1) {
            $randid = rand(1,3);
            $randansw = App::get('database')->selectOne(self::TABLENAME,$randid);
            return $randansw;
        }
        if ($id == 2) {
            $randid = rand(4,6);
            $randansw = App::get('database')->selectOne(self::TABLENAME,$randid);
            return $randansw;
        }
        if ($id == 3) {
            $randid = rand(7,9);
            $randansw = App::get('database')->selectOne(self::TABLENAME,$randid);
            return $randansw;
        }
        if ($id == 4) {
            $randid = rand(10,12);
            $randansw = App::get('database')->selectOne(self::TABLENAME,$randid);
            return $randansw;
        }
        if ($id == 5) {
            $randid = rand(13,15);
            $randansw = App::get('database')->selectOne(self::TABLENAME,$randid);
            return $randansw;
        }
    }
}

 ?>