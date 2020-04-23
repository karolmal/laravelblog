@extends('layouts.master')

@section('links')
    <nav class="navbar navbar-expand-md navbar-light bg-light">
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
              <a href="{{ URL::to('forms') }}">View All</a></li>
              <a href="{{ URL::to('forms/create') }}">Create</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Exit</a>
            </div>
        </div>
    </nav>
@endsection

@section('editform')

<div class="container">
  <h2 class="text-center">Edit Page</h2>
<form method="post" action="/forms/{{$forms->id}}">
  <input type="hidden" name="_method" value="put">

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" placeholder="name" name="name" required value = "{{$forms->name}}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control"placeholder="Enter email" name="email" required value = "{{$forms->email}}">
    </div>
    {{csrf_field()}}
    <input type="hidden" name="id" value = "{{$forms->id}}">
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    
@endsection
