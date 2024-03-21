<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>
<a href="{{route('category.create')}}">Add Category</a>
<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Actions</th>
    </tr>

    @foreach($all as $obj)
    <tr>
        <td>{{$obj->id}}</td>
        <td>{{$obj->name}}</td>
        <td>
            <a href="{{route('category.edit',['category'=>$obj->id])}}">Edit</a>

            <a href="{{route('delete-category',['id'=>$obj->id])}}">Delete</a>

            <form action="{{route('category.destroy',['category'=>$obj->id])}}" method="post">
            @csrf
            @method('delete')

                <input type="submit" value="delete" />
            </form>
        </td>
    </tr>
    @endforeach

</table>

</body>
</html>

