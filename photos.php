<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="main1.css">
    <title>Creating an Image Gallery From Folder using PHP</title>
    <style type="text/css">
        body {
            background: #fff;
        }
        
        img {
            width: auto;
            box-shadow: 0px 0px 20px #cecece;
            -moz-transform: scale(0.7);
            -moz-transition-duration: 0.6s;
            -webkit-transition-duration: 0.6s;
            -webkit-transform: scale(0.7);
            -ms-transform: scale(0.7);
            -ms-transition-duration: 0.6s;
        }
        
        img:hover {
            box-shadow: 20px 20px 20px #dcdcdc;
            -moz-transform: scale(0.8);
            -moz-transition-duration: 0.6s;
            -webkit-transition-duration: 0.6s;
            -webkit-transform: scale(0.8);
            -ms-transform: scale(0.8);
            -ms-transition-duration: 0.6s;
        }

    </style>
</head>

<body style="background-color:#1A3333">
    <div>
        <nav style="position:absolute;left:140px;width:74%;">
            <ul>
                <li>
                    <a href="home.php">Home</a></li>
                <li><a href="museum.php">History of BD Cricket</a></li>
                <li class="dropdown"><a href="#players">Players Details</a>
                    <div class="dropdown-content">
                        <a href="tamim.php">Tamim Iqbal</a>
                        <a href="soumya.php">Soumya Sarker</a>
                        <a href="rahim.php">Mushfiqur Rahim</a>
                        <a href="#">Mahmudullah</a>
                        <a href="#">Mominul Haque</a>
                        <a href="#">Sabbir Rahman</a>
                        <a href="#">Sakib Al Hasan</a>
                        <a href="#">Mehedi Hasan Miraz</a>
                        <a href="#">Mustafizur Rahman</a>
                        <a href="#">Rubel Hossain</a>
                        <a href="#">Mashrafi Bin Mortaza</a>
                    </div>
                </li>
                <li><a href="photos.php">Photos</a></li>
                <li><a href="videos.php">Videos</a></li>
                <li><a href="loginformadmin.php">Admin Panel</a></li>
            </ul>
        </nav>
    </div>

    <div style="position:absolute;top:30px;left:100px;">
        <?php
$folder_path = 'images/'; //image's folder path

$num_files = glob($folder_path . "*.{JPG,jpg,gif,png,bmp}", GLOB_BRACE);

$folder = opendir($folder_path);
 
if($num_files > 0)
{
 while(false !== ($file = readdir($folder))) 
 {
  $file_path = $folder_path.$file;
  $extension = strtolower(pathinfo($file ,PATHINFO_EXTENSION));
  if($extension=='jpg' || $extension =='png' || $extension == 'gif' || $extension == 'bmp') 
  {
   ?>
            <a href="<?php echo $file_path; ?>"><img src="<?php echo $file_path; ?>"  height="250" /></a>
            <?php
  }
 }
}
else
{
 echo "the folder was empty !";
}
closedir($folder);
?>
    </div>
</body>

</html>
