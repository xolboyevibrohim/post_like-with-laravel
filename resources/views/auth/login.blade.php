@extends('layout.app')
@section('content')

<div class="row d-flex justify-content-center ">
    <div class="col-3 bg-white p-2">
        @if(session('status'))
        <div class="text-danger">
            {{session('status')}}
        </div>
        @endif
        <form action="{{route('login_')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="text" class="form-control @error('email') border border-danger @enderror" placeholder="@example.com"
                    name="email" value="{{old('email')}}">
                @error('email')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control @error('password') border border-danger @enderror"
                    placeholder="password" name="password">
                @error('password')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="checkbox" name="remember">
                <label>Remember me</label>
            </div>
            <div class="mb-3 text-center">
                <button class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</div>


@endsection