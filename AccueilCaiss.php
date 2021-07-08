<?php include('includes/headers.php') ?>

        <title>Accueil</title>
    </head>
    <body>
        <!-- side bar -->
        <?php include('includes/navbar.php') ?>

        <div class="Menu">

            <div class="Center">
                <H1 id="Text-Menu">Tableau de bord</H1>

                <div class = "Function">
                    <div class="Info">
                        <div class="Print-Info1" onclick="New()">
                            <p id="Mini-Header1">Information concernant votre compte</p>
                        </div>
                        <div class="Print-Info2" onclick="New()">
                            <p id="Mini-Header1">Relevé bancaire</p>
                        </div>
                        <div class="Print-Info3" onclick="New()">
                            <p id="Mini-Header1">Prendre un pret</p>
                        </div>
                        <div class="Print-Info4" onclick="openOperation()">
                            <p id="Mini-Header1">Retrait</p>
                        </div>
                    </div>

                </div>


                <div class = "Function">
                    <div class="Info">
                        <div class="Print-Info5" onclick="openOperation()">
                            <p id="Mini-Header">Guichet</p>
                        </div>
                        <div class="Print-Info6" onclick="openAide()">
                            <p id="Mini-Header">Tchat</p>
                            <div class="courbe">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path fill="none" d="M0 0h24v24H0z"/><path d="M22 17.002a6.002 6.002 0 0 1-4.713 5.86l-.638-1.914A4.003 4.003 0 0 0 19.465 19H17a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h2.938a8.001 8.001 0 0 0-15.876 0H7a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-5C2 6.477 6.477 2 12 2s10 4.477 10 10V17.002zM20 17v-4h-3v4h3zM4 13v4h3v-4H4z" fill="rgba(245,134,52,1)"/></svg>
                                    
                            </div>
                        </div>
                    </div>

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