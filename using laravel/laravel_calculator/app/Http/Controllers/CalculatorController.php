<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index(Request $request)
    {
            $firstnumber = $request->input('firstnumber');
            $secondnumber = $request->input('secondnumber');
            $operator = $request->input('operator');
            $result = 0;
            if ($operator == '+') {
            	$result = $firstnumber + $secondnumber;
            }elseif ($operator == '-') {
            	$result = $firstnumber - $secondnumber;
            }elseif($operator=='*'){
                $result = $firstnumber * $secondnumber;
            }elseif ($operator=='/') {
            	$result = $firstnumber / $secondnumber;
            }elseif ($operator=='%') {
            	$result = $firstnumber % $secondnumber;
            }else{
            	$result = 0;
            }
            //echo $result;
            return redirect('/')->with('message','Your answer is:'.$result);
    }
}
