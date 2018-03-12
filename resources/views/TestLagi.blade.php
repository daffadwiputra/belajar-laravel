@extends('layouts.master')

@section('title', 'Data Tabel')


@section('content')
    <hr>
    
    <h1>Table's Data</h1>
    <hr>

    <div class="container text-center">

        <table class="table table-striped">
            <thead class ="thead-dark">
            <tr>
                <th><h4>Judul</h4></th>
                <th><h4>Penerbit</h4></td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th><h4>{{$buku -> judul}}</h4></th>
                <td><h4>{{$buku -> id_penerbit}}</h4></td>
            </tr>
            <tr>
                <td class ="text-right" colspan="2">
                    <div class="container row">
                        <div class="col-sm-6 col-md-11">
                            <a href="/buku/{{$id}}/edit" class ="btn btn-secondary btn-lg" role="button">Edit</a>
                        </div>
                        <div class="col-sm-6 col-md-1">
                            <form action="/buku/{{$id}}" method="post">
                                <input type="submit" name="submit" class="btn btn-danger btn-lg" value="Delete">
                                {{ csrf_field() }}
                                <input type="hidden" name = "_method" value = "DELETE">
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    
    </div>

@endsection
