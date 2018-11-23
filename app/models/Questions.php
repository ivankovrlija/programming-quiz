<?php 

namespace App\Models;
use App\Core\App;

/**
 * 
 */
class Questions 
{

	const TABLENAME = 'questions';

	 public static function showall()
    {
        $questions = App::get('database')->selectAll(self::TABLENAME);
        return $questions;
    }
     public static function showone($id)
     {
     	$question = App::get('database')->selectOne(self::TABLENAME,$id);
     	return $question;
     }
      public static function showoneId($id)
     {
     	$id = App::get('database')->selectOneId(self::TABLENAME,$id);
     	return $id;
     }
}

 ?>