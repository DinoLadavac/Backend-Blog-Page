@extends("layoutauth")
@section("title")
    Create a post
@endsection
@section("default_section")
    <form method="POST" action="/logged/create" enctype="multipart/form-data">
            @csrf
            <div class="child">
            <label for="title">
                Title: 
            </label>

            <input
                type="text"
                name="title"
                id="title" 
                value="{{old('title')}}"
                    required></div>
            <br>
            <div class="child">
            <label for="excerpt">
                Description: 
            </label>

            <textarea
                type="text"
                name="excerpt"
                id="excerpt" 
                required>{{old('excerpt')}}</textarea></div>
    
            <br>
            <div class="child">
            <label for="body">
                Body: 
            </label>

            <textarea
                name="body"
                id="body"
                required>{{old('body')}}</textarea></div>
    <br>
    <div class="child">
            <label for="tags">
                Tags: 
            </label>
            @php
             $all_tags=["Advice", "School", "Errors", "Fun", "Personal", "Spoiler", "important!", "Bugfix", "Design", "News"];
            @endphp
            @foreach($all_tags as $tag)
                <input type="checkbox" name="tags[]" value="{{$tag}}">{{$tag}}</input>
            @endforeach 
            @error("tags")
            <p class="error"> You can only select maximum 3 tags per post! </p>
        @enderror
        </div>
        <br>
        <div class="child">  
            <label for="coverimage">
               Cover image: 
            </label>
            <input
                type="file"
                name="coverimage"
                id="coverimage" 
                >
        @error("coverimage")
            <p class="error"> Please select an image that doesn't exceed 2MB! </p>
        @enderror
    </div>
    <br>
    <div class="child nav_button">
        <button type="submit">
            Publish post
        </button></div>
</form>
@endsection
