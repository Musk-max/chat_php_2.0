//conformité entre mot de passe et confirmation de mdp
var mdp1=document.querySelector('.mdp1');
var mdp2=document.querySelector('.mdp2');
mdp2.onkeyup=function(){
    message_error=document.querySelector('.message_error');
    if(mdp1.value != mdp2.value){ 
        message_error.innerText="les mots de passes ne sont pas conformes";
}else{
    message_error.innerText="";
}
   
}