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
            <h2>Input Category</h2>
        </div>
        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="card-body">

                <label for="name">Name: </label>
                <input type="text" id="name" name="thename"  >

                @error('thename')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="card-footer">
                <button type="submit">Save</button>
            </div>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
@endsection



