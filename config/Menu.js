var ivoirefinance = false;
var clientOnly = true;
var CompteIsOpen = false;
var OperationIsOpen = false;
var isConnected = false;

var loadPictureOuv = function(event) {
    var image = document.getElementById('inputpictureOuv');
    file = event.target.files;
    URl = URL.createObjectURL(file[0]);
    image.src = URl;
    pic = true;
};

var loadSignOuv = function(event) {
    var image = document.getElementById('inputSignatureOuv');
    file = event.target.files;
    URl = URL.createObjectURL(file[0]);
    image.src = URl;
    pic = true;
};

var loadPicture = function(event) {
    var image = document.getElementById('inputpicture');
    file = event.target.files;
    URl = URL.createObjectURL(file[0]);
    image.src = URl;
    pic = true;
};

var loadPicture1 = function(event) {
    var image = document.getElementById('inputSignature');
    file = event.target.files;
    URl = URL.createObjectURL(file[0]);
    image.src = URl;
    pic = true;
};

function openCompte() {
    CompteIsOpen = true;
    if (ivoirefinance == true){
        document.querySelector('.background-modal-login').style.display ='flex';
        document.querySelector('.modal-login1').style.display ='block';
    }else{
        window.location.href = 'Compte.php';
    }
}

function openHome() {
    if (ivoirefinance == true){
        window.location.href = 'AccueilCaisse.php';
    }else {
        window.location.href = 'AccueilClient.php';
    }
}

function openClient() {
    window.location.href = 'Client.php';
}

function openOperation() {
    OperationIsOpen = true;
    if (ivoirefinance == true){
        document.querySelector('.background-modal-login').style.display ='flex';
        document.querySelector('.modal-login1').style.display ='flex';
    }else{
        window.location.href = 'Operation.php';
    }
}

function openAide() {
    window.location.href = 'Aide.php';
}

function OpenModalProfil(){
    document.querySelector('.Account-Menu-Profil').style.display ='flex';
    document.querySelector('.Account-Menu-Coordonnee').style.display ='none';
    document.querySelector('.Account-Menu-Securite').style.display ='none';
    document.querySelector('.Account-Menu-Paiement').style.display ='none';
    document.querySelector('.Account-Profil').style.backgroundColor = "#6DBE85";
    document.querySelector('.Account-Coordonnees').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Securite').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Paiement').style.backgroundColor = "#FFFFFF";
}

function OpenModalCoor(){
    document.querySelector('.Account-Menu-Profil').style.display ='none';
    document.querySelector('.Account-Menu-Coordonnee').style.display ='flex';
    document.querySelector('.Account-Menu-Securite').style.display ='none';
    document.querySelector('.Account-Menu-Paiement').style.display ='none';
    document.querySelector('.Account-Profil').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Coordonnees').style.backgroundColor = "#6DBE85";
    document.querySelector('.Account-Securite').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Paiement').style.backgroundColor = "#FFFFFF";
}

function OpenModalSecur(){
    document.querySelector('.Account-Menu-Profil').style.display ='none';
    document.querySelector('.Account-Menu-Coordonnee').style.display ='none';
    document.querySelector('.Account-Menu-Securite').style.display ='flex';
    document.querySelector('.Account-Menu-Paiement').style.display ='none';
    document.querySelector('.Account-Profil').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Coordonnees').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Securite').style.backgroundColor = "#6DBE85";
    document.querySelector('.Account-Paiement').style.backgroundColor = "#FFFFFF";
}

function OpenModalPaie(){
    document.querySelector('.Account-Menu-Profil').style.display ='none';
    document.querySelector('.Account-Menu-Coordonnee').style.display ='none';
    document.querySelector('.Account-Menu-Securite').style.display ='none';
    document.querySelector('.Account-Menu-Paiement').style.display ='flex';
    document.querySelector('.Account-Profil').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Coordonnees').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Securite').style.backgroundColor = "#FFFFFF";
    document.querySelector('.Account-Paiement').style.backgroundColor = "#6DBE85";
}

function CloseModal(){

    if (document.getElementById("text-field-mail").value == "ivoirefinance@ivoirefinance.ci"){
        document.querySelector('.background-modal-login').style.display ='none';
        document.querySelector('.modal-login').style.display ='none';
        document.querySelector('.modal-login1').style.display ='none';
        document.querySelector('.accueil-notif').style.display ='none';
        document.getElementById("text-field-mail").value = " ";
        ivoirefinance = true;
        clientOnly = false;
        isConnected = true;
    }else{
        isConnected = true;
        document.querySelector('.modal-login1').style.display ='none';
        document.querySelector('.background-modal-login').style.display ='none';

        if (clientOnly == true){
            document.querySelector('.btn-compte').style.display ='none';
            document.querySelector('.btn-client').style.display ='none';
            document.querySelector('.btn-operation').style.display ='none';
            document.querySelector('.btn-setting').style.display ='none';
            document.querySelector('.btn-aide').style.display ='none';

            document.getElementById("Card1").style.display = 'block';
            document.getElementById("Card2").style.display = 'block';
            document.getElementById("Card3").style.display = 'block';
            document.getElementById("Card4").style.display = 'block';
            document.querySelector('.Card2').style.display = 'block';
            document.querySelector('.modal-login').style.display ='none';
        }

        if (CompteIsOpen == true){
            ivoirefinance = true;
            window.location.href = 'Compte.html';
        }

        if (OperationIsOpen == true){
            ivoirefinance = true;
            window.location.href = 'Operation.html';
        }


    }
};

function OpenModal1(){
    document.querySelector('.background-modal-login').style.display ='flex';
    document.querySelector('.modal-ouvertureClient').style.display ='flex';
};

function OpenModal2(){
    document.querySelector('.background-modal-login').style.display ='flex';
    document.querySelector('.modal-InfoClient').style.display ='flex';
};

function OpenModal3(){
    document.querySelector('.background-modal-login').style.display ='flex';
    document.querySelector('.modal-Clients').style.display ='flex';
};

function OpenModal4(){
    document.querySelector('.background-modal-login').style.display ='flex';
    document.querySelector('.modal-operation').style.display ='flex';
};

function CloseModal1(){
    document.querySelector('.background-modal-login').style.display ='none';
    document.querySelector('.modal-operation').style.display ='none';
    document.querySelector('.modal-ouvertureClient').style.display ='none';
    document.querySelector('.modal-InfoClient').style.display ='none';
};

function CloseModal2(){
    document.querySelector('.background-modal-login').style.display ='none';
    document.querySelector('.modal-Clients').style.display ='none';
};

function New(){
    alert("Attendez la nouvelle mise a jour");
}