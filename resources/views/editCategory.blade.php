@extends('layouts.master')
@section('title')
    <title>Category edit</title>
@endsection

@section('content')

    <div class="card">
        <div class="card-header">
            <h2>Input Category</h2>
        </div>
        <form action="{{route('category.update',['category'=>$category->id])}}" method="post">
            @csrf
            @method('put')
            <div class="card-body">

                <label for="name">Name: </label>
                <input type="text" id="name"  value="{{$category->name}}" name="thename" required >

            </div>
            <div class="card-footer">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>
@endsection
