<?php
?>
<html>
<head>

</head>

<body>

<form class="searchform" action="search.php" method="post">
    <label for="search">Search for user:</label>
    <input id="search" type="text" name="usersearch" placeholder="Search...">
    <button>Search</button>
</form>


<h3>Create account</h3>
<form action="includes/formhandler.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-mail">
    <button>Sign up</button>
</form>

<h3>Change account</h3>

<form action="includes/userupdate.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="text" name="email" placeholder="E-mail">
    <button>Update</button>
</form>

<h3>Delete account</h3>

<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
</form>
</body>
</html>