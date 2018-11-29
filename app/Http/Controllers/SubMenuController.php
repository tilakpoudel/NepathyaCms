<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainMenu;
use App\SubMenu;
use Session;

class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.submenus.submenuindex')->with('submenus',SubMenu::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $mainmenus = MainMenu::all();
        $mainmenus = MainMenu::where('status','=',1)->get();
       
        if($mainmenus->count() == 0){

        Session::flash('info','You must have a MainMenu before creating a sub menu');

        return redirect()->back();
      }
        return view('admin.submenus.create')->with('mainmenus',$mainmenus);
                                          
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
        $this->validate($request,[
            'mainmenu'=>'required',
            'sub_menu_name'=>'required'
        ]);
        $submenu = new SubMenu();
        $submenu->main_menu_id = $request->mainmenu;
        $submenu->name = $request->sub_menu_name;
        $submenu->status = $request->status;
        $submenu->save();
        
        Session::flash('success','You have successfully created SubMenus');

        return redirect()->route('submenu.view');
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
        $submenu = SubMenu::find($id);
        //dd($category);
        return view('admin.submenus.edit')->with('submenu',$submenu)
                                          ->with('mainmenus',MainMenu::where('status','=',1)->get());  
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
        //
        $submenu = SubMenu::find($id);
        $submenu->main_menu_id = $request->mainmenu;
        $submenu->name = $request->sub_menu_name;
        $submenu->status = $request->status;
          // dd($mainmenu->name);
        $submenu->save();
  
        Session::flash('success','You have successfully edited SubMenu');
  
        return redirect()->route('submenu.view');
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
