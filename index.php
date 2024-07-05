<?php
require_once 'config.php'
?>
<html lang="en">

<head>
    <title>Search Page</title></head>
<body>

<?php
echo $_SESSION["username"];
?>
<form class="searchform" action="search.php" method="post">
    <label for="search">Search for user:</label>
    <input id="search" type="text" name="usersearch" placeholder="Search...">
    <button>Search</button>
</form>


<h3>Create account</h3>
<form action="includes/formhandler.inc.php" method="post">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
    <label>
        <input type="password" name="pwd" placeholder="Password">
    </label>
    <label>
        <input type="text" name="email" placeholder="E-mail">
    </label>
    <button>Sign up</button>
</form>

<h3>Change account</h3>

<form action="includes/userupdate.inc.php" method="post">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
    <label>
        <input type="password" name="pwd" placeholder="Password">
    </label>
    <label>
        <input type="text" name="email" placeholder="E-mail">
    </label>
    <button>Update</button>
</form>

<h3>Delete account</h3>

<form action="includes/userdelete.inc.php" method="post">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
    <label>
        <input type="password" name="pwd" placeholder="Password">
    </label>
    <button>Delete</button>
</form>

<h3>Add a comment</h3>

<form action="includes/addcomment.inc.php" method="post">
    <label>
        <input type="text" name="username" placeholder="Username">
    </label>
    <label>
        <input type="text" name="comment_text" placeholder="Add your comment">
    </label>
    <label>
        <input type="number" name="users_id" placeholder="Foreign key, has to match table data">
    </label>
    <button>Add comment</button>
</form>

</body>
</html>