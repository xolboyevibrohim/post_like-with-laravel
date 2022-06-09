@extends('layout.app')
@section('content')

<div class="row d-flex justify-content-center ">
    <div class="col-8 bg-white p-2">
        @if($posts->count())
            @foreach($posts as $post)
             <x-post :post = "$posts" />
            @endforeach

            {{$posts->links()}}
        @else
            <p>{{ $user->name }} does not have any posts</p>
        @endif
    </div>
</div>


@endsection