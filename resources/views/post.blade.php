<!--- Turn tags that are strings into array -->
@php
    $post_tags = explode(", ", $id_post->tags); 
@endphp
@extends("layout") <!-- Extend layout where repeating lines are located-->
@section("default_section")<!-- extend in layout after section mark "default section" -->
<article>
    <!-- Load the title od the post. --> 
    @section("title"){{ $id_post->title }}@endsection
    <p>Published: {{$id_post->created_at}}</p>
    <div class="parent">
    <!-- Check if there are tags -->
    @if($post_tags[0]!=="")
    <p class="child">Tags:</p>
    @foreach ($post_tags as $tag)
    <div class="tag"><strong>{{$tag}}</strong></div>   <!-- Tag section -->
    @endforeach
    @endif
    </div>
    <!-- Check if cover image is provided and display it -->
    @if($id_post->coverimage !== null)
    <img class="coverimagepost" src="{{asset($id_post->coverimage)}}" alt="Cover image">
    @endif
    <!-- Load the context od the post. --> 
    <p class=postbody>{!! $id_post->body !!}</p>
<p><strong> by <a href="/authors/{{$id_post->author->username}}", class="link">{{$id_post->author->username}}</a></strong></p> <!-- Author section -->
</article>
<!-- A way to get back to main page intuitively-->
<a class="backarrow" href="/"><--</a>
@endsection
