<?php include('includes/headers.php') ?>

        <title>Accueil</title>
    </head>
    <body>
        
         <!-- side bar -->
        <?php include('includes/navbar.php') ?>





            </div>

            <div class="Center">
                <H1 id="Text-Menu">Aide</H1>
                <div class="search">
                    <img id="search-logo" src="Assets/SVG/search.svg" >
                    <form form method="POST" action="Recherche.php" role="search">
                        <input type="search" id="search" name="search"
                        placeholder="  Rechercher..."
                        aria-label="Search through site content">
                    </form>
                    
                </div>

                

            </div>

        </div>
        

        <div class="background-modal-login">

        </div>

        <div class="modal-login1">

            <h1 class="label-login">
                Connexion Client
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