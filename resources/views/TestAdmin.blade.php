@extends('layouts.master')

@section('title','Welcome')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Belajar Laravel</h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    
    <p class="lead">
        <a class="btn btn-dark btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>
<h1>Users Table</h1>
<hr>

<div class = "container-fluid text-center">
    <table class = "table table-bordered">
        <thead class ="thead-dark">
            <th>User</th>
            <th>Password</th>
        </thead>
        
        @foreach ($user as $row)
        <tbody>
            <tr>
                <td>{{$row -> name}}</td>
                <td>{{$row -> password}}</td>
            </tr>
        </tbody>
        @endforeach
        
    </table>     
</div>
<h1>Database Table</h1>
<hr>

<div class = "container-fluid text-center">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-outline-dark btn-lg btn-block mb-4" href="/buku/create" role="button">Insert Data</a>
        </div>
        <div class="col-md-6 col-sm-12">
            <a class="btn btn-outline-info btn-lg btn-block mb-4" href="/buku/restore" role="button">Restore Data</a>
        </div>
    </div>
    <table class = "table table-bordered">
        <thead class ="thead-dark">
            <th>Judul</th>
            <th>Penerbit</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        
        @foreach ($buku as $row)
        <tbody>
            <tr>
                <td><a href="/buku/{{$row -> id_buku}}">{{$row -> judul}}</a></td>
                <td><a href="/buku/{{$row -> id_buku}}">{{$row -> penerbit -> nama_penerbit}}</a></td>
                <td>
                    <a href="/buku/{{$row -> id_buku}}/edit" class ="btn btn-secondary" role="button">Edit</a>
                </td>
                <td>
                    <form action="/buku/{{$row -> id_buku}}" method="post">
                        <input type="submit" name="submit" class="btn btn-danger btn-sm" value="Delete">
                        {{ csrf_field() }}
                        <input type="hidden" name = "_method" value = "DELETE">
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
        
    </table>     
</div>


@endsection