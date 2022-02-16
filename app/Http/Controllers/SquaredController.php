<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquaredController extends Controller
{
    public function index(Request $request){
        $link = mysqli_connect("mysql57.tcagame01.sakura.ne.jp","tcagame01","tcagame2021","tcagame01_20j70008");

        $number = $request->input('number');
        $a = $number*$number;
        $b = "Square";
        $stmt = mysqli_prepare($link, 'INSERT INTO results(name,result) VALUES(?,?)');
        mysqli_stmt_bind_param($stmt, "ss", $b, $a);
        $result = mysqli_stmt_execute($stmt);

        mysqli_close($link);
        return $a;
    }
}
