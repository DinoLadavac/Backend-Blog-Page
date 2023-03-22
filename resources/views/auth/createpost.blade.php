<head>
<link rel="stylesheet" href="/css/registrationpage.css">
</head>
<body>
    <h1>Create a post!</h1>
    <form method="POST" action="/logged/create">
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
    
    <form method="POST" action="/logged/create">
            <div class="child">
            <label for="excerpt">
                Description: 
            </label>

            <textarea
                type="text"
                name="excerpt"
                id="excerpt" 
                required>{{old('excerpt')}}</textarea></div>
    
    <form method="POST" action="/logged/create">
            <div class="child">
            <label for="body">
                Body: 
            </label>

            <textarea
                name="body"
                id="body"
                required>{{old('body')}}</textarea></div>
    
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
       
    
    <div class="child">
        <button type="submit">
            Publish post
        </button></div>
    
                    

</body>