<h3>{{ $post->title }}</h3>
<p>{{ $post->body }}</p>

<form action="{{ route('posts.publish', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit">
        Publish
    </button>
</form>

<form action="{{ route('posts.unpublish', $post->id) }}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit">
        Unpublish
    </button>
</form>

<form action="{{ route('posts.delete', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">
        Delete
    </button>
</form>

