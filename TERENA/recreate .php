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
<h3><center>RECREATE FORM </center></h3> 
<div class="margin_auto">


<label> Name:</label>
<input type="text" id="name" class="form-control"/> <br>
	<label>AGE: </label>
    <input type="AGE:" class="form-control" id="AGE" name="AGE"min="01" max="18"><br>
    <label>
Country:
 </label> 
<select class="form-control" id="Country" class="form-control" > 
<option value="Country">Country</option>  
<option value="India">India</option>    
<option value="Malaysia">Malaysia</option>    
<option value="Canada">Canada</option>    
<option value="Korea">Korea</option>  
</select>
<br>
<label>     
Salary :    
</label>
<div class="form-check form-check-inline" id="Salary" class="form-control">
<input class="form-check-input gender" type="checkbox" value = "Below 10,000" name="Salary" > Below 10,000
<input class="form-check-input gender" type="checkbox" value="Below 50,000" name="Salary" > Below 50,000
<input class="form-check-input gender" type="checkbox"value="Other" name="Salary" > Other
</div>    
<label>  
Department:  
</label>    
<div class="form-check form-check-inline" id="Department" class="form-control"> 
<input class="form-check-input Hobbies" type="checkbox" name="Department" value="Programming">Programming                                              
<input class="form-check-input hobbies" type="checkbox" name="Department" value="Designing"> Designing                                                  
<input class="form-check-input hobbies" type="checkbox" name="Department" value="Coding"> Coding                                                              
</div>
<label>  
Phone :    
</label>      
<input type="number" id="phone" class="form-control" name="phone" size= "10"> <br> <br>   
<label>  
Candidate ID:
</label>      

<br>    
<textarea cols="80" rows="5" id="Candidate ID" class="form-control" >
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
<input type="submit"   value="Submit" <button class="btn btn-Danger" ></button>  
<input type="reset" value="Reset"<button class="btn btn-Danger"></button>
</div>
</div>
<script type="javascript" src="bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
        $('.submit').click(function()
        {        
    var Name = document.getElementById('Name').value;
//alert(Name);

var AGE = document.getElementById('AGE').value;
//alert(AGE);

    var Country = document.getElementById('Country').value;
//alert(Country);

var Salary = document.getElementById('Salary').value;
//alert(Salary);

    var Department = document.getElementById('Department').value;
//alert(Department);

var Phone = document.getElementById('Phone').value;
//alert(Phone);

    var Candidate ID = document.getElementById('Candidate ID').value;
//alert(Candidate ID);

var Email = document.getElementById('Email').value;
//alert(Email);

    var Password = document.getElementById('Password').value;
//alert(Password);




</body>
</html>