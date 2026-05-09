<!DOCTYPE html>
<html>
<head>
    <title>Music Blog</title>

    <link href="global.css" rel="stylesheet" type="text/css"/>

    <style>
        body{
            background-image: url(elements/record.jpeg);
            background-size: cover;
            background-attachment: fixed;
        }
    </style>
</head>

<body>

<?php include 'sidebar.php' ?>

<div class="content">

    <h1 class="title">The Music Blog</h1>

    <h3 class="subtitle">
        This is where my rambling about music happens.
    </h3>

    <h4 class="subtitle">
        Sister site to The Movie Blog (Link in sidebar)
    </h4>

    <div class="card-container">

        <!-- CARD 1 -->
        <div class="card">

            <h2>Pink Floyd - The Dark Side Of The Moon</h2>

            <h5>Blog written: 23-06-25 10:25</h5>

            <img class="album-cover"
                 src="elements/Dark_Side_of_the_Moon.png">

            <img class="extra-image"
                 src="elements/floating.gif">

            <p>
                Good soup.
            </p>

            <iframe
                src="https://www.youtube.com/embed/k9ynZnEBtvw?si=u6uEWf5l6yg3a-h9"
                title="YouTube video player"
                frameborder="0"
                allowfullscreen>
            </iframe>

        </div>

        <!-- CARD 2 -->
        <div class="card">

            <h2>Little Simz - Lotus</h2>

            <h5>Blog Written: 23-06-25 13:51</h5>

            <img class="album-cover"
                 src="elements/Little_Simz_-_Lotus.png">

            <p>
                Also good soup.
            </p>

            <h5>Blog Update: 08-05-26 20:16</h5>



            <iframe
                src="https://www.youtube.com/embed/Z2BplWSCZpY?si=BqFYAlAK77dyqVV4"
                title="YouTube video player"
                frameborder="0"
                allowfullscreen>
            </iframe>

        </div>

        <!-- CARD 3 -->
        <div class="card">

            <h2>The Decemberists - On The Bus Mall</h2>

            <h5>Blog Written: 08-05-2026 20:09</h5>

            <img class="album-cover"
                 src="https://t2.genius.com/unsafe/430x430/https%3A%2F%2Fimages.genius.com%2F9e8dc0fcfc12598296591559cf937e39.400x400x1.jpg">

            <p>
                I just love the bittersweetness with this one.
                A story about 2 gay prostitutes in love with each other.
                It needs to be listened to and felt with all the gravity
                of the situation that sex workers face daily. Also, I just love The Decemberists. Indie darlings forever.
            </p>

            <iframe
                src="https://www.youtube.com/embed/YbKN7OrqTxQ?si=eqJhdngeOAbZ2zyt"
                title="YouTube video player"
                frameborder="0"
                allowfullscreen>
            </iframe>

        </div>

    </div>

</div>

</body>
</html>