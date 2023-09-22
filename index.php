<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration form</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        
        <div class="card">
            <form name="myform" method="post" action="connect.php" onsubmit="return form();">
            <h1>Registration Form</h1>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Alphabets only" pattern="[A-Za-z]+">
            <br/>
            <br/>
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Enter your password">
            <br/>
            <br/>
            <label for="mail">E-mail</label>
            <input type="text" name="mail" placeholder="email@gmail.com" value="@gmail.com">
            <br/>
            <br/>
            <label for="number">Contact-number</label>
            <input type="text" name="number" placeholder="Enter upto 10 numbers" pattern="[0-9]+">
            <br/>
            <br/>
            <input class="design" type="submit" value="Register">
            </form>

            


        </div>
    <script src="./index.js"></script>
    </body>
</html>