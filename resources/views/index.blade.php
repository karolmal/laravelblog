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


@section('data')
    <h1 class="text-center">Names and emails / View Page</h1>
    <table class="table table-striped table-dark">
        <thead>
            <td>id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Time</td>
            <td>Likes Count</td>
        </thead>
        <tbody>
            @foreach ($allforms as $forms)
                <tr>
                    <td class="inner-table">{{ $forms->id }}</td>
                    <td class="inner-table">{{ $forms->name }}</td>
                    <td class="inner-table">{{ $forms->email }}</td>
                    <td class="inner-table">{{ $forms->created_at->diffForHumans() }}</td>
                    <td class="inner-table"><button class="btn btn-info">{{ $forms->likes_count }}</button></td>
                    <td><a href="{{action('FormController@edit', $forms['id'])}}" class="btn btn-warning">Edit</a></td>
                    
                    <td>
                        <form action="{{ route('form.destroy', $forms->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


