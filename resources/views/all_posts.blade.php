@extends ("layout") <!-- Extend layout where repeating lines are located-->

@section ("default_section") <!-- extend in layout after section mark "default section" -->

    <!-- Every article has a title and a description. The title is also a link to the post's page-->
    @foreach ($blog_posts as $post)
        <article>
            <h1 class="posttitle">
                <a  href="/post/{{ $post->id }}">{{ $post->title }}</a> 
            </h1>
            <a class="taglink" href="/tags/{{$post->tag->name}}"><div class="tag"><strong>{{$post->tag->name}}</strong></div></a>       <!-- Tag section -->   
            <p></p> 
            <div class="postbody">
                {{ $post->excerpt }}
            </div>
            <p>by <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a></p> <!-- Author section -->
        </article>
    @endforeach
@endsection

@section ("title") <!-- This section right now is just used for a title -->
This is a Blog page
@endsection