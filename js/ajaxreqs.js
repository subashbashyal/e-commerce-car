$(document).ready(function(){
    //ajax call form already exist
    $("#email").on("keypress blur", function () {
        var reg= /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;   
        var email = $("#email").val();
            $.ajax({
                url: "Cars/addcars.php",
                method: "POST",
                data: {
                    checkemail: "checkmail",
                    email: email,
                },
                success: function (data) {
                 console.log(data);
                   if(data != 0 && reg.test(email)){
                       $("#statusMsg2").html('<small style="color:red;">email</small>');
                   $("#signup").attr("disable", true);
                    } else if(data == 0){
                        $("#statusMsg2").html('<small style="color:green;">email go</small>');
                        $("#signup").attr("disable", false);
                    } else if(!reg.test(email)){
                        $("#statusMsg2").html('<small style="color:red;">valid email</small>');
                        $("#signup").attr("disable", false);
                    }
                    if(email==""){
                        $("#statusMsg2").html('<small style="color:red;">plse email</small>');
                    }
                },
            });
        });
});



function addPpl(){
    var regusr = /^[A-Za-z]+$/;
    var reg= /^[A-Z0-9._%+-]+@([A-Z0-9]+\.)+[A-Z]{2,4}$/i;
    var username =$("#username").val();
    var email =$("#email").val();
    var password =$("#password").val();
    var phone =$("#phone").val();
   //checking form fields
   if(username.trim()==""){
       $("#statusMsg1").html('<small style="color:red;">enter name</small>');
       $("#username").focus();
       return true;
   }
    else if(username.trim() != "" && !regusr.test(username)){
    $("#statusMsg1").html('<small style="color:red;">valid name</small>');
    $("#username").focus();
    return true;
   
}
   else if(email.trim()==""){
    $("#statusMsg2").html('<small style="color:red;">enter email</small>');
    $("#email").focus();
    return false;

   } else if(email.trim() != "" && !reg.test(email)){
    $("#statusMsg2").html('<small style="color:red;">valid email</small>');
    $("#email").focus();
    return false;
   
} else if(phone.trim()==""){
    $("#statusMsg3").html('<small style="color:red;">phone no</small>');
    $("#phone").focus();
    return false;
  
} else if(password.trim()==""){
    $("#statusMsg4").html('<small style="color:red;">password</small>');
    $("#password").focus();
    return false;
  
} else{
    $.ajax({
        url:"Cars/addcars.php",
        method:"POST",
        dataType: "json",
        data:{ 
            username: username,
            email: email,
            phone: phone,
            password: password, 
        },
          success:function(data){
            //console.log(data);
             
            if(data == "ok"){
                $('#successMsg').html("<span class='alert alert-success'>reg</span>");

            } else if(data == "failed"){
                $('#successMsg').html("<span class='alert alert-danger'>notreg</span>");

            }

          },

        
    });
   }
   
   

}


//empty all fields
//function clearRegFields(){
//$("#Regform").trim("reset");
//$("#statusMsg1 ").html("");
//$("#statusMsg2 ").html("");
//$("#statusMsg3 ").html("");
//$("#statusMsg4 ").html("");
//}

//Ajax login verification
function checklogin(){
    var LogEmail = $("#logemail").val();
    var LogPass = $("#logpass").val();
    $.ajax({
        url:"Cars/addcars.php",
        method: "POST",
        data:{
            checkLogemail:"checklogmail",
            LogEmail:LogEmail,
            LogPass:LogPass,
        },
        success:function(data){
           // console.log(data);
           if(data == 0){
               $("#statusLogMsg").html('<small class="alert alert-danger"> Invalid email id or pass</small>');
           } else if (data == 1){
            $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"> Invalid email id or pass</div>');
            setTimeout(()=>{
                window.location.href = "index.php";
            }, 1000);

           }
        },
    });
}