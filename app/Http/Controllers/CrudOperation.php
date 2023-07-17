<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudOperation extends Controller
{
    // __select method__

    public function select (){
        $jsonData =  DB::select('select * from teacher');
        $jsonSelect = json_encode($jsonData);
        $data = json_decode($jsonSelect);
        return view('select',['selectKey' => $data]);
    }

    // __insert method__
    public function insert(Request $req){

       $name =  $req->input('name');
       $email =  $req->input('email');
       $class =  $req->input('class');
       $result = DB::insert('insert into teacher(name, email, class) values (?,?,?)', [$name,$email, $class]);

       if($result== true){
            return 'success';
       }else{
            return 'fail';
       }
    }


    public function delete( Request $req){
        $id = $req->input('id');

        $result = DB::delete('delete from teacher where id = ?', [$id]);

        if($result== true){
            return 'Delete successfully';
        }else{
            return 'Delete fail data';
        }
    }

    public function update( Request $req){

        $id =  $req->input('id');
        $name =  $req->input('name');
        $email =  $req->input('email');
        $class =  $req->input('class');

        $result = DB::update('update `teacher` set `name`=?,`email`=?,`class`=? where `id` = ?', [$name, $email, $class, $id]);


            if($result == true){
                return 'Update successfully';
            }else{
                return 'Update fail data';
            }
    }
}
