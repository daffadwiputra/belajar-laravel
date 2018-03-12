@extends('layouts.master')

@section('title', 'Create Form')


@section('content')
    <hr>

    <h1>Create Form</h1>

    <form action="/buku" method="post">
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" name="judul" class="form-control" id="judul" placeholder="judul" value="{{old('judul')}}">
            @if($errors -> has('judul'))
                <div class="alert alert-danger" role="alert">
                    {{$errors -> first('judul')}}
                </div>
                <!-- <p>{{$errors -> first('judul')}}</p> -->
            @endif
        </div>
        <!-- <input type="text" name = "judul" value = "{{old('judul')}}">
        @if($errors -> has('judul'))
            <p>{{$errors -> first('judul')}}</p>
        @endif -->
    
        <br>

        <div class="form-group">
                <label for="id_penerbit">Penerbit</label>
                <input type="number" min="1" max="{{count($penerbit)}}" name="id_penerbit" class="form-control" id="id_penerbit" placeholder="penerbit" value="{{old('id_penerbit')}}">
                @if($errors -> has('id_penerbit'))
                    <div class="alert alert-danger" role="alert">
                        {{$errors -> first('id_penerbit')}}
                    </div>
                    <!-- <p>{{$errors -> first('id_penerbit')}}</p> -->
                @endif
        </div>
        <!-- <input type="penerbit" name="penerbit"> 
        @if($errors -> has('penerbit'))
            <p>{{$errors -> first('penerbit')}}</p>
        @endif -->

        <br>
        
        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
        {{ csrf_field() }}

    </form>

@endsection
