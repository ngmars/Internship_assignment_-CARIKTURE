<?php
if(isset($_POST["submit"]))  
 {  
      if(empty($_POST["comment-box"]))  
      {  
           $error = "<label class='text-danger'>Enter Name</label>";  
      }  
     
      else  
      {  
           if(file_exists('comments.json'))  
           {  
                $current_data = file_get_contents('comments.json');  
                $array_data = json_decode($current_data, true); 
                $size= sizeof($array_data);
                //print_r($size);
            
                
                
          
                $timezone  = +3; //(GMT +5:00) IND
                        //echo gmdate("Y/m/j H:i:s", time() + 3600*($timezone+date("I")));
                $t=time();
                $extra = array(  
                     'comment-box' => $_POST['comment-box'],  
                     'time' => gmdate("Y-m-j H:i:s",time() + 3600*($timezone+date("I"))),
                     'date' =>gmdate("Y/m/j",time() + 3600*($timezone+date("I")))
                    );  
                //print_r($extra);
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                

                if(file_put_contents('comments.json', $final_data))  
                {  
                     $table = "<label class='text-success'>Comment Posted Succesfully</p></br>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
?>

<html>
    <head> <!-- CSS here -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

</head>
    <header class="header" id="main-header">
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
    <body class="main-bod">
    <div class="sidenav">
    <div>

    <a href="home.php" id="home-tab"><i id="home-icon"class="fa fa-home" style="font-size:24px"></i>Home</a></div>
    <a href="profile.php"><i id="home-icon" class="fa fa-user" style="font-size:24px"></i>My Profile</a>
    <a href="#"><i id="user-icon"class="fa fa-users" style="font-size:24px"></i>User</a>
    <a href="#"><i id="user_r-icon" class="fa fa-user-secret" style="font-size:24px"></i>User Roles</a>
</div>
<div class="main-body">
    <div class="home-title">
  <?php
    if(file_exists('comments.json'))  
    {  
                     $current_data = file_get_contents('comments.json');  
                     $array_data = json_decode($current_data, true); 
                     $size= sizeof($array_data);
                     echo("<p><h1>Comments Wall <a2>last $size posts</a2> </h1></p>");
                             
                }
                ?>  

                
    </div>
    <div>
        
          <div class= "comment-table">        
        
                <?php
                if(file_exists('comments.json'))  
                {  
                     $current_data = file_get_contents('comments.json');  
                     $array_data = json_decode($current_data, true); 
                     $size= sizeof($array_data);
                    for( $i=($size-1); $i>=0; $i--){
                     $temp_c=($array_data[$i]['comment-box']);
                     $temp_t=($array_data[$i]['time']);
                             echo("<div><tr><td><a3>$temp_c</a3></br>");
                             echo("<a>--Admin</a> <a1>at $temp_t<a1></tr></td></div><br/>");
                            }
                }
                ?>  
                </div>
            
            </div>     
			   <form method="post"> 
            
				  <br/>
					<label class= "comment-box-text">Leave comment</label> <br/>
					
					<textarea type="text" name="comment-box" class="comment-box"></textarea><br/><br/> 
					<input type="submit" id="submit-btn" name="submit" value="comment" class="btn btn-info" /><br />                     
					<?php  
					if(isset($message))  
					{  
						 echo $message;  
					}  
					?>  
			   </form>  
		  </div>  
		  <br />  
	 </body>  
</html>
