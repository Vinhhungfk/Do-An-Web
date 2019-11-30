<?php
session_start();
?>
<?php include("header.php"); ?>


<?php
     //   if (isset($_GET['code'])){
     //       $id = $_GET['code'];
      //       $_SESSION['userindex'] = $user; 
            
            
      //        $sql = "update test set status = 1 where username = '$user' ";
      //      	$query = mysqli_query($ketnoi,$sql);
      //      echo'tài khoản '.$user.' đã được kích hoạt thành công!!';
      //      }
            
    
    
  echo'  <div class="list1"><b><center>';
if(!empty($_GET['code']) && isset($_GET['code']))
{
   $code=($_GET['code']);
   $c=mysqli_query($ketnoi,"SELECT status FROM test WHERE acti='$code'");
 
   if(mysqli_num_rows($c) > 0)
   {
      $count=mysqli_query($ketnoi,"SELECT status FROM test WHERE acti='$code' and status='0'");
 
      if(mysqli_num_rows($count) == 1)
      {
         mysqli_query($ketnoi,"UPDATE test SET status='1' WHERE acti='$code'");
         echo"xin chúc mừng bạn đã kích hoạt thành công tài khoản!";
      }
      else
      {
         echo"tài khoản đã được kích hoạt rồi! không cần kích hoạt lại!";
      }
   }
   else
   {
      echo"Mã Kích Hoạt Tào Lao. xem lại nhé!.";
   }
}
?>
</center></b></div><br><br>
