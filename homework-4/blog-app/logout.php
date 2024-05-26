<?php

    setcookie("auth[username]", "", time() - (60*3600));
    setcookie("auth[name]", "", time() - (60*3600));

    header('Location: login.php');

?>