<?php

namespace App\Controllers;
use App\Models\Questions;
use App\Models\Answers;
use App\Storage\Session;

class GameController
{

    private $id;

    public function index(){
       
        Session::start();
    
       //Uzimanje id iz putanje war/id
        $this->getURLid();
    }   

    public function index1()
    {
        $soldiers = 5;
        $armys = Session::setsession();
        $question = Questions::showone($this->id);
        $answer = Answers::showone($this->id);
        $randanswer1 = Answers::getRandAnsw($this->id);
        $data=[$question,$answer,$randanswer1,$armys,$soldiers];
        return view('game' ,$data);
    }

     public function index2()
    {
        $soldiers = 10;
        $armys = Session::setsession();
        $question = Questions::showone($this->id);
        $answer = Answers::showone($this->id);
        $randanswer2 = Answers::getRandAnsw($this->id);
        $data=[$question,$answer,$randanswer2,$armys, $soldiers];
        return view('game' , $data);
    }

     public function index3()
    {
        $soldiers = 15;
        $armys = Session::setsession();
        $question = Questions::showone($this->id);
        $answer = Answers::showone($this->id);
        $randanswer3 = Answers::getRandAnsw($this->id);
        $data=[$question,$answer,$randanswer3,$armys, $soldiers];
        return view('game' , $data);
    }

     public function index4()
    {
        $soldiers = 20;
        $armys = Session::setsession();
        $question = Questions::showone($this->id);
        $answer = Answers::showone($this->id);
        $randanswer4 = Answers::getRandAnsw($this->id); 
        $data=[$question,$answer,$randanswer4,$armys, $soldiers];
        return view('game' , $data);
    }

     public function index5()
    {
        $soldiers = 25;
        $armys = Session::setsession();
        $question = Questions::showone($this->id);
        $answer = Answers::showone($this->id);
        $randanswer5 = Answers::getRandAnsw($this->id);
        $data=[$question,$answer,$randanswer5,$armys,$soldiers];
        return view('game', $data);
    }
    public function methodbind($id)
    {
        switch ($id) {
            case 1:
                return $this->index1();
                break;
                case 2:
                return $this->index2();
                break;
                case 3:
                return $this->index3();
                break;
                case 4:
                return $this->index4();
                break;
                case 5:
                return $this->index5();
                break;
        }
    }
    public function getURLid()
    {
        $route = trim(
            parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
        $id = trim($route,'war/');
        $this->id = (integer) $id;
        $this->methodbind($this->id);
    }
}