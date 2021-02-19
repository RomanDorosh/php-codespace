<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>
<div class="container">
<h3>Register an employee</h3>
<hr>
<?php require_once "menu.php";
?>
    <form action="confirmRegister.php" method="post">

        <label for="name">Name</label>
        <input type="name" name="name" required/>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" required/>
        <br>
        <label for="passwordUser">Password</label>
        <input type="password" name="passwordUser" required/>
        <br>
        <label for="confirmPassword">Repeat password</label>
        <input type="password" name="confirmPassword" required/>
        <br>
        <input type="submit" value="Registrarse">
    </form>
</div>
</form>
</body>
</html>