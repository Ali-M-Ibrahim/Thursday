<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('css/app.css')  }}">
</head>
<body>

<div class="card">
    <div class="card-header">
        <h2>Input User</h2>
    </div>
    <div class="card-body">


        @isset($myvariable)

        @if($myvariable=="1")

<h1>HELLO THE VARIABLE VALUE IS 1</h1>
        @elseif($myvariable=="2")
            <h1>HELLO THE VARIABLE VALUE IS 2</h1>
        @else
            <h1>HELLO THE VARIABLE VALUE IS default</h1>
            @endif
        @endisset

        @switch($myvariable)
            @case(1)     <h1>HELLO THE VARIABLE VALUE IS 1 </h1>
            @break;
                @case(2)     <h1>HELLO THE VARIABLE VALUE IS 2</h1>
                @break;
        @endswitch

            @for($i=0;$i<10;$i++)
                @if($i==3)
                    @break
                    @endif
                    {{$i}}

            @endfor

            @include('second')
        <form>
            <label for="name">Name: {{$myvariable }} </label>
            <input type="text" id="name" value="{{$myobject->name}}" name="name" required>

            <label for="email">Email: {{$global_variable}}</label>
            <input type="email" id="email" value="{{$myobject->email}}" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </form>
    </div>
    <div class="card-footer">
        <button>Save</button>
    </div>
</div>

<script>

</script>
</body>
</html>
