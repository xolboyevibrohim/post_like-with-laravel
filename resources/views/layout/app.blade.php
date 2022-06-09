<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <div class=" bg-white d-flex justify-content-between mb-3">
        <div class="d-flex">
            <li class="border border-info p-2">
                <a href="" class="p-3 text-decoration-none">Home</a>
            </li>
            <li class="border border-info p-2">
                <a href="{{route('dashboard')}}" class="p-3 text-decoration-none">Dashboard</a>
            </li>
            <li class="border border-info p-2">
                <a href="{{route('post')}}" class="p-3 text-decoration-none">Post</a>
            </li>
        </div>

        <div class="d-flex justify-content-between">
            @auth
            <li class="border border-info p-2">
                <a href="" class=" text-decoration-none">{{ auth()->user()->name }}</a>
            </li>
            <li class="border border-info p-2">
                <form class="" action="{{route('logout')}}" method="POST">
                    @csrf
                    <button  class="btn btn-success" type="submit" >log out</button>
                </form>
            </li>
            @endauth

            @guest
            <li class="border border-info p-2">
                <a href="{{route('login')}}" class=" text-decoration-none">Login</a>
            </li>
            <li class="border border-info p-2">
                <a href="{{route('register')}}" class=" text-decoration-none">register</a>
            </li>

            @endguest



        </div>

    </div>
    @yield('content')
</body>

</html>