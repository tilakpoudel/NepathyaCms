@extends('layouts.app')


@section('content')
   @include('admin.includes.errors')   
 
        <div class="panel-heading">
          <h3>Edit Main Menu: {{$mainmenu->name}} </h3>
        </div>
    
        <div class="panel-body">
        <form action="{{route('mainmenu.update',['id'=>$mainmenu->id])}}" method="post">
                {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

            {{csrf_field()}}
    
            <div class="form-group">
              <strong><label for="main_menu_name">Main Menu Name</label></strong>
              <input type="text" name="main_menu_name" class="form-control" value="{{$mainmenu->name}}">
            </div>
    
            <div class="form-group">
                    <strong><label for="status">Status</label></strong>
                    <select class="form-control" name="status" id="status">
    
                            <option value="1">Active</option>
                            <option value="0">InActive</option>
                
                          </select>
                  </div>
                          
                
            <div class="form-group">
              <div>
                <button type="submit" name="submit_menu" class="btn btn-success btn-lg">Update Main Menu</button>
              </div>
            </div>
    
    
          </form>
        </div>
      </div>

@endsection