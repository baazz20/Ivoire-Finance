<?php 
include('includes/headers.php'); ?>
        <link rel="stylesheet" href="style/login.css">
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

            <!-- formulaire de connexion -->
            

         <form action="controllers/login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" placeholder="Nom d'utilisateur"><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password" placeholder="mot de passe"><br>

     	<button type="submit">Login</button>
     </form>
     </form>
            <!-- fin formulaire de connexion -->

        </div>
        
<?php include('includes/footer.php') ?>
