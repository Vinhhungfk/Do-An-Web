<?php
session_start();
?>
      <?php include("header.php"); ?>
      




<?php

		if (isset($_POST["dangky"])) 
		{ 
		    require_once("ketnoi.php");
		    
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["password"];
  			$email = $_POST["email"];
  			// check định dạng mail
  		    $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
  			
  			// Mã khóa mật khẩu
           // $password = md5($password);
              
		    if ($username == "" || $password == "" || $email == "" ){
				  echo "Nhập thiếu thông tin kìa bạn!";
				  exit();
  			}
  			if(!preg_match($regex, $email)){
  			     echo 'Định dạng email này có gì đó sai sai!!!';
  			     exit();
  			}
  		
  			else{
  			    // check tên
  			    $sql="select * FROM test WHERE username='$username'";
				$kt=mysqli_query($ketnoi, $sql);
				
				// check email
				$sql_email="select * FROM test WHERE email='$email'";
				$kt_email=mysqli_query($ketnoi, $sql_email);
 
				if(mysqli_num_rows($kt)  > 0 )
    		    	{
    				    echo "Tài khoản này tồn tại rồi";exit();
    		    	}
    		    
    		    if( mysqli_num_rows($kt_email)  > 0 )
    		    	{
    				    echo "email này đã tồn tại"; exit();
    		    	}
                if( mysqli_num_rows($kt_email)  > 0 && mysqli_num_rows($kt)  > 0 )
    		    	{
    				    echo "email và Tài khoản này bị ai đăng ký mất r!";
    				     exit();echo'</div>';
    		    	}
    		    	
    			else{
        			    
        			    $randum = rand(100, 900); //tạo code accti cho nick
                       
        			    
    				//thực hiện việc lưu trữ dữ liệu vào db
    	    		$sql = "INSERT INTO test(username,password,email,acti,status) 
    	    		        VALUES ('$username','$password','$email','$randum',0)";
    	    		        
    			        // thực thi câu $sql với biến $ketnoi lấy từ file ketnoi.php
       				   	mysqli_query($ketnoi,$sql);
       				   	 	
       				   	 	
       				   	 	
       				   	 function Send_Mail($email,$username,$randum){
       				   	     
                                ini_set( 'display_errors', 1 );
                                error_reporting( E_ALL );
                                $from = "Vinhhungfk@gmail.com";
                                $to = "$email";
                                $subject = "Chúc mừng $username đã chốt kèo tại Web Vinhhungfk";
                                
                                $message ='xin chúc mừng '.$username.' đã đăng ký tài khoản thành công tại WEb Hưng Vĩnh! Để kích hoạt tài khoản vui lòng sửa link sau(đổi dấu - thành .)rồi chạy để kích hoạt nhé  vinhhungfk-000webhostapp-com/CUOIKY/accti.php?code='.$randum.' ';
                                $headers = "From:" . $from;
                                mail($to,$subject,$message, $headers);
                                echo '<div class="quote" style="mã-width:400px"> đăng ký tk thành công! đã gửi mail tới '.$email.' vui lòng kiểm tra hộp thư đến để kích hoạt tài khoản này nhé!</div>';
       				   	 }
       				   	 
       				   	 
       				   	 
       				   	 
       				   	 
       				   	 
                    Send_Mail($email,$username,$randum);
       				   	 	
        			}
  			}
  	
	}
	?>
	
	
	
	<b>
<div class="bodyfrom">
    <center><b>Đăg ký tài khoản</b></center>
    <hr>
    <form method="POST" action="register.php"><br>
    
	<font color="#f00">* </font>Tên: <input type="text" id="username" name="username" ><br>
	<font color="#f00">* </font>Mk: <input type="password" id="pass" name="password" ><br>
	<font color="#f00">* </font>Email: <input type="text" id="email" name="email" ><br>
	
	<input type="submit" name="dangky" value="Đăng ký"><font color="#00f"> -- không được để trống *  </font><br><p></p>
	</div>
      <br><br>
      
      
      
</body>
</html>