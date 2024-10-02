<?php
include('database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP</title>
     <link rel="stylesheet" href="formCSS.css">
</head>
<body>
<div class="container"style="margin: 0 auto;">
     <form action=""method="POST">
     <div class="title">Registration Form</div>
    
     <div class="form">
          <div class="input_field">
               <label for="name1">First Name</label>
               <input type="text"id="name1"name="fname"required>
          </div>
        
          <div class="input_field">
               <label for="name3">Password</label>
               <input type="password"id="name3"name="password"required>
          </div>
  
          <div class="input_field">
            <label for="name6">Email</label>
            <input type="email"id="name6"name="email"required>
       </div>
         
          <div class="input_field">
               <input type="submit"value="register"class="btn"name="register">
          </div>
     </div>
</form>
</div>
</body>
</html>
<?php
if($_POST['register']){
     $fname = $_POST['fname'];
    
     $pwd = $_POST['password'];
    
     
     $email = $_POST['email'];
    

// if($fname != "" && $lname != "" && $pwd != "" && $cpwd != "" && $gender != "" && $email  != "" && $phone != "" && $address != "")
// {

$query =" INSERT INTO  t-1 VALUES('$fname','$pwd','$email')";
$data = mysqli_query($connection,$query);

if($data){
     echo "data insert in data base";
}else{
     echo "data not insert";
}
}
// else{
//  echo "<script>alert('Please fill the form');</script>";    
// }

// }
?>