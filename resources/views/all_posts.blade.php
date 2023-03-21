
@extends ("layout") <!-- Extend layout where repeating lines are located-->

@section ("default_section") <!-- extend in layout after section mark "default section" -->
    <!--- Turn tags that are strings into array -->
    @foreach ($blog_posts as $post)
        @php
            $post_tags = explode(", ", $post->tags); 
        @endphp

        <!-- Every article has a title and a description. The title is also a link to the post's page-->
        <article>
            <div class="posttitle">
                <a  href="/post/{{ $post->id }}">{{ $post->title }}</a> 
            </div>
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
            <p>by <a href="/authors/{{$post->author->username}}", class="link">{{$post->author->name}}</a></p> <!-- Author section -->
        </article>
    @endforeach
    <br>
    <div style="max-width: 900px; margin:auto; ">{{ $blog_posts->links() }}</div>
    <br>
@endsection

@section ("title") <!-- This section right now is just used for a title -->
This is a Blog page
@endsection

 @section ("search")
 <div class="parent search" style=" margin-left: auto; margin-right: auto;">
 <p class="child">Search:</p>
 <div class="child relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2" >
        <form class="searchbar" method="GET" action="#">
            <input type="text" name="search" placeholde="Dind something"
                class="bg-transparent placeholder-black font-semibold text-sm" value="{{ request('search') }}">
    </form>
</div>
@endsection
