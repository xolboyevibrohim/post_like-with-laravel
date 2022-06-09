@props(['post'=>$post])
<div class="mb-4">
    <a href="{{route('user.post',$post->user)}}" class="fw-bold text-decoration-none text-dark">{{$post->user->name}}</a>
    <span class="text-secondary fs-6 fw-light">{{$post->created_at->diffForHumans()}}</span>
    <p class="mb-2">{{$post->body}}</p>

    @can('delete',$post)
    <div>
        <form action="{{route('post.destroy', $post)}}" method="POST" class="">
            @csrf
            @method('DELETE')
            <button class="btn btn-transparent text-danger" type="submit">Delete</button>
        </form>
    </div>
    @endcan

    <div class="d-flex">
        @auth
        @if(!$post->likedBy(auth()->user()))
        <form action="{{route('post.likes',$post)}}" method="POST" class="">
            @csrf
            <button class="btn btn-transparent text-success" type="submit">Like</button>
        </form>
        @else
        <form action="{{route('post.likes',$post)}}" method="POST" class="">
            @csrf
            @method('DELETE')
            <button class="btn btn-transparent text-dark" type="submit">Unlike</button>
        </form>
        @endif
        @endauth
        <span>{{ $post->likes->count() }} {{Str::plural('like', $post->likes->count()) }}</span>

    </div>
</div>