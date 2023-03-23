@extends("layoutauth")
@section("title")
    My posts
@endsection

@section("default_section")
<table style="margin:auto">
  <thead>
    <tr>
      <th scope="col">Post title</th>
      <th scope="col">Created</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
        @if($post->user_id == auth()->user()->id)
            <td data-label="post-title"><a href="../post/{{$post->id}}">{{$post->title}}</td>
            <td data-label="created-at">{{$post->created_at}}</td>
            <td><a href="/logged/posts/{{$post->id}}/edit"><button>Edit</button></td>
            <td>
                <form method="POST" action="/logged/posts/{{$post->id}}">
                    @csrf
                    @method("DELETE")
                    <button href="/logged/posts/{{$post->id}}">Delete</button>
                </form>
            </td>
        @endif
    </tr>
    @endforeach

  </tbody>
</table>
@endsection
