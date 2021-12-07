<?php

namespace App\Http\Controllers;

use App\Http\Requests\createSliderRequest;
use App\Http\Requests\updateSliderRequest;
use Illuminate\Http\Request;

class sliderController extends Controller
{

    public function index()
    {
      return view('slider.index');
    }


    public function create()
    {
        return view('slider.create');
    }


    public function store(Request $request)
    {
        $number1 = $request->input('number1');
        $number2 = $request->input('number2');
        $sum = $number1 + $number2;
        return view('slider.index')->with(['number1'=>$number1,'number2'=>$number2,'sum'=>$sum]);

    }


    public function show($id)
    {
        return view('slider.show');
    }


    public function edit($id)
    {
        return view('slider.edit')->with(['id'=>$id]);
    }


    public function update(updateSliderRequest $request, $id)
    {
        dd($request->all());
    }


    public function destroy($id)
    {
        //
    }
}
