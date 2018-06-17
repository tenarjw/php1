<?php
include('classes.inc.php');
?>

<html>
<head>
    <title>Login - demo</title>  
</head>
<body>
    <div class="container" id="content">
<?php
    $session = new session();
    if (! $session->is_logged_in()) {
        echo 'NIE ZALOGOWANY<br />';
        echo 'idź do <a href="index.php">Home</a>';
    } else {
?>
            
treść tylko dla zalogowanych
<?php
    }
?>
</body>

</html>