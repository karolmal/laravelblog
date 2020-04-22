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

47
@section('data')
    <h1>Names and emails</h1>
    <table>
        <thead>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Time</td>
        </thead>
        <tbody>
            @foreach ($allforms as $forms)
                <tr>
                    <td class="inner-table">{{ $forms->id }}</td>
                    <td class="inner-table">{{ $forms->name }}</td>
                    <td class="inner-table">{{ $forms->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


