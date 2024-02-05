<?php
$name = $_POST['name'];
$Age = $_POST['Age'];
$Country = $_POST['country'];
$salary = $_POST['salary'];
$Department = $_POST['Department'];
$phone = $_POST['phone'];
$password = '1233';
$Candidate ID = $_POST['Candidate ID'];
$Email = $_POST['Email'];

$con= new mysqli ('localhost','root','','recreate');
$sql="insert into register_data(name,age,country,salary,department,phone,password,candidate ID,Email) 
values('".$_POST['name']."','".$_POS['Age']."','".$_POST['country']."','".$_POST['salary']."','".$_POST['department']."','".$_POST['Phone']."','".$_POST['password']."','".$_POST['Candidate ID']."','".$_POS['Email']."')";
 if($con->query($sql) === true)
 {
     echo "Registered Sucessfully";
 }
 else{
     echo "error".$con->error;
 }

 /* $data =array
 (
 'name'=>$name,
 'Age'=>$Age,
 'Country'=>$Country,
 'Salary'=>$Salary,
 'Department'=>$Department,
 'phone'=>$phone,
 'password'=>$Pasword,
 'Candidate ID'=>$Candidate ID,
 'Email'=>$Email,
 )
 if($data)
 {
 $data_encode =json_decode($data);
 $file_path = 'login_data.json'; 
 file_put_contents($file_path,$data_encode);
 return response()->json(['success'=>true]);
 }
 else{
  return response()->json(['success'=>false]);
 } */
?>