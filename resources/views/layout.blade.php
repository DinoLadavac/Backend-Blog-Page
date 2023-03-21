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
        <button type="submit">Log out</button></div>
        <span>Welcome {{auth()->user()->name}}<span>
    @else
        <div class="child nav_buttons">
        <button><a href="/register">Register</a></button></div>
        <div class="child nav_buttons"><button><a href="/login">Login</a></button></div>
        </div>
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