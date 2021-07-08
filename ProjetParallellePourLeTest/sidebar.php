<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <!-- boxicons liens CDN -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class='bx bxs-bank'></i>
            <span class="logo_name">Ivoire Finace</span>
        </div>
        <ul class="nav-links">
            <li>
                 <a href="#">
                     <i class='bx bx-grid-alt'></i>
                     <span class="link_name">Tableau de bord</span>
                 </a>
            </li>
            <li>
                <div class="icon-link">
                     <a href="#">
                   <i class='bx bxs-spreadsheet'></i>
                     <span class="link_name">Gestion</span>
                 </a>
                 <i class='bx bxs-chevron-down'></i>
                </div>
                <!-- sous-menu -->
                <ul class="sub-menu">
                    <li><a href="#">ouverture</a></li>
                    <li><a href="#">fermeture</a></li>
                    <li><a href="#">versement</a></li>
                    <li><a href="#">retrait</a></li>
                    <li><a href="#">consultation</a></li> 
                </ul>
            </li>
             <li>
                <div class="icon-link">
                     <a href="#">
                   <i class='bx bx-home-smile'></i>
                     <span class="link_name">Prêts</span>
                 </a>
                 <i class='bx bxs-chevron-down arrow'></i>
                </div>
            </li>
        </ul>
    </div>
</body>
</html>