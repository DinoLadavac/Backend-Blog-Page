
@extends ("layout") <!-- Extend layout where repeating lines are located-->

@section ("default_section") <!-- extend in layout after section mark "default section" -->
    <!--- Turn tags that are strings into array -->
    @foreach ($blog_posts as $post)
        @php
            $post_tags = explode(", ", $post->tags); 
        @endphp

        <!-- Every article has a title and a description. The title is also a link to the post's page-->
        <article>
            <h1 class="posttitle">
                <a  href="/post/{{ $post->id }}">{{ $post->title }}</a> 
            </h1>
            <!-- If tags aren't empty than print them, else skip this section-->
            @if($post_tags[0]!=="")
            <div class="parent">
            <p class="child">Tags: </p>
            @foreach ($post_tags as $tag) <!-- print every item in tag array-->
            <div class="tag"><strong>{{$tag}}</strong></div>   <!-- Tag section -->
            @endforeach 
            </div>  
            @endif

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