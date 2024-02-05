<?php
$con= new mysqli ('localhost','root','','records');
if(isset($_POST['action']))
{
    if($_POST['action']=='action')
    {
    $sql1 = "select * from register_data where name='".$_POST['username']."' && password='".$_POST['user_pass']."'";
    $count =$con->query($sql1);
   // print_r($count->num_rows);
    if($count->num_rows>0)
    {
       echo '1';
    }
    else
    {
        echo '0';
    }
}
if($_POST['action'] == 'data')
{

}
}
else
{
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$section = $_POST['section'];
$dob = $_POST['dob'];
$phone = $_POST['phone'];
$password = '1233';
$hobbies = $_POST['hobbies'];
$gender = "male";
$sql="insert into register_data(name,email,hobbies,address,dob,section,mobile_number,password,gender) 
values('".$_POST['name']."','".$_POST['email']."','".$_POST['hobbies']."','".$_POST['address']."','".$_POST['dob']."','".$_POST['section']."','".$_POST['phone']."','".$_POST['user_pass']."','".$_POST['gender']."')";
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
 'email'=>$email,
 'address'=>$address,
 'section'=>$section,
 'dob'=>$dob,
 'phone'=>$phone,
 'hobbies'=>$hobbies,
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
}
?>