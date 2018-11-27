@extends('layouts.app');


@section('content')
    
<form action="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <label for="name">Main Menu</label>
                <input type="text" class="form-control" name="category" required>
            </div>
            <div class="col-lg-6">
                <label for="name">SubMenu Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
           
        </div>
    </div>
</form>

@endsection