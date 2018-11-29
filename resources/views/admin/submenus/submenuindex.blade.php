@extends('layouts.app')


@section('content')
<div class="card ">
<div class="card-heading">
  <h3>SubMenus..</h3>
</div>

  <div class="card-body">
    <table class="table table-hover" style="font-size:large">
      <thead>

          <th>Sub Menu Items </th>
          <th>Main Menu</th>

          <th>Status</th>
          <th>Edit</th>
          
      </thead>
      <tbody>
        @if($submenus->count()>0)
        @foreach($submenus as $submenu)
          <tr>
            <td>
                {{$submenu->name }}
            </td>
            <td>
                    {{$submenu->main_menu_id }}
                </td>
            <td>
              @if($submenu->status=='1')
              <span class="badge badge-success">Active</span>
             
              @else
              <span class="badge badge-danger">Inactive</span>
             
                {{-- {{$mainmenu->status }} --}}
            </td>
            @endif
           <td>
            
             <a href="{{route('submenu.edit',['id'=> $submenu->id ])}}" class="btn btn-sm btn-info" >
               Edit
            </a>
           </td>
                        
          </tr>

        @endforeach

        @else
        <tr>
          <th class="text-center" colspan="5"> <span class="badge badge-info">Aww!!No any Menus yet!!!</span></th>
        </tr>

          @endif
      </tbody>

    </table>


  </div>
</div>



@endsection
