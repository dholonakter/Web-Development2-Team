
function validateForm() {
    var fullname = document.forms["myForm"]["FullName"].value;
    var email = document.forms["myForm"]["Email"].value;
    var password = document.forms["myForm"]["Password"].value;
   var confirmpassword = document.forms["myForm"]["confirmpassword"].value;



    if (fullname == "") 
    {
        alert("fullname must be filled out");
        return false;
    }
    
    if (email == "") 
    {
        alert("email must be filled out");
        return false;
    }
    if (password == "") 
    {
        alert("password must be filled out");
        return false;
    }
    if(confirmpassword  == "")
    {
       alert("confirm  must be filled out");
        return false;
    
    }
    
    
    
    
}
    