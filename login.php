<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <title>User Login and Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
         <!-- <?php
        $con = mysqli_connect("localhost","root","","testcrud");
        if(isset($_POST['log'])){
            $username = mysqli_real_escape_string($con,$_POST['username']);
            $passwd = mysqli_real_escape_string($con,$_POST['password']);

            if($username!="" && $passwd!=""){
                $sql = "SELECT id FROM login WHERE username='$username' AND passwd='$passwd' ";
                $result = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

                $count = mysqli_num_rows($result);
                if($count==1){
                    header("location: fitness/index.html");
                }
            }
        }
        ?>  -->
    </head>
    <body>
        <div class="container">
            <div class="login-box">
            <div class="row">
                <div class="col-md-6 login-left">
                    <h2>Login Here</h2>
                    <form action="validation.php" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>                        
                    </form>
                </div>
                <div class="col-md-6 login-right">
                    <h2>Register Here</h2>
                    <form action="registration.php" method="post">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Register</button>                        
                    </form>
                </div>    
            </div>
            </div>
        </div>
    </body>
</html>

