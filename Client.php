<?php include('includes/headers.php') ?>

        <title>Client</title>
    </head>
    <body>
        <!-- side bar -->
        <?php include('includes/navbar.php') ?>

            <div class="Center">
                <H1 id="Text-Menu">Espace Client</H1>

               

                <div class = "Card" onclick="OpenModal3()">
                    <div class="Info">
                        <p id="Mini-Header">Clients</p>
                    </div>

                </div>

                <div class = "Card" onclick="OpenModal3()">
                    <div class="Info">
                        <p id="Mini-Header">Relances impayés</p>
                    </div>

                </div>

                <div class = "Card" onclick="OpenModal3()">
                    <div class="Info">
                        <p id="Mini-Header">Emprunteurs</p>
                    </div>

                </div>

            </>

        </div>


        

        <footer class="footer">

        </footer>

        <div class="background-modal-login">

        </div>




        <!--
            Modal pour afficher les clients et les recherches faites
        -->

        <div class="modal-Clients">

            <div class="close-modal" onclick="CloseModal2()">
                <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="20.3164" y="64.157" width="62" height="4.53658" rx="2.26829" transform="rotate(-45 20.3164 64.157)" fill="#A1A1A1"/>
                    <rect x="64.1572" y="67.3648" width="62" height="4.53658" rx="2.26829" transform="rotate(-135 64.1572 67.3648)" fill="#A1A1A1"/>
                </svg>
                    
            </div>

            <h1 class="label-ouv">
                Clients
            </h1>

            <div class="Center">

                <!--
                    Recherche de clients. les clients vont s'afficher dans un modal 
                    (il est en bas)
                -->

                <div class="search">
                    <img id="search-logo" src="Assets/SVG/search.svg" >
                    <form form method="POST" action="Recherche.php" role="search">
                        <input type="search" id="search" name="search"
                        placeholder="  Rechercher un client..."
                        aria-label="Search through site content">
                    </form>
                    
                </div>

                <div class = "Card">
                    <div class="Info">
                        <p id="Mini-Header">Ruphin</p>
                    </div>

                </div>  

            </div>

            
        </div>

<?php include('includes/footer.php') ?>