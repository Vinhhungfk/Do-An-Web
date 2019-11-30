<?php session_start(); ?>
<?php include("header.php"); ?>
      
  
<html>
<head>
	<title>trang chủ</title>
	<meta charset="utf-8">


<style>
    
.list1:hover{
background:-webkit-gradient(linear, left top, left bottom, from(#f7f7f7), to(#fff));
transition: all 0.3s;
-moz-transition: all 0.3s;
padding-left: 15px;}





.cateBox
{
	clear: both;
	background: url(img/notepad-cate-top.png) no-repeat center top;
	padding-top: 76px;
    padding:20px
	margin-bottom: 0px;
	width: 250px;
}
.cateBox .cate-title
{
	background: url(img/notepad-cate-bg.png) repeat-y center top;
	text-align: center;
	padding: 0px 10px 13px 10px;
	margin: 0px;
}
.cateBox .cate-title h3 /* tiêu đề nghiêng*/
{
	color: #099601;
	-webkit-transform: rotate(-8deg);
	margin: 0px;
}
.cateBox .cate-body
{
	background: url(img/notepad-cate-bg.png) repeat-y center top;
	padding: 10px 15px 10px 20px;
	margin: 0px 0px -2px 0px;
}

.cateBox .cate-bottom
{
	background: url(img/notepad-cate-bot.png) no-repeat center bottom;
	height: 66px;
	margin: 0px;
}
</style>
</head>
<body>
    <br><br><br>



  <?php    // xử lý đăng sờ tatus---------------------------
		if (isset($_POST["đăng"])) 
		{
  			$ten= $_SESSION['userindex']; // lấy tên từ $_SESSION
  			$Noidungindex = $_POST["noidung"]; // lấy dội dung từ post
  			$time = date('d/m/Y - H:i'); // time đăng bài
		    if ($Noidungindex == "")
		    {
				  echo "Bạn chưa nhập nội dung!";
				  exit();
  			}
  			else{    
    				//thực hiện việc lưu trữ dữ liệu vào db
    	    		$sql = "INSERT INTO TinMoi(ten,noidung,time,img) 
    	    		        VALUES ('$ten','$Noidungindex','$time','')";  
    			    // thực thi câu $sql với biến $ketnoi lấy từ file ketnoi.php
       				mysqli_query($ketnoi,$sql); 	
  			    }
    	}
?>





 <?php
  if (!isset($_SESSION['userindex']))  // nếu mà chưa đăng nhập thì vô đây
        {
         
        echo '<i><font color="#f00">• </font>bạn chưa có nick? <br><br> <font color="#f00">• </font>hãy<span class="list5"><font color="#f00"><a href="register.php">đăng ký ngay</a></font></span> để gia nhập cộng đồng của chúng tôi!</i>';
            
        echo'	<br><br> <font color="#f00">• </font>hoặc <a href="resetmk.php">Quên mật khẩu?</a>';
        }
?>







  



<?php 
        if (isset($_SESSION['userindex']))
            {
?>
            <div id="trai">
        
            <div class="list1" style="padding: 4px;background: radial-gradient(circle farthest-corner at left top, #F2FFFF 0%, #FFFFFF 100%); 
background: -moz-radial-gradient(circle farthest-corner at left top, #F2FFFF 0%, #FFFFFF 100%); 
background: -o-radial-gradient(circle farthest-corner at left top, #F2FFFF 0%, #FFFFFF 100%); 
background: -ms-radial-gradient(circle farthest-corner at left top, #F2FFFF 0%, #FFFFFF 100%); 
background: -webkit-radial-gradient(left top, circle farthest-corner, #F2FFFF 0%, #FFFFFF 100%);"><center><b>Đăg Bài viết</b></center><hr>
            <form method="POST" action="index.php"><br>
        	<textarea type= "text"  name="noidung" placeholder="nhập nội dung"></textarea><br>
        	<input style="margin-left:360px" type="submit" name="đăng" value="Đăng"><br><p></p>
        	</div>  
<?php 
            }  // đến đây mới hết sự kiện nếu đã đăng nhập!
?>         








            


  
  
  
       

   
   
   
   
      
<?php
           $sql="SELECT * FROM TinMoi ORDER BY id DESC";
           $result = mysqli_query($ketnoi, $sql);
                    
           if ($result) 
                {
                     // Hàm `mysql_fetch_row()` sẽ chỉ fetch dữ liệu một record mỗi lần được gọi
                     // do đó cần sử dụng vòng lặp While để lặp qua toàn bộ dữ liệu trên bảng posts
                    while ($row=mysqli_fetch_row($result)) 
                    {
                        echo '<div class="list1" style ="margin-bottom:6px">';
                        echo' <table><td>';
                        echo '<span class="list1" style="border-radius:100px"><small>#'.$row[0].'</small></span</td><td> <b><a href="">'.$row[1].'</a></b><br> <small><small>'.$row[3].'</small></small> </td></table>'.$row[2];
                       
                        echo'<p></div>';
                    }
                    // Máy tính sẽ lưu kết quả từ việc truy vấn dữ liệu bảng
                    // Do đó chúng ta nên giải phóng bộ nhớ sau khi hoàn tất đọc dữ liệu
                    mysqli_free_result($result);
                }
       
       ?>


</div> <?php  //div ket thuc main trái ?>
<div id="phai"> <?php  //bắt đầu main phải ?>   
    
 
 
 
 
  
<div class="cateBox"><div class="cate-title"><h3>Hi <?php echo$_SESSION['userindex'].'!'; ?></h3></div>
<div class="cate-body">
<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="100%" height="135" align="left"><font color=red>Tip:</font> chúc bạn có một ngày học tập & làm việc thành công!<p><p><font color="#080">•</font> Truy cập Trong ngày: <b>1</b><br /><font color="#080">•</font> Tổng cộng: <b>2562</b></marquee>

</div>
<div class="cate-bottom"><center> © Copyright 2019 HungVinh</center></div></div>  
 
 
 
 
 
 
 
 
 
<?php 
    // if nếu đã đăng nhập ~ có tồn tại lưu trữ user vô userindex(lưu trong lúc đăng nhập succes)
       if (isset($_SESSION['userindex']))
       {
           echo'<div class="gmenubox">';
           echo 'Menu'; 
           
           echo'</div><div class="glistbox"> 
           <p><marquee behavior="alternate"> <marquee width="200">chúc '.$_SESSION['userindex'].' có một ngày học tập & làm việc thành công!</marquee></marquee> </p>';
           
           
           echo'<font color="#c1c1c1">• </font> <a href="imgsql.php" >up hình lưu vô sql</a></span> <hr> ';
           echo'<font color="#c1c1c1">• </font> <a href="doimk.php" >Đổi Mật Khẩu</a></span> <hr> ';
           echo'<font color="#c1c1c1">• </font> <a href="resetmk.php" >reset Mật Khẩu</a></span> <hr> ';

           echo' <font color="#c1c1c1">• </font> <a href="logout.php">Đăng xuất</a></span> ';
         
           echo'</div>';
           
       }
?>
 <div class="list1"> <font color="#080">• </font> DANH MỤC KHÁC<br> đang cập nhật...</div>
    
</div> <?php //div ket thuc main phải ?>
    
       
     <div class="cuoi"></div>
     <div id="footer">
       
       
       
       
<br><br><br><br><br>

<div class="footer"><i><center>
Copyringht: 2019 - Design by Mr.Hưng <br>
hosting by: 000webhost</i></center></div>

</body>
</html>