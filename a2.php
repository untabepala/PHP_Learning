<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php
    echo "nayani";
    ?></title>
</head>
<body>
    <form method="GET">
        <input type="text" name="username">
        <input type="submit" name="submit">
    </form>
    <?php
    $username=$_GET['username'];
    echo $username;
    ?>
</body>
</html>