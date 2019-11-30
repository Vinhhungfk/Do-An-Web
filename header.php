<?php
date_default_timezone_set("Asia/Ho_Chi_Minh");
?>



  
  <html>
<head>
    <title>Quachdaik</title>
<link type="text/css" rel="stylesheet" href="/CUOIKY/style.css" media="all,handheld"/>

  
</head>
<body>
<div class="white">

    <div class="list1" style="background-image: url('https://scontent.fsgn5-6.fna.fbcdn.net/v/t1.0-9/71391618_1405359076296011_5359976983335796736_n.jpg?_nc_cat=106&_nc_oc=AQnb10qftOpNwD4uNs_4iBN5bwaovNkDlqJnGn13kli-H0_sGqpreH3YAYAMc4EE1oM&_nc_ht=scontent.fsgn5-6.fna&oh=6a8fdcda95e393c303acf9152a1470a7&oe=5DF880BE');max-height:315px;"> 
           <br><br><br><br><br><br><br><br><br><br>
          
    <table>
        <tr>
            <td>
               <?php 
                include('ketnoi.php');
               if (isset($_SESSION['userindex']))
               {
               
               ?>
            <img src="<?php echo $_SESSION['avt']; ?>" width="180px" style="border-radius:100px;boder:1px solid #ddd; margin-left:20px">
            <?php } ?>
            
            
            
            
            
            </td>
            <td>
            <font style="color:white;font-weight:bold;font-size:30px;margin-left:10px"> <?php 
       if (isset($_SESSION['userindex']))
       {
           echo $_SESSION['userindex'];
       }
       ?></font>
            </td>
        </tr>
    </table>
     <?php 
       if (isset($_SESSION['userindex']))
       {
           echo'<span class="xah" style="margin-left:75px"><a href="/CUOIKY/upload.php">đổi avatar</a>  </span> ';
       }
       ?>
</div>





  
<span class="font">
    <nav class="ph-lift"><ul>
        
         <li> <a href="alo.php" ><img src="http://hdndquangtri.gov.vn/Portals/0/home_icon.png" width="46px" ></a> </li>
         <li class="active"><a href="index.php" data-title="Trang Chủ">Trang Chủ</a></li>
         <li><a href="login.php" data-title="Đăng Nhập">Đăng Nhập</a></li>
         <li><a href="register.php" data-title="Đăng Ký">Đăng Ký</a></li>
         <li><a href="#" data-title="Liên hệ">Liên hệ</a></li>
    <ul></nav> 
</span> 


</body>
</html>