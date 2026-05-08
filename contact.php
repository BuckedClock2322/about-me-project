<!DOCTYPE html>
<html>
    <head>
        <title>Conatct Me (but don't)</title>
        <link href="global.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                background-image: url(elements/msn.png);
                background-size: cover;
            }
        </style>
    </head>
    <body>
    <?php include 'sidebar.php' ?>
        <div class="content">
            <h1>Contact Page</h1>
            <h3>Why would you?</h3>
        </div>
        <div></div>
        <div class="content">
            <div class="card">
                <form action="/action_page.php">
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname"><br>
                    <label for="lname">Message:</label><br>
                    <input type="text" id="message" name="message"><br>
                    <input type="submit" value="Send">
                </form> 
                <p>If you prefer direct contact: email me at <a href="mailto:email@domain.com">email@domain.com</a>  or phone me at  <a href="tel:+44 1">1</a> </p>
            </div>
        </div>
    </body>
</html>