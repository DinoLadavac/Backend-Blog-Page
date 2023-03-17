<!doctype html>
<header>
<title> Lloyds Blog </title>
<link rel="stylesheet" href="/css/mainpage.css">
<script src="/js/mainpage.js"></script>
</header>
<body>
<h1> This is a section post</h1>
<article>
    <!-- Load the title od the post. --> 
    <h1><?= $id_post->title; ?></h1>
    <div>
        <!-- Load the context od the post. --> 
        <?= $id_post->body; ?>
    </div>
</article>
<!-- A way to get back to main page intuitively-->
<a class="backarrow" href="/"><--</a>
</body>
