@extends('layouts.master')
@section('title')
    <title>Category add</title>
@endsection
@section('customscript')

    <script>alert('asd')</script>
@endsection


@section('content')


    <div class="card">
        <div class="card-header">
            <h2>First Object having id = {{$obj->id}}</h2>
            <img src="{{$obj->image_path}} " />
        </div>



    </div>
@endsection



