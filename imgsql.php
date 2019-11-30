
<HTML>
<HEAD>
</HEAD>
<BODY>
    <?php

 include('header.php');
 
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['userImage']['tmp_name']))
    {
        
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
        
        $sql = "INSERT INTO images (imgType ,imgData) VALUES('{$imageProperties['mime']}', '{$imgData}')";
       echo 'up avatar thành công! lưu tại sql.';
        mysqli_query($ketnoi, $sql) 
        
        
        or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($ketnoi));
    }
}
?>
    <form name="frmImage" enctype="multipart/form-data" action=""
        method="post" class="frmImageUpload">
        <label>Upload Image File:</label><br /> <input name="userImage"
            type="file" class="inputFile" /> <input type="submit"
            value="Up avatar to sql" class="btnSubmit" />
    </form>
    </div>
    
    
    
    
    
    
    <hr>
    
    các hình trong sql
    
    <?php
     $sql = "SELECT imgData FROM images"; 
    $result = mysqli_query($ketnoi, $sql);

	while($row = mysqli_fetch_array($result))
	{
        echo '<a href="data:image/jpeg;base64,'.base64_encode( $row['imgData'] ).'"> <img src="data:image/jpeg;base64,'.base64_encode( $row['imgData'] ).'" width="50px"/></a>';
	}
 mysqli_close($ketnoi);
?>
    
    
    
    
    
    
    
</BODY>
</HTML> 