<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" type="text/css" href="slidestyle.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">





</head>
<body>
<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="signup">

        <form action="includes/formhandler.php" method="get">
            <label for="chk" aria-hidden="true">Sign up</label>
            <input type="text" name="txt" placeholder="User name"required="">
            <input type="email" name="email" placeholder="Email"required="">
            <input type="password" name="pswrd" placeholder="Password"required="">
            <button href="#">Sign up</button>
        </form>
    </div>
    <div class="login">
    <form action="includes/formhandler.php" method="get">
            <label for="chk"aria-hidden="true">Login</label>
            <input type="email" name="email" placeholder="Email"required="">
            <input type="password" name="pswrd" placeholder="Password"required="">
            <button>Login</button>
        </form>
    </div>
</div>    
</body>
</html>