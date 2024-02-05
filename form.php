<html>
<head>
    <link rel="stylesheet" href="bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css"/>
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.js"></script>
</head>

<body>
</div>
<div class="container">
<div class="modal-header bg-info text-white">
<h1><center>Create form </center></h1> 
<div class="margin_auto">

<label>First Name:</label>
<input type="text" id="firstname" class="form-control"/><br>
	<label> DOB:</label>
    <input type="date" class="form-control" id="DOB" name="DOB"min="2004-06-01" max="2104-06-01"><br>
    <label>
section:
 </label> 
<select class="form-control" id="section" class="form-control" > 
<option value="Course">Course</option>    
<option value="CSE"> CSE</option>    
<option value="EEE">EEE</option>    
<option value="ECE">ECE</option>  
</select>
<br>
<label>     
Gender :    
</label>
<div class="form-check form-check-inline" id="Gender" class="form-control">
<input class="form-check-input gender" type="checkbox" value = "Male" name="gender" > Male
<input class="form-check-input gender" type="checkbox" value="Female" name="gender" > Female
<input class="form-check-input gender" type="checkbox"value="others" name="gender" > Other
</div>    
<label>  
Hobbies:  
</label>    
<div class="form-check form-check-inline" id="hobbies" class="form-control"> 
<input class="form-check-input Hobbies" type="checkbox" name="hobbies" value="programming">Programming                                              
<input class="form-check-input hobbies" type="checkbox" name="hobbies" value="cricket"> cricket                                                   
<input class="form-check-input hobbies" type="checkbox" name="hobbies" value="Reading Novel"> Reading novel                                                               
</div>
<label>  
Phone :    
</label>      
<input type="number" id="phone" class="form-control" name="phone" size= "10"> <br> <br>   
<label>  
Address
</label>      

<br>    
<textarea cols="80" rows="5" id="address" class="form-control" >
</textarea>    
<br> <br>    
<label>
Email:  
</label>  
<input type="email" id="Email"  class="form-control" name="email" > <br>      
<br> <br>  
<label>  
Password:    
</label for="inputPassword4">
<input type="password"  class="form-control" id="inputPassword4" placeholder="Password"> <br>
<i class="bi bi-eye-slash" id="togglePassword"></i>     
<br>
<input type="submit"   value="Submit" <button class="btn btn-success submit"></button>  
<input type="reset" value="Reset"<button class="btn btn-success"></button>
</div>
</div> 

<script type="javascript" src="bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('.submit').click(function()
        {   
            console.log('123');     
    var firstname = document.getElementById('firstname').value;
//alert(firstname);

    var DOB = document.getElementById('DOB').value;
//alert(DOB);

    var section = document.getElementById('section').value;
//alert(section);

 var gender='';
    var Gender = document.querySelector('.gender:checked');
    if(Gender)
    {
       var gender = Gender.value; 
    }

/* alert(Gender); */
 var hobbies ='';
    var Hobbies = document.querySelector('.Hobbies:checked');
    if(Hobbies)
    {
        var hobbies = Hobbies.value;
    }
    
/* alert(Hobbies); */

    var phone = document.getElementById('phone').value;
/* alert(phone); */

    var address = document.getElementById('address').value;
 /* alert(address); */

     var Email = document.getElementById('Email').value;
/* alert(Email); */

     var user_pass = document.getElementById('inputPassword4').value;
/* alert(Password); */
if(firstname == "" )
{
    alert('First name is wrong ');
}
 if(section == '')
{
    alert('section is empty');
}
if(DOB == '')
{
    alert('DOB is empty');
}
if(gender == '' )
{
    alert('Gender is empty');
}
if(hobbies == '')
{
    alert('Hobby is not available ');
}
if(phone == '')
{
    alert('phone number is empty');
}
if(Email == '')
{
    alert('Email is empty');
}
if(address == '')
{
    alert('Address is empty');
}
if(user_pass == '')
{
    alert('Password is empty'); 
}   


    $.ajax({
    type: 'POST',
    url: 'login.php',
    data: {
        name: firstname,
        email: Email,
        address: address,
        phone: phone,
        hobbies: hobbies,
        dob: DOB,
        section: section,
        user_pass: user_pass,
        gender: gender,
    },
});
});
    });
</script>
</body>

</html>