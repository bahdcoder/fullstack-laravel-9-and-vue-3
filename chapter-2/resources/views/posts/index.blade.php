<h1>Welcome To The Posts Page</h1>

@foreach($posts as $post)
    <a href="{{ route('posts.show', $post->slug) }}">
        <h3>{{ $post->title }}</h3>
    </a>

    <p>{{ $post->body }}</p>
@endforeach
