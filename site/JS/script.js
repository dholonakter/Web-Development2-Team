
//form vlidation
//signup validation
function validateForm() 
{
    var fullname = document.getElementById("FullName").value;
    var email = document.getElementById("Email").value;
    var password = document.getElementById("Password").value;
   var confirmpassword = document.getElementById("confirmpassword").value;

  if(fullname == "" &&  email == "" &&  password == "" && confirmpassword  == "")
  {
      
      document.getElementById("error").innerHTML="please input all required fields";
       return false;

  }
    
   if (fullname == ""  ) 
    {
        document.getElementById("error").innerHTML="Please enter your full name";

         return false;
    }
    
    if (email == "") 
    {
        document.getElementById("error").innerHTML="plase enter your valid email address";

        return false;
    }
    if (password == "") 
    {
       document.getElementById("error").innerHTML="plase enter your password";

        return false;
    
    }    if(confirmpassword  == "")
    {
        document.getElementById("error").innerHTML="please re-enter your password";
        return false;
        
    
    }
}

//loginvallidation

function validateLogin() 
 
 {
    var email = document.getElementById("Email").value;
    var password = document.getElementById("Password").value;


    if( email == "" &&  password == "")
    {
      
      document.getElementById("error").innerHTML="please input all required fields";
       return false;

     }
    
   if (email == ""  ) 
    {
        document.getElementById("error").innerHTML="Please enter your valid email address";

         return false;
    
    }
     
   if (password == ""  ) 
    {
        document.getElementById("error").innerHTML="Please enter your password ";

         return false;
    }

    
    
}


//slideshow implementation

var slideIndex = 0;
showSlides();

function showSlides() {
   "use strict"
    var i;
    var slides = document.getElementsByClassName("Slides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1500); 
}

    


