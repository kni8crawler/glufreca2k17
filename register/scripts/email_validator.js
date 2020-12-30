function checkemail()
{
 var email=document.getElementById( "email" ).value;
	
 if(email)
 {
  $.ajax({
  type: 'post',
  url: 'checkemail.php',
  data: {
   user_email:email,
  },
  success: function (response) {
   if(response=="OK")	
   {
   }
   else
   {
          alert(response);
    return false;	
   }
  }
  });
 }
 else
 {
  $( '#email_status' ).html("");
  return false;
 }
}
