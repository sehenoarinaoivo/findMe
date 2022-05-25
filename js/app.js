function verifyMdp(){
    var mpd1=document.getElementById("mdp1").value;
    var mdp2=document.getElementById('mdp2').value;

    var error="Rectifier votre mot de passe";

    if(mdp1!=mdp2) {
        document.getElementById('affiche-error').innerHTML=error;
    }
}