<?php
    include_once 'header.php';
?>

     
    <div class="index-login-login">
        <h4>LOGIN</h4>
        <p>Don't have an account yet? Sign up here!</p>
        <form action="includes/login.inc.php" method="post">
            <input type="text" name="name" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Password">
            <br>
            <button type="submit" name="submit">LOGIN</button>
        </form>
    </div>


<?php
    include_once 'footer.php';
?>