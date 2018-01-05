<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kitchen;
use Session;
class KitchenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*public function __construct(){
        $this->middleware('auth');
    }*/
     public function index()
    {
        // create variable and store all data from db
        $kitchens = Kitchen::all();

        // return a view and pass in the above variable
        return view('kitchens.index')->withKitchens($kitchens);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('kitchens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //validate the data
        $this->validate($request, array(
                'kName'         => 'required|max:255',
              
            ));

        // store in the database
        $kitchen = new Kitchen;
        $kitchen->kName = $request->kName;
        $kitchen->save();


        Session::flash('success','The kitchen was successfuly saved!');
        return redirect()->route('kitchens.show', $kitchen->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $kitchen = Kitchen::find($id);

        return view('kitchens.show')->withKitchen($kitchen);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            // find the kitchen in db and save in var
        $kitchen = Kitchen::find($id);
        // return the view and pass in the var we prev created
        return view('kitchens.edit')->withKitchen($kitchen);
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
        //validate the data
        $kitchen=Kitchen::find($id);
      

       
        $this->validate($request, array(
                'kName'         => 'required|max:255',
                
        ));
        
        //save the data to db
        $kitchen = Kitchen::find($id);
        $kitchen->kName = $request->input('kName');

        $kitchen->save();
        // set flash data with success message
        Session::flash('success','The kitchen was successfuly saved!');

        // redirect with flash data to kitchens.show
        return redirect()->route('kitchens.show', $kitchen->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $kitchen =Kitchen::find($id);
        $kitchen->delete();
        Session::flash('success','The blog kitchen was successfuly Deleted!');
        return redirect()-> route('kitchens.index');
    }
}
