@extends('layouts.app')


@section('content')
<div class="card ">
<div class="card-heading">
  <h3>MainMenus..</h3>
</div>

  <div class="card-body">
    <table class="table table-hover" style="font-size:large">
      <thead>

          <th>Main Menu Items  </th>
          <th>Status</th>
          <th>Edit</th>
          
      </thead>
      <tbody>
        @if($mainmenus->count()>0)
        @foreach($mainmenus as $mainmenu)
          <tr>
            <td>
                {{$mainmenu->name }}
            </td>
            <td>
              @if($mainmenu->status=='1')
              <span class="badge badge-success">Active</span>

              
              @else
              <span class="badge badge-danger">Inactive</span>

              
                {{-- {{$mainmenu->status }} --}}
            </td>
            @endif
           <td>
            
             <a href="{{route('mainmenu.edit',['id'=> $mainmenu->id ])}}" class="btn btn-sm btn-info" >
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
