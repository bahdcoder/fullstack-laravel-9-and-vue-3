<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name='title' placeholder="title">
    <textarea name="body" placeholder="body"></textarea>

    <button type="submit">
        Create Post
    </button>
</form>
