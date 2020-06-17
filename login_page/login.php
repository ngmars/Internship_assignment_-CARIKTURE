
<?php
 $message = '';  
 $error = ''; 
     if(isset($_POST["submit"]))  
     {
          if(empty($_POST["Username"]))  
          {  
               $error = "<label class='text-danger'>Enter UserName</label>";  
          }  
          else if(empty($_POST["Password"]))  
          {  
               $error = "<label class='text-danger'>Enter Password</label>";  
          }  
          else{
          if(file_exists('login_details.json')){
               $current_data = file_get_contents('login_details.json');  
                $array_data = json_decode($current_data, true);
               
                $extra = array(  
                    'Username' =>$_POST['Username'],  
                    'Password' =>$_POST["Password"],  
                    
               ); 
               if($extra["Username"]==$array_data[0]["Username"]){
                    if($extra["Password"]==$array_data[0]["Password"]){
                         header("Location:home.php");
                    }
                    else{
                         $message="<label class='text-danger'>Wrong Password</p>";
                    } 
     
               }
               else{
                    $message="<label class='text-danger'>Wrong Username</p>";
               } 

          }
     }
     }
?>

<html>  
	 <head>  
            <title>Advanced Security</title> 
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <link rel="stylesheet" href="login.css">
 
      </head>
      <header class="main-header">
    <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="dummy-header">
                          
                        </div>
                        
                        <!-- Header Right -->
                        <div align="right" class="header-right">
                    
                    
                            
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
		  <br />  
		  <div class="container" style="width:500px;">  
               <h3 align="center">Advanced Security</h3><br />  
               <div class='login-box'>
                    <label id="login-word">LOGIN</label>  
                    <br/>
                    <br/>
               <form method="post">  
					<?php   
					if(isset($error))  
					{  
						 echo $error;  
					}  
					?>               
		            <br />  
					<label id="username-label">Username</label>  
					<input id= "ip-bar" type="text" name="Username" class="form-control" /><br />  
					<label id="username-label">Password</label>  
                         <input id= "ip-bar" type="password" name="Password" class="form-control" /><br /> 
                         <label id="fgt-pwd">Forgot Password?</label>
                         <br/>  
                         <input type="submit" id="submit" name="submit" value="Login" class="btn btn-info" /><br />
                         <label id="con-wt">or connect with</label>   <br/>  
                         <meta name="viewport" content="width=device-width, initial-scale=1">
                         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                         <a href="#" class="fa fa-facebook"></a>
                         <a href="#" class="fa fa-twitter"></a>
                         <a href="#" class="fa fa-google"></a>
                         <?php  
					if(isset($message))  
					{  
						 echo $message;  
					}  
                    ?> 
                    
               </form>
                    </div>  
               
             
		  </div>  
		  <br/>  
	 </body>  
</html> 
 

