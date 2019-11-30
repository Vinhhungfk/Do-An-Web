<?php
session_start();
?>
<?php include("header.php"); ?>


<?php

	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["quenmk"])) 
	{
	       include('ketnoi.php');
		    
	    echo '<div class="quote">';
	    
	    
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$email = $_POST["email"];
		
		
	    if ($username == "" || $email =="") 
    	    {
    			echo "bạn không được để trống cái nào hết!";
    		}
		
		else 
    		{
    		    $sql = "select * FROM test WHERE username = '$username' and email = '$email' ";
    			$query = mysqli_query($ketnoi,$sql);
    			$num_rows = mysqli_num_rows($query);
    			
    			if ($num_rows==0) 
        			{
    				echo "tên đăng nhập hoặc email không đúng !";
    				
    			    }
    		   	else
        		   	{
        		   	    
                		// đoạn này select ra cái pass word gán vô biến để send vè mail
            			$accc= "select password FROM test WHERE username = '$username'";
            			$result = mysqli_query($ketnoi,$accc); 
                        if ($result) 
                            {  
                                 while ($row=mysqli_fetch_row($result)) 
                                    {
                                        $pass=$row[0];// lấy pass ra gán vô $pass
                                    }
                            }
        		   	    
        		   	    
        		   	    
        		   	    // truyền 3 cái $email,$username,$pass vô function
        		   	    function Send_Mail($email,$username,$pass)
        		   	    {
                                ini_set( 'display_errors', 1 );
                                error_reporting( E_ALL );
                                $from = "Vinhhungfk@gmail.com";
                                $to = "$email";
                                $subject = "Quên mật khẩu tại VInhhungfk";
                                $message ='mật khẩu của bạn là '.$pass.', lấy tờ giấy ra ghi lại cho đỡ quên nhé =))';
                                $headers = "From:" . $from;
                                mail($to,$subject,$message, $headers);
                                echo 'đã gửi mật khẩu tới '.$email.' vui lòng kiểm tra hộp thư đến để lấy lại mk nhé!';
       				   	 }
       				   	 
       				  // thực thi cái function này
                    Send_Mail($email,$username,$pass);
        		   	    
        		   	    
    		       	  
        		   	}
    		}
	
		echo '</div>';
}
?>



	
<br><p><div class="bodyfrom"></p><b>bạn vui lòng nhập tên và email của tài khoản bị quên mk:</b><br>

<form method="POST" action="resetmk.php"><br>
Tên: <input type="text" name="username" ><br>
email: <input type="text" name="email" > <input type="submit" name="quenmk" value="gửi email">
<p></p> </form> 
</div>