<h1>Welcome To The Posts Page</h1>

@foreach($posts as $post)
    <a href="{{ route('posts.show', $post->slug) }}">
        <h3>{{ $post->title }}</h3>
        @if($post->published_at)
            <small>Published at {{ $post->published_at }}</small>
        @endif
    </a>

    <p>Category: <a href="{{ route('categories.show', $post->category->slug) }}">{{ $post->category->name }}</a></p>

    <p>{{ $post->body }}</p>
@endforeach
