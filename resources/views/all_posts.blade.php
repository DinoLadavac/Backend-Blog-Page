<!doctype html>
<header>
<title> Lloyds Blog </title>
<link rel="stylesheet" href="/css/mainpage.css">
<script src="/js/mainpage.js"></script>
</header>
<body>
<h1>This is a general Blog main page</h1>
<!-- Every article has a title and a description. The title is also a link to the post's page-->
<?php foreach ($blog_posts as $post) : ?>
<article>
<h1>
    <a href="/post/<?= $post->id ?>"><?= $post->title; ?></a>

</h1>
    <div>
        <?= $post->excerpt; ?>
    </div>
<!--<h2><a href="/post/firstPost">This is the title of the first post</a></h2>
<p> And this is some generic post details: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p> 
<p>laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
--></article>
<?php endforeach; ?>
</body>