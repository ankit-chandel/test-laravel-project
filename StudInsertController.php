<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudInsertController extends Controller
{
    //
    public function insertform(){
        return view('welcome');
    }

    public function insert(Request $request){
        $name = $request->input('name');
        $class = $request->input('class');
        $rollno = $request->input('rollno');
        $email = $request->input('email');

        $data=array('name'=>$name,"class"=>$class,"rollno"=>$rollno,"email"=>$email);
        DB::table('student')->insert($data);

        echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
    }
}