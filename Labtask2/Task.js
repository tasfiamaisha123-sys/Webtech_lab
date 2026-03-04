function collectData()
{
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value ;
    console.log(email);
    console.log(password);
    if(!email){
        document.getElementById("EmailError").innerHTML="Please enter your Password";
   }
        else{
        document.getElementById("EmailError").innerHTML="";
        
    }
    
    if(!password){
        document.getElementById("PasswordError").innerHTML="Please enter your Password";}
        else{
        document.getElementById("PasswordError").innerHTML="";
        
    }
return false;
}

//serial 39