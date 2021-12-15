<h1>Category: {{ $category->name }}</h1>

<ul>
    @foreach($category->posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->slug) }}">
                {{ $post->title }}
            </a>
        </li>
    @endforeach
</ul>
