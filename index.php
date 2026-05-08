<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <link href="global.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                background-image: url(elements/welcome.jpeg);
                background-size: cover;
            }
        </style>
    </head>
    <body>
    <?php include 'sidebar.php' ?>
        <div class="content">
            <h1>Hello There!</h1>
            <p>This is the home page of the "about me" project.</p>
            <p>Please keep in mind that this was developed while I was learning HTML for the first time.</p>
        </div>
        <div></div>
        <div class="content">
            <h3>Favourite things</h3>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Pokemon</th>
                    <th>Film</th>
                    <th>Height</th>
                    <th>Burger</th>
                </tr>
                <tr>
                    <td>Jamie</td>
                    <td>Squirtle</td>
                    <td>Perfect Blue</td>
                    <td>180cm</td>
                    <td>Cheese</td>
                </tr>
            </table>
        </div>
    </body>
</html>
