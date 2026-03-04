var person = "hege";
var m =10;
//alert("using alert");
console.log("connected")
function collectData(){
    alert("login form submitted");
    const email = document.getElementById("email").ariaValueMax;
    const password = document.getElementById("password").ariaValueMax;
        console.log("collected dataa from the form");
        console.log(email);
        console.group(password);
        if(!email){
            document.getElementById("EmailError").innerHTML ="please enter your email";
        }else{
            document.getElementById("EmailError").innerHTML ="";
        }
        if(!password){
            document.getElementById("PasswordError").innerHTML ="please enter your email";
        }else{
            document.getElementById("passwordError").innerHTML ="";
        }
        return false;
        }
function displayDate(){
    document.getElementById("demo").innerHTML = Date();
}