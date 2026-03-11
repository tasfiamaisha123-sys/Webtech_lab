var registrants = []

function collectData(){
    let name=document.getElementById("fullname").value;
     let email=document.getElementById("email").value;
      let company=document.getElementById("company").value;
       let attendance=document.querySelector('input[name="attendance"]:checked');

       var isvalid=true;
       if(name.length <6 || name.length>100){
        document.getElementById("nameError").innerHTML="Name must be between 6 to 100 character";
        isvalid=false;
       }else{
         document.getElementById("nameError").innerHTML="";
      
       }
        if(!email.includes("@")||email.indexOf(".")<email.indexOf("@")){
            document.getElementById("emailError").innerHTML="please Enter a valid Profesional email address.";
            isvalid=false;
        }else{  document.getElementById("emailError").innerHTML="";}
         if(!attendance){document.getElementById("attendanceError").innerHTML="please select your attendance Type.";
          isvalid=false;
         }
         else{document.getElementById("attendanceError").innerHTML="";}
          if(isvalid){
            registrants.push({
                name:  name,
                email: email,
                company: company,
                attendance: attendance.value
            });

        updateAnalytics();
        document.getElementById("fullname").value= "";
        document.getElementById("email").value= "";
        document.getElementById("company").value= "";
        document.querySelector('input[name="attendance"]:checked').checked= false;

        alert("Registration sucessful! Welcome,"+name+"!");
      }
        return false;
}
function toggleAnalytics(){
  let panel=document.getElementById("analyticsPanel");
  var btn=document.getElementById("analyticsBtn");
  if(panel.style.display==="none"){
updateAnalytics();
panel.style.display="block";
btn.innerHTML="Hide Event Analytics";
  }else{
panel.style.display="none";
btn.innerHTML="Show Event Analytics";
  }
}

function updateAnalytics(){
var total =registrants.length;
var virtual=0;
var inPerson=0;
for(let i=0;i<registrants.length;i++){
  if(registrants[i].attendance==="Virtual"){
    virtual++;
  }else{
    inPerson++;
  }
}
document.getElementById("totalCount").innerHTML=total;
document.getElementById("virtualCount").innerHTML=virtual;
document.getElementById("inPersonCount").innerHTML=inPerson;
}
       
