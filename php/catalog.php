<?php
require("session_config.php");

if ($_SESSION["autorisation"] != true) {
    header("Location:../index.php");
    exit();  #Quitte le script si l'utilisateur n'est pas connecté.
}

require("header.php");
hd("href = ../style.css");
?>


<body>

    <nav>
        <div class="logo">
            <img src="../image/view.png" alt="eye_logo">
            <p class="name_site">ShareTheVision</p>
        </div>


        <img class="user" src="../image/user.png" alt="user">

    </nav>

    <div class="menu">
        <div class="headermenu">

            <div class="usernamemenu">
                <img class="user" src="../image/user.png" alt="user">
                <p>
                    <?php
                    echo $_SESSION["username"];
                    ?>
                </p>
            </div>
            <img class="close" src="../image/close.png" alt="close">
        </div>

        <ul>
            <li><a href="#">Mon compte</a></li>
            <li><a href="#">Mes applications</a></li>
            <li><a href="#">Application mobile</a></li>
            <li><a href="deconnexion.php">Se déconnecter</a></li>
        </ul>
    </div>


    <script>
        // Script pour le clic sur le logo, rechargement de la page
        $(document).ready(function() {
            $(".logo img").click(function() {
                location.reload();
            });

            $(".user").click(function() {
                $(".menu").show();
                $(".menu").animate({
                    right: '0'
                }, 100);
            });

            $(".close").click(function() {
                $(".menu").animate({
                    right: '-21vw'
                }, 100);
                $(".menu").hide(100);
            });
        });
    </script>
</body>

</html>