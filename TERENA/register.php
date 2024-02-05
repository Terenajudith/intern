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
<input type="Password"  class="form-control" id="inputPassword4" placeholder="Password"> <br>
<i class="bi bi-eye-slash" id="togglePassword"></i>     
<br> <br>    
<label>    
</select>   <br>
<input type="submit"   value="Submit" <button class="btn btn-success" ></button>  
<input type="reset" value="Reset"<button class="btn btn-success"></button>
</div>
</div> 
</body>
</html>