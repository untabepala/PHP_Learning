<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <form method="get">
        <input type="text" name="userchannel">
        <button type="submit">Submit</button>
    </form>
  <?php
  $myname=$_GET['userchannel'];
  echo $myname." is an awesome";

  ?> 
</body>
</html>