@extends('layouts.app')


@section('content')
   @include('admin.includes.errors')   
 
        <div class="panel-heading">
          <h3>Create a new Main Menu </h3>
        </div>
    
        <div class="panel-body">
        <form action="{{route('mainmenu.store')}}" method="post">
                {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

            {{csrf_field()}}
    
            <div class="form-group">
              <strong><label for="main_menu_name">Main Menu Name</label></strong>
              <input type="text" name="main_menu_name" class="form-control">
            </div>
    
            <div class="form-group">
                    <strong><label for="status">Status</label></strong>
                    <select class="form-control" name="status" id="status">
    
                            <option value="1">Active</option>
                            <option value="0">InActive</option>


                            {{-- @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach --}}
                
                          </select>
                  </div>
                          
                
            <div class="form-group">
              <div>
                <button type="submit" name="submit_menu" class="btn btn-success btn-lg">Create Main Menu</button>
              </div>
            </div>
    
    
          </form>
        </div>
      </div>

@endsection