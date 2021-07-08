<?php include('includes/headers.php') ?>

        <title>Accueil</title>

    </head>
    <body>
        <header class="accueil-header">

            <div class="logo">

            </div>

            <div class="btn-home" onclick="openHome()" style="border-color: #6DBE85;">
                <div id="symb">
                    <img src="Assets/SVG_Blanc/home-line.svg" alt="">
                </div>
                <a class="pos-police" id="police-btn-touch">Home</a>
            </div>


        </header>

        <div class="Menu">
            <div class="Center">
                <H1 id="Text-Menu">Tableau de bord</H1>
            </div>
        </div>

        <div class="background-modal-login" style = "display: flex;" >

        </div>

        <div class="modal-login">

            <h1 class="label-login">
                Connexion
            </h1>

            <form form method="POST" action=".php" role="search">
                <input type="email" id="text-field-mail" name="mail" placeholder="Mail" required>
                <input type="password" id="text-field-password" name="Naiss" placeholder="Code pin" required>
                <button class="submit" id="label-button">
                    Se Connecter
                </button>
            </form>

        </div>
        
<?php include('includes/footer.php') ?>
