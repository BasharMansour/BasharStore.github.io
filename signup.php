<!DOCTYPE html>
<?php
if(isset($_POST["signup"])){

$username=$_POST["username"];
$password=$_POST["password"];
$email=$_POST["email"];
$gender=$_POST["gender"];

require 'connect.php';


$select="select * from users where  email='$email'";
$query=  mysqli_query($con, $select);


if(mysqli_num_rows($query)>0){
    
    echo '<script>alert("email already exists plz sign in");window.location.assign("signin.php");</script>';
    
}
else{    
    $insert="insert into users(  `username`, `password`, `email`, `gender` ) "
            . "values('$username','$password','$email','$gender')";
    
    $query2=  mysqli_query($con, $insert);
    
    
}




}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sign up Bashar store</title>
    </head>
    <body>
        <form action="<?php  echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
            
            <table border="3" align="center">
            
                <tr>
                    <td colspan="2" align="center">
                        signup
                    </td>
                        
                </tr>
              <tr>
                    <td>user name</td>
                    <td><input type="text" name="username" required></td>
                </tr>
            
             <tr>
                    <td>email</td>
                    <td><input type="email" name="email" required></td>
                </tr>
            
             <tr>
                    <td>password</td>
                    <td><input type="password" name="password" required></td>
                </tr>
            
              <tr>
                    <td>gender</td>
                    <td><input type="radio" name="gender" value="male">male<br>
                    <input type="radio" name="gender" value="female">female
                    </td>
                </tr>
             
               
              <tr>


                    <td colspan="2" align="center">
                        <input type="submit" name="signup" value="signup">
                        <input type="reset">
                               
                    </td>
                        
                </tr>
            
            </table>
        </form>
        
        
        
    </body>
</html>
