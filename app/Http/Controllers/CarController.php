<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();

        return view('index', compact('cars'));
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
        $form_data = $request->all();

        $request->validate($this->getValidationRules());

        $new_car = new Car();

        $new_car->fill($form_data);

        $new_car->save();

        return redirect()->route('cars.show', ['car' => $new_car->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);

        return view('cars.edit', compact('car'));
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
        $form_data = $request->all();

        $request->validate($this->getValidationRules());

        $update_car = Car::findOrFail($id);

        $update_car->update($form_data);

        return redirect()->route('cars.show', ['car' => $update_car->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_to_delete = Car::findOrFail($id);
        $car_to_delete->delete();

        return redirect()->route('cars.index');
    }

    //Funzione di validazione

    protected function getValidationRules()
    {
        return [
        'brand' => 'required|max:30',
        'description' => 'min:10|max:60000|nullable',
        'src' => 'required|max:1000',
        'price' => 'required|numeric|max:14',
        'model' => 'required|max:100',
        'cc' => 'required|max:10'
        ];
    }
}
