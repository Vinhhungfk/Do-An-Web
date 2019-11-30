<?php
session_start();
?>
<?php include("header.php"); ?>


<?php
//lưu vô dm để truy xuất ra id cần đổi mk
 $dm =  $_SESSION['userindex'];
 
 
 
 
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["quenmk"])) 
	{
	       include('ketnoi.php');
		    
	        echo '<div class="quote">';
		// lấy thông tin người dùng
	        $pas = $_POST["pass"];

	
         echo "mật khẩu của bạn đã được đổi!";
         $sql = "update test set password = '$pas' where username = '$dm' ";
         $query = mysqli_query($ketnoi,$sql);
    		       	  
        		   	
    		
	
		echo '</div>';
}
?>



	
<br><p></p>
<form method="POST" action="doimk.php"><b>đổi mk:</b><hr>
mk mới: <input type="text" name="pass" ><br> 
<input type="submit" name="quenmk" value="đổi"><p></p>
	


	 </form> 