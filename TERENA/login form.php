<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="login form.css"/>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
</head>

<body>
</div>
<div class="container">
<div class="modal-header bg-info text-black">
<h1><center>login form </center></h1> 
<div class="margin_auto">
<label>User Name</label>

<input type="text" name="User name" id="Username" placeholder="User Name"><br>

<label>Password</label>

<input type="password" name="password" id="inputPassword4" placeholder="Password"><br>

<button   id="login"  class="btn btn-success submit Login">Login</button>
<a href="form.php">Register</a>

    </div>  

    <script type="javascript" src="bootstrap.min.js"></script>
<script type="text/javascript">
    
    $(document).ready(function()
    {
        $('.Login').click(function()
        {      
      
            var Username = document.getElementById('Username').value;
 //alert ("User name");  .

            var user_passwor = document.getElementById('inputPassword4').value;
 /*alert(Password);*/
        
            if(Username == "")
            {
                alert('user name  is wrong ');
            }
            if(user_passwor == "" )
            {
                alert('Password is wrong ');
            }
            
           $.ajax(
            {
                method:'POST',
                url:'login.php',
                data:{
                    username:Username,
                    user_pass:user_passwor,
                    action:'action',
                },
                success:function(data)
                {
                    console.log(data);
                    if(data == '1')
                    {
                        window.location='form.php';
                    }
                    else{
                        alert('Invalid Credentials');
                    }
                }
            });
});
    });
  </script>          
</body>
</html>
