@extends("layout") <!-- Extend layout where repeating lines are located-->


@section("default_section")<!-- extend in layout after section mark "default section" -->
<article>
    <!-- Load the title od the post. --> 
    <h1 class="posttitle">{{ $id_post->title }}</h1>
    <div>
    <a class="taglink" href="/tags/{{$id_post->tag->name}}"><div class="tag"><strong>{{$id_post->tag->name}}</strong></div></a>  <!-- Tag section -->
    <p></p>
    <!-- Load the context od the post. --> 
    <p class=postbody>{!! $id_post->body !!}</p>
    </div>
<p><strong> by <a href="/authors/{{$id_post->author->username}}">{{$id_post->author->name}}</a></strong></p> <!-- Author section -->
</article>
<!-- A way to get back to main page intuitively-->
<a class="backarrow" href="/"><--</a>
@endsection
