<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //Handmade way for creating data for computers
//    private static function getData(){
//     return[
//         ['id' => 1, 'name' => 'lg', 'origin' => 'cairo'],
//         ['id' => 2, 'name' => 'hp', 'origin' => 'Alex'],
//         ['id' => 3, 'name' => 'asur', 'origin' => 'Giza']
//     ];
//    }
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //    $computer = new Computer(); //calling the Model

    //    $computer -> name = $request ->input('computer-name');
    //    $computer -> origin = $request ->input('computer-origin');
    //    $computer -> price = $request ->input('computer-price');
    //    $computer -> save();

    //    return redirect()->route('computers.index'); //back to the index page after create

    //After Validation ......
        $computer = new Computer();  //calling the Model

        $request -> validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required | integer' //or ['required', 'integer']

        ]);

       $computer -> name = strip_tags($request ->input('computer-name')) ;
       $computer -> origin = strip_tags($request ->input('computer-origin'));
       $computer -> price = strip_tags($request ->input('computer-price'));
       $computer -> save();
       

       return redirect()->route('computers.index'); //back to the index page after create


    }

    /**
     * Display the specified resource.
     */
    // public function show(string $computer)
    // {
    //     $computers = self::getData();
    //     $index = array_search($computer, array_column($computers, 'id'));

    //     if($index === false){
    //         abort(404);
    //     }
        
    //     return view('computers.show', [
    //         'computers' => $computers[$index]
    //     ]);
    // }

        public function show(string $computer){
            // $index = Computer::findOrFail($computer);

            // we do not need abort() method we use findOrFail Method
            
            return view('computers.show', [
                'computers' => Computer::findOrFail($computer)
            ]);

        }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $computer)
    {
        return view('computers.edit', [
            'computers' => Computer::findOrFail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $computer)
    {
        $to_update = new Computer();  //calling the Model

        $request -> validate([
            'computer-name' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required | integer' //or ['required', 'integer']

        ]);

       $to_update = Computer::findOrFail($computer);
       $to_update -> name = strip_tags($request ->input('computer-name')) ;
       $to_update -> origin = strip_tags($request ->input('computer-origin'));
       $to_update -> price = strip_tags($request ->input('computer-price'));
       $to_update -> save();
       

       return redirect()->route('computers.show', $computer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $computer)
    {
       $to_delete = Computer::findOrFail($computer);
       $to_delete -> delete();
       return redirect()->route('computers.index');

        
    }
}


// $computers = Computer::findOrFail($computer);
// ['computers' => Computer::findOrFail($computer)]

