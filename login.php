<?php
session_start();
?>
<?php include("header.php"); ?>


<?php


	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST['dangnhap']))
    {
        echo '<div class="quote">';

		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		
	    if ($username == "" || $password =="") 
    	    {
    			echo "bạn không được để trống cái nào hết!";
    		}
		
		else 
    		{
    		    // đoạn này xem tổng thể
    		    $sql = "select * FROM test WHERE username = '$username' and password = '$password' ";
    			$query = mysqli_query($ketnoi,$sql);
    			$num_rows = mysqli_num_rows($query);
    			
    			// đoạn này kiểm tra nick kích hoạt ch - lấy accti ra so sánh 0 ~ 1
    			$accc= "select status FROM test WHERE username = '$username'";
    			$result = mysqli_query($ketnoi,$accc); 
    			
    			if ($num_rows==0) 
        			{
    				echo "tên đăng nhập hoặc mật khẩu không đúng !";
    				exit();
    			    }
    			    
                if ($result) 
                    {
                            
                   while ($row=mysqli_fetch_row($result)) 
                        {
                            $alo=$row[0];// lấy mã accti sql ra gán vô $alo
                        }
                        
                        if($alo==0)
                        {
                            echo'Xin lỗi nick này chưa được kích hoạt! vui lòng check mail lại!';
                        }
                        if($alo==1)
                        {
                            echo "Đăng nhập Thành công!";
        		   	   echo'<META http-equiv="refresh" content="1;URL=index.php">';
        		   	     $sql1 = "select * FROM test WHERE username = '$username' ";
    		           	mysqli_query($ketnoi,$sql1);
    		           
        		   	    $_SESSION['userindex'] = $username; 
                        }
                    } 
    		}
	
		echo '</div>';
}
?>


<br><br>
	<div class="bodyfrom">
<b>Đăng Nhập:</b><br>
<form method="POST" action="login.php"><br>
Tên: <input type="text" name="username" id="username" placeholder="nick name"><br>
M.k: <input type="password" name="password" id="password" placeholder="password" > 

<input type="submit" name="dangnhap" value="Đăng nhập"><p></p>
	</div>
	
    <font color="#f00">• </font>bạn chưa có nick? hãy
	<span class="list5"><a href="register.php">đăng ký ngay</a></span> để gia nhập cộng đồng của chúng tôi!
	<br> <font color="#f00">• </font>hoặc <a href="resetmk.php">Quên mật khẩu?</a>

	 </form> 
	 <br><br><br>
	 
