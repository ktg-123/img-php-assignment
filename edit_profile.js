
/*document.getElementsByTagName("li").style.display="none";*/
function checkerror(){

    var mobile_no=document.getElementById("mobile_no").value;
    var username=document.getElementById("username").value;
    var email=document.getElementById("email_id").value;
    var pass1=document.getElementById("pass1").value;
    var pass2=document.getElementById("pass2").value;
    var phn=/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/
    var em=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
    var passtest=/^[A-Za-z0-9@_\.]{1,}$/
    var uid=/^[A-Za-z0-9@_\.]{1,}$/
    
        if(phn.test(mobile_no)){
            document.getElementById("error_mobile").style.visibility="hidden"
        }
        else{
            document.getElementById("error_mobile").style.visibility="visible";
            return false;
        }
        if(em.test(email)){
            document.getElementById("error_email").style.visibility="hidden"
        }
        else{
            document.getElementById("error_email").style.visibility="visible"
            return false;
        }
        if(pass1!=pass2){
            document.getElementById("error_pass").style.visibility="visible";
            return false;
        }
        else{
            document.getElementById("error_pass").style.visibility="hidden"
        }
        if(uid.test(pass1)){
            document.getElementById("error_blank").style.visibility="hidden";
        }
        else{
    
            document.getElementById("error_blank").style.visibility="visible";
            return false;
    
        }
        if(uid.test(username)){
            document.getElementById("error_username").style.visibility="hidden"
        }
        else{
            document.getElementById("error_username").style.visibility="visible";
            return false;
        }
    }
    
    