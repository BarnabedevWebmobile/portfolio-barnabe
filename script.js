function send(){
    var msgerreur=document.getElementById('incorrect')
    var nom=document.getElementById('nom')
    var subname=document.getElementById('subname')
    var email=document.getElementById('exampleInputEmail1')
    var Password=document.getElementById('Password')
    var Passwordverify=document.getElementById('Passwordverify')
    var message=document.getElementById('message')
    console.log(nom.value, subname.value, email.value, Password.value, Passwordverify.value)

    if (nom.value == "" || subname.value =="" || email.value == "" || Password.value == "" || Passwordverify.value == "" || message.value == ""){
        msgerreur.classList.add("alert-danger")
        document.getElementById('incorrect').innerHTML=("champs non rempli")
        msgerreur.style.display="block"
    }else{
        if (Password.value.length < 8){
            msgerreur.classList.add("alert-danger")
            document.getElementById('incorrect').innerHTML=("mot de passe trop court")
            msgerreur.style.display="block"
        }else{
            if(Password.value !== Passwordverify.value){
                msgerreur.classList.add("alert-danger")
                document.getElementById('incorrect').innerHTML=("mot de passe différent")
                msgerreur.style.display="block"
            }else{
                msgerreur.classList.remove("alert-danger")
                msgerreur.classList.add("alert-success")
                document.getElementById('incorrect').innerHTML=("message envoyer")
                msgerreur.style.display="block"
            }
        }
    }
}