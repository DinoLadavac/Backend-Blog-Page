@extends("layout") <!-- Extend layout where repeting lines are located-->
@section("title")<!-- This section right now is just used for a title -->
    This is a section post
@endsection

@section("default_section")<!-- extend in layout after section mark "default section" -->
<article>
    <!-- Load the title od the post. --> 
    <h1>{{ $id_post->title }}</h1>
    <div>
        <!-- Load the context od the post. --> 
         {!! $id_post->body !!}
    </div>
</article>
<!-- A way to get back to main page intuitively-->
<a class="backarrow" href="/"><--</a>
@endsection
