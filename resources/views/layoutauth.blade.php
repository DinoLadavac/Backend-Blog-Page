<!doctype html>
<header>
<link rel="stylesheet" href="/css/registrationpage.css">
</header>
<body>
    <div class="childnav"><a class="nav_buttons" href="/">Homepage</a></div> <!-- A quick way to homepage-->
        <!--Don't display register button if auth worked and siplay log out -->
    <div class="childnav nav_buttons">
    <form method="POST" action="/logout">
        @csrf
        <button class="childnav nav_buttons">Log out</button></form></div>
    <h1 class="main_title">@yield("title")</h1> <!-- Start a section for title -->
    @yield("default_section") <!-- start a section for body -->
</div>
</body>