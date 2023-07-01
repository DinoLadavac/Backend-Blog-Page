<!doctype html>
<header>
    <title> Blog Page </title>
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
        <button class="child nav_buttons">Log out</button></form></div>
        <button class="child userButtons"><a href="/logged/create">Create a post</a></button>
        <button class="child nav_buttons"><a href="/logged/posts">My Posts</a></button>
        <div class="child nav_buttons"><a href="logged/account/edit">Edit account</a></div>
        <div class="child nav_buttons">
    <form method="POST" action="/logged/account/delete">
        @csrf
        @method("DELETE")
        <button class="childnav nav_buttons">Delete account</button></form></div>
        <span>Welcome {{auth()->user()->username}}<span>
    @else
        <button class="child nav_buttons"><a href="/register">Register</a></button>
        <button class="child nav_buttons"><a href="/login">Login</a></button>
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
