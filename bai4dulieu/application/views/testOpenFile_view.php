
<?php $num =100 ?>
<?php 
$fp = @fopen('http://localhost/bai4dulieu/upload/noidung.php', "r");
  
	// Kiểm tra file mở thành công không
		if (!$fp) {
		    echo 'Mở file không thành công';
		}
		else
		{
			
		    // Đọc file và trả về nội dung
		    $data = fread($fp, filesize('noidung.txt')+100);
		    echo $data;
		    // Đóng file
    		fclose($fp);
		}
 ?>
