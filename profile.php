<?php
if(isset($_POST["submit"]))  
 {  
     
           if(file_exists('user_details.json'))  
           {  
                $current_data = file_get_contents('user_details.json');  
                $extra = array(  
                     'fname' => $_POST['fname'], 
                     'lname' => $_POST['lname'], 
                     'address' => $_POST['address'], 
                     'phone' => $_POST['phone'], 
                     
                    );  
                //print_r($extra);
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                

                if(file_put_contents('user_details.json', $final_data))  
                {  
                     $message = "<label>Details Updated Succesfully.</p></br>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 
?>

<html>
    <head> <!-- CSS here -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_home.css">
    <link rel="stylesheet" href="profile.css">

</head>
    <header class="main-header">
    <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="home.php"><h1 text=wrap>Advanced Security</h1></a>
                        </div>
                        
                        <!-- Header Right -->
                        <div align="right" class="header-right">
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                        <div class="dropdown"> 
                                <button class="dropbtn">Welcome, Admin<i class="fa fa-caret-down" id="down-arrow"></i></button></a>
                                    <div class="dropdown-content">
                                            <a href="profile.php"><i id="home-tab-icon" class="fa fa-user" style="font-size:18px"></i>My Profile</a>
                                            <a href="login.php"><i id="log-tab-icon" class="fa fa-sign-out" style="font-size:18px"></i>Logout</a>
                                            
                                        </div>
                                        </div>
                                    
                            
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <body>
    <div class="sidenav">
    <a href="home.php"><i id="home-icon"class="fa fa-home" style="font-size:24px"></i>Home</a>
    <a href="profile.php" id="profile-tab"><i id="home-icon" class="fa fa-user" style="font-size:24px"></i>My Profile</a>
    <a href="#"><i id="user-icon"class="fa fa-users" style="font-size:24px"></i>User</a>
    <a href="#"><i id="user_r-icon" class="fa fa-user-secret" style="font-size:24px"></i>User Roles</a>


   
</div>

<div class= "container" id="container-profile">
<form method="post" class="form-prof">
    <div class= "profile-form">
                    <div class="info-title"> <a2>Your Details</a2> </div><br/>
                    <div class="success_message">
                    <?php  
					if(isset($message))  
					{  
                        echo("<div>");
                         echo ("<a>$message</a>"); 
                         echo("</div") ;
                         echo("<br/>");
                       
					}  
                    ?> 
                    <br/>
                    </div>
                    <label>First Name</label>  
                    <input type="text" name="fname" class="form-control" value="<?php
                         $current_data = file_get_contents('user_details.json');  
                         $array_data = json_decode($current_data, true); 
                        echo($array_data[0]['fname'])
                    ?>"/>
                    <br />  
					<label>Last Name</label>  
					<input type="text" name="lname" class="form-control"value="<?php
                         $current_data = file_get_contents('user_details.json');  
                         $array_data = json_decode($current_data, true); 
                        echo($array_data[0]['lname'])
                    ?>" /><br />  
                    <label>Address</label>  
                    <input type="text" name="address" class="form-control" value="<?php
                         $current_data = file_get_contents('user_details.json');  
                         $array_data = json_decode($current_data, true); 
                        echo($array_data[0]['address'])
                    ?>"/><br />
                    <label>Phone</label>  
                    <input type="text" name="phone" class="form-control" value="<?php
                         $current_data = file_get_contents('user_details.json');  
                         $array_data = json_decode($current_data, true); 
                        echo($array_data[0]['phone'])
                    ?>"/><br />  
                    <input id="update" type="submit" name="submit" value="Update" class="btn btn-info" /><br />
                   
</div>
</form>
</div>    
<div class="main-body-profile">
    
</div>
</body>
</html>