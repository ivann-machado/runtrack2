<html>
<body>

<?php
if (isset($_POST['username']) || isset($_POST['password'])) {
    if (strtolower($_POST['username']) === 'john' && strtolower($_POST['password']) === 'rambo') {
        echo 'C\'est pas ma guerre';
    }
    else  {
        echo 'Votre pire cauchemar';
    }
}

?>
<form action="./" method="post">
    <fieldset>
        <legend>Formulaire</legend>
            <p>
                <label>Username :</label>
                <input name="username" type="text"/>
                <label>Password :</label>
                <input name="password" type="password"/>
                <input type="submit" name="submit" value="Submit" />
            </p>
    </fieldset>
</form>
</body>
</html>