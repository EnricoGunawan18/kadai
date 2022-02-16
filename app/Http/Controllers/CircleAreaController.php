<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CircleAreaController extends Controller
{
    public function index(Request $request){
        $link = mysqli_connect("mysql57.tcagame01.sakura.ne.jp","tcagame01","tcagame2021","tcagame01_20j70008");

        $number = $request->input('number');
        $a = 3.14 * $number * $number;
        $b = "Circle Area";
        $stmt = mysqli_prepare($link, 'INSERT INTO results(name,result) VALUES(?,?)');
        mysqli_stmt_bind_param($stmt, "ss", $b, $a);
        $result = mysqli_stmt_execute($stmt);

        mysqli_close($link);
        return $a;
    }
}
