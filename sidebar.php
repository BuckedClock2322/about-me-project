<div class="mobile-topbar">

    <button class="menu-button" onclick="toggleMenu()">
        ☰
    </button>

    <h2 class="mobile-title">
        Jtrew
    </h2>

</div>

<div class="sidenav" id="mobileMenu">

    <a href="index.php">Home Page</a>
    <a href="music.php">The Music Blog</a>
    <a href="music_files.php">Music Listening</a>
    <a href="cd-collection.php">CD Collection</a>
    <a href="movies.php">The Movie Blog</a>
    <a href="pets.php">Pets (I wish I had)</a>
    <a href="me.php">About Me</a>
    <a href="contact.php">Contact Page</a>

</div>

<script>

    function toggleMenu(){

        const menu = document.getElementById("mobileMenu");

        menu.classList.toggle("show-menu");
    }

</script>