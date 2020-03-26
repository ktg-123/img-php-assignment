
/*document.getElementsByTagName("li").style.display="none";*/

function checkerror(){
    var mobile_no=document.getElementById("mobile_no").value;
var email=document.getElementById("email").value;
var pass1=document.getElementById("pass1").value;
var pass2=document.getElementById("pass2").value;
var phn=/^(?:(?:\+|0{0,2})91(\s*[\ -]\s*)?|[0]?)?[789]\d{9}|(\d[ -]?){10}\d$/
var em=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/

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
    if(pass1!==pass2){
        document.getElementById("error_pass").style.visibility="visible";
        return false;
    }
    else{
        document.getElementById("error_pass").style.visibility="hidden"
    }

}
//document.getElementById("sub").onclick=checkerror;
/*
    function fn1(){
         var num=document.getElementById("phone").value
         phn=/^(0|\+91|91)?[6-9][0-9]{9}$/
         if(phn.test(num))
         {
            document.getElementById("p1").style.visibility="hidden"
            
         }
         else
         {
             document.getElementById("p1").style.visibility="visible"
             
         }
            }
            function fn3(){
         var email=document.getElementById("e1").value
         phn=/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/
         if(phn.test(email))
         {
            document.getElementById("p3").style.visibility="hidden"
            return true
         }
         else
         {
             document.getElementById("p3").style.visibility="visible"
         }
            }
            function fn2(){
                pp1=document.getElementById("pass1").value
                pp2=document.getElementById("pass2").value
                if(pp1!=pp2){
                    document.getElementById("p2").style.visibility="visible"
                }
                else{
                    return true
                }
            }
            function fn4(){
                age=document.getElementById("Ag").value
                if(age>150 || age<0){
                    document.getElementById("p4").style.visibility="visible"
                }
                else{
                    document.getElementById("p4").style.visibility="hidden"   
                    return true;
                }
                
                
            }
*/
