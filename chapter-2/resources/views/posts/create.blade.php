<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name='title' placeholder="title">
    <textarea name="body" placeholder="body"></textarea>

    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <br />

    <select name="tags[]" multiple>
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>

    <button type="submit">
        Create Post
    </button>
</form>
