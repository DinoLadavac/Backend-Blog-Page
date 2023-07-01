<h1>Blog Page</h1>

<p>This is an app for blog web page.

This webpage can be visited as a registrated user or as a visitor.
<br><br>

<strong>Visitors are able to:</strong>
<li>see every post</li>
<li>open each post and read more information</li>
<li>list everypost created by selected author</li>
<li>search for a pattern</li>
<li>register or login</li>


<br><br>

<strong>Registrated users are able to:</strong>
<li>do everything as visitor</li>
<li>create a post</li>
<li>edit their post</li>
<li>delete their post</li>
<li>edit their account</li>
<li>delete their account</li>
<li>logout</li>
</p>
<br><br>
<strong>a Post consists:</strong>
<li>a title</li>
<li>a description</li>
<li>a body</li>
<li>a cover image(arbitrarily)</li>
<li>0-3 Tags(which are offered)</li>
<li>an id</li>
<li>and an user_id which is connected to the User model</li>
<br><br>
<strong>a User consists:</strong>
<li>a name</li>
<li>a username</li>
<li>an email</li>
<li>a password</li>

The authentification of a user is implemented using basic auth() methods.
