function Verifica(){
    senha1 = document.getElementById("pass").value;
    senha2 = document.getElementById("pass2").value;
    msg = document.getElementById("output");

    if(senha1!=senha2){
        document.getElementById("pass").style.borderColor="#f00";
        document.getElementById("pass2").style.borderColor="#f00";
        msg.innerHTML = "Senhas Incorretas: Digite Novamente!";
    } else{
        document.getElementById("pass").style.borderColor="#000";
        document.getElementById("pass2").style.borderColor="#000";
        msg.innerHTML = "Senhas Digitadas Corretamente!";
        }
    }