@extends('layouts.master')


@section('links')
    <nav class="navbar navbar-expand-md navbar-light bg-light">
         <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="{{ route('create') }}">Create</a>
                <a href="{{ route('view') }}">View</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Exit</a>
            </div>
        </div>
    </nav>
@endsection

