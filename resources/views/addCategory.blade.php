<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/app.css')  }}">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Input Category</h2>
    </div>
    <form action="{{route('category.store')}}" method="post">
        @csrf
    <div class="card-body">

            <label for="name">Name: </label>
            <input type="text" id="name" name="thename" required >

    </div>
    <div class="card-footer">
        <button type="submit">Save</button>
    </div>
    </form>
</div>

<script>

</script>
</body>
</html>
