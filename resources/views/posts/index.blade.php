@extends('layout.app')
@section('content')

<div class="row d-flex justify-content-center ">
    <div class="col-8 bg-white p-2">
        <form action="{{route('post')}}" method="post">
            @csrf
            <div class="mb-4">
                <textarea name="body" id="body" cols="30" rows="4" class="bg-transparent @error('body') border border-red @enderror"
                    placeholder="post something"></textarea>

                @error('body')
                <div class="text-danger">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary text-white">Post</button>
            </div>

        </form>
        
    </div>
</div>


@endsection