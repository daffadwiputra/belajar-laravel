@extends('layouts.master')

@section('title', 'Edit Form')


@section('content')
    <hr>

    <h1>Edit Form</h1>

    <form action="/buku/{{$buku -> id_buku}}" method="post">

        <!-- <input type="text" name = "judul" value = "{{$buku -> judul}}"> 
        @if($errors -> has('judul'))
            <p>{{$errors -> first('judul')}}</p>
        @endif -->
        <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="judul" value="{{$buku -> judul}}">
                @if($errors -> has('judul'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors -> first('judul')}}
                    </div>
                    <!-- <p>{{$errors -> first('judul')}}</p> -->
                @endif
        </div>

        <br>

        <!-- <input type="penerbit" name="penerbit" value = "{{$buku -> penerbit}}">
        @if($errors -> has('penerbit'))
            <p>{{$errors -> first('penerbit')}}</p>
        @endif -->
        <div class="form-group">
                    <label for="id_penerbit">Penerbit</label>
                    <input type="number" min="1" max="6" name="id_penerbit" class="form-control" id="id_penerbit" placeholder="penerbit" value="{{$buku -> id_penerbit}}">
                    @if($errors -> has('id_penerbit'))
                        <div class="alert alert-danger" role="alert">
                            {{$errors -> first('id_penerbit')}}
                        </div>
                        <!-- <p>{{$errors -> first('id_penerbit')}}</p> -->
                    @endif
        </div>
    
        <br>
    
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        {{ csrf_field() }}
        <input type="hidden" name = "_method" value = "PUT">

    </form>

@endsection
