@extends('master')


@section('content')
    <div class="card">
        <div class="card-header">
            <h2>Input Category</h2>
        </div>
        <form action="{{route('item.store')}}" method="post">
            @csrf
            <div class="card-body">

                <div>
                    <label for="name">Name: </label>
                    <input type="text" id="name" name="thename" required >
                </div>

                <div>
                    <label for="desc">Description: </label>
                    <input type="text" id="desc" name="Description" required >
                </div>



                <div>
                    <label for="price">Price: </label>
                    <input type="text" id="price" name="price" required >
                </div>

                <select name="category">


                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach
                </select>

            </div>
            <div class="card-footer">
                <button type="submit">Save</button>
            </div>
        </form>
    </div>

@endsection


@section('customcss')
<style>
    label{
        color:red;
    }
</style>
@endsection
