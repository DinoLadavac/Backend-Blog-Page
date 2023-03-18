@extends ("layout") <!-- Extend layout where repeting lines are located-->

@section ("default_section") <!-- extend in layout after section mark "default section" -->

    <!-- Every article has a title and a description. The title is also a link to the post's page-->
    @foreach ($blog_posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->id }}">{{ $post->title }}</a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
@endsection

@section ("title") <!-- This section right now is just used for a title -->
This is a general Blog main page
@endsection