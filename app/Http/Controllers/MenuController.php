<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Session;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $menus = Menu::all();

        // return a view and pass in the above variable
        return view('menus.index')->withMenus($menus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('menus.create');    
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
                'FoodItem'         => 'required|max:255',
                'Cost'             => 'required'
              
            ));

        // store in the database
        $menu = new Menu;
        $menu->FoodItem = $request->FoodItem;
        $menu->Cost = $request->Cost;
        $menu->save();


        Session::flash('success','The menu was successfuly saved!');
        return redirect()->route('menus.show', $menu->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $menu = Menu::find($id);

        return view('menus.show')->withMenu($menu);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $menu = Menu::all();
        // return the view and pass in the var we prev created
        return view('menus.edit')->withMenu($menu);
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
        $menu=Menu::find($id);
      

       
        $this->validate($request, array(
                'FoodItem'         => 'required|max:255',
                'Cost'             => 'required'
                
        ));
        
        //save the data to db
        $menu = Menu::find($id);
        $menu->kName = $request->input('FoodItem');
        $menu->Cost = $request->input('Cost');

        $menu->save();
        // set flash data with success message
        Session::flash('success','The menu was successfuly saved!');

        // redirect with flash data to menus.show
        return redirect()->route('menus.show', $menu->id);    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu =Kitchen::find($id);
        $menu->delete();
        Session::flash('success','The menu was successfuly Deleted!');
        return redirect()-> route('menus.index');  
    }
}
