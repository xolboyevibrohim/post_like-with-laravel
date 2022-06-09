@extends('layout.app')
@section('content')

<div class="row d-flex justify-content-center ">
    <div class="col-3 bg-white p-2">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control @error('name') border border-danger @enderror" placeholder="name" name="name"  value="{{old('name')}}" >
                @error('name')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control  @error('username') border border-danger @enderror" placeholder="Username" name="username"  value="{{old('username')}}">
                @error('username')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="text" class="form-control @error('email') border border-danger @enderror" placeholder="@example.com" name="email" value="{{old('email')}}">
                @error('email')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') border border-danger @enderror" placeholder="password" name="password">
                @error('password')
                    <div class="text-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password confirm</label>
                <input type="password" class="form-control" placeholder="password" name="password_confirmation">
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success">Register</button>
            </div>

        </form>
    </div>
</div>


@endsection