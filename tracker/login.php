<?php
if (isset($_COOKIE["OAuth"]))
  {
header('Location: Time-tracker.php');
exit; 
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>


<link rel="stylesheet" href="http://localhost/tracker/css/pure-menu.css">  
<link rel="stylesheet" href="http://localhost/tracker/css/side-menu.css">
 
</head>
<body>



<div class="layout">



        <div class="contents">
    
<form action="Time-tracker.php" method="post" class="pure-form pure-form-aligned">
<br/><br/><table align="center">
<tr>
<td><input type="text" name="username" placeholder="Username" required autofocus/></td>
</tr>

<tr>
<td><input type="password" name="password" placeholder="Password" required/></td>
</tr>


<tr><td><br/><input type="submit" value="Login" name="Submit" class="pure-button pure-button-primary"/></td></tr>
</table>
</form>
            
            
       </div>     
    </div>

</body>
</html>
