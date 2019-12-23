<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="signin">
            <h1>Sign In</h1>
            <div class="input">
                <input type="text" name="username" placeholder="Username" id="username">
                <div class="error_username"></div>
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="Password" id="password">
                <div class="error_password"> </div>

            </div>
            <div class="buttons">
                 <a href="Addneworder.html"><button type="login" id="login">LOGIN</button></a>
                 <span class="checkbox"><input type="checkbox">Remember</span>
                 <span class="forgot"><a href="#">Forgot password?</a></span>
                
            </div>
            <div class="network">
                <span class="or"><b>Or login with</b></span>
                <span class="icon">

                   <a href=""><i class="fa fa-facebook"></i></a> 
                   <a href=""><i class="fa fa-twitter"></i></a> 
                   <a href=""><i class="fa fa-google-plus"></i></a>
                  <a href=""><i class="fa fa-linkedin"></i></a>

                 </span>

            </div>
     </div>
     <div class="account">
        <a href="register.html">CREATE AN ACCOUNT</a>

    </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
        $(document).ready(function(){
          $("#login").click(function(){

              var username, password, length_username, lenght_password;// khai bao

              //Lay gia tri

              username= $('#username').val();
              password= $('#password').val();

              //Lay do dai chuoi
               length_username = username.length;
               length_password = password.length;

               if(username =='')
               {
                   $('.error_username').html('Not Empty');
                    window.alert("Not Empty");


               }
               else if(length_username > 20 && username!='')
               {
                 $('.error_username').html('Too Much');
               }
               else 
               {
                $('.error_username').hide();
               }

         
          });
        });
</script>
    
</body>
</html>