<!doctype html>
<header>
    <title> Lloyds Blog </title>
    <link rel="stylesheet" href="/css/mainpage.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</header>
<body>
    <div class="link child nav_buttons"><a href="/">Homepage</a></div> <!-- A quick way to homepage-->
    
        <!--Don't display register button if auth worked and siplay log out -->
    @auth
    <div class="child nav_buttons">
    <form method="POST" action="/logout">
        @csrf
        <button>Log out</button></form></div>
        <button class="userButtons"><a href="/logged/create">Create a post</a></button>
        <span>Welcome {{auth()->user()->name}}<span>
    @else
        <button><a href="/register">Register</a></button>
        <button><a href="/login">Login</a></button>
    @endguest
    <h1 class="main_title">@yield("title")</h1> <!-- Start a section for title -->
    @yield("search")
    @yield("default_section") <!-- start a section for body -->
</div>

@if (session()->has("success"))
    <div class="popup">
        <p> {{session("success")}}</p>
</div>
@endif
</body>