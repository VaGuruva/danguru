<?php

namespace Guru\Http\Controllers;
use Auth;
use Guru\Owner;
use Guru\Car;
use Illuminate\Http\Request;
use Guru\Http\Requests;




class CarController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$user = json_decode(Auth::user(), true);
        //$cars = Car::where('id', '=', $user['id']);
        $cars = Car::all();
        return view('cars.index')->with('cars', $cars);
     }
     

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $car = new Car;
        $car->manufacturer = $request->manufacturer;
        $car->type = $request->type;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->mileage = $request->mileage;
        $car->owner_id = $request->owner_id;
        $car->save();
        return redirect()->action('CarController@index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $car = Car::find($id);
        return view('cars.show')->with('car',$car);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::find($id);
        return view('cars.edit')->with('car',$car);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        $car->manufacturer = $request->manufacturer;
        $car->type = $request->type;
        $car->year = $request->year;
        $car->color = $request->color;
        $car->mileage = $request->mileage;
        $car->owner_id = $request->owner_id;
        $car->save();
        return redirect()->route('cars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::destroy($id);
        return redirect()->route('cars.index');
    }
}
