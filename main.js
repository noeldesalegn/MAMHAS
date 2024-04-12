function validate_log(){
var ae=17;
var ae2=80;
var le = 2;
var x=document.log.email.value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if( document.log.email.value == "" ){
alert( "Please provide  E-mail it is empty!" );
document.log.email.focus() ;
return false;
}

var x=document.log.email.value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length || document.log.email.length<=100) {
alert("Not a valid e-mail address");
document.log.email.focus();
return false;
}



if( document.log.password.value == "" ){
alert( "Please provide password it is empty!" );
document.log.pass.focus() ;
return false;
}


if ( document.log.password.value.length<=5 ) {
  alert( "Please provide  password correcty!" );
  document.log.pass.focus() ;
  return false;
}



if (document.log.FName.value.length<=le) {
  alert( "Please provide FirstName correcty,NAME length must be above 5!" );
  document.log.FName.focus() ;
  return false;
}
if (document.log.LName.value.length<=2) {
  alert( "Please provide  LastName correcty,NAME length must be above 5!" );
  document.log.LName.focus() ;
  return false;
}


if (!/^[a-zA-Z]*$/g.test(document.log.FName.value)) {
        alert("Invalid characters");
        document.log.FName.focus();
      return false;
   }

    if (!/^[a-zA-Z]*$/g.test(document.log.LName.value)) {
            alert("Invalid characters");
            document.log.LName.focus();
            return false;
                  }




if ( document.log.password.value.length<=5 ) {
  alert( "Please provide password correcty,password length must be above 5!" );
  document.log.password.focus() ;
  return false;
}

if ( document.log.pass2.value.length<=5 ) {
  alert( "Please provide your re-password correcty,password length must be above 5!" );
  document.log.pass2.focus() ;
  return false;
}
if ( document.log.pass2.value !== document.log.password.value ) {
  alert( "your password don't match!" );
  document.log.pass2.focus() ;
  return false;
}


if (document.log.agee.value <=ae) {
  alert( "Minmum age allowed is 18!" );
  document.log.age.focus() ;
  return false;
}

if (document.log.age.value >=ae2) {
  alert( "max age allowed is 80!" );
  document.log.age.focus() ;
  return false;
}


if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length || document.sigin.email.length<=100) {
alert("Not a valid e-mail address");
document.log.email.focus();
return false;
}

}
