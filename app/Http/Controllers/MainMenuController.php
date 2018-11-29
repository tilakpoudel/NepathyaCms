<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainMenu;
use Session;

class MainMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mainmenus.menuindex')->with('mainmenus',MainMenu::all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mainmenus.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // echo('hello');
        $this->validate($request,[
            'main_menu_name'=>'required'
        ]);
       
        $mainmenu = new MainMenu();

        $mainmenu->name = $request->main_menu_name;
        $mainmenu->status = $request->status;
        $mainmenu->save();
        // echo("category created");

        Session::flash('success','You have successfully created Main Menus');

        return redirect()->route('mainmenu.view');
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mainmenu = MainMenu::find($id);
        //dd($category);
        return view('admin.mainmenus.edit')->with('mainmenu',$mainmenu);
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
        // dd($request->all());
        $mainmenu = MainMenu::find($id);

      $mainmenu->name = $request->main_menu_name;
      $mainmenu->status = $request->status;
        // dd($mainmenu->name);
      $mainmenu->save();

      Session::flash('success','You have successfully edited category');

      return redirect()->route('mainmenu.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
