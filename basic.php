<?php
session_start();
$servername = "localhost";
$uname = $_POST["name"];
$tag = $_POST["tag"];
$duration = $_POST["duration"];
$service = $_POST["service"];
$type= $_POST["type"];
$tvalue= $_POST["tvalue"];
$message = $_POST["message"];
$dbname = "dbms";
$name="root";
$pass="";
$flag=0;
$flag1=0;
$_SESSION['project_name']=$uname;


// Create connection
$conn = mysqli_connect($servername,$name,$pass,$dbname);
// Check connect

if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}

$name=$_SESSION['name'];
$target_dir = "uploads/".$_SESSION['name'];
if(!file_exists($target_dir))
{
    mkdir($target_dir,"0777");
    $target_dir = "uploads/".$_SESSION['name']."/".$uname;
    if(!file_exists($target_dir))
    {
            mkdir($target_dir,"0777");
          $target_dir = "uploads/".$_SESSION['name']."/".$uname."/";


    }


}
else{
    // echo "file exists";
    $target_dir = "uploads/".$_SESSION['name']."/".$uname;
     if(!file_exists($target_dir))
    {
            mkdir($target_dir,"0777");
          $target_dir = "uploads/".$_SESSION['name']."/".$uname."/";
      }

}
for ($i = 0; $i < 3; $i++)
{

    $target_file = $target_dir . basename($_FILES["fileToUpload".$i]["name"]);
    $path[$i]=$target_file;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
    if(isset($_POST["submit"]))
    {
        $check = getimagesize($_FILES["fileToUpload".$i]["tmp_name"]);
        if($check !== false)
        {
// Check if file already exists
            if (file_exists($target_file))
            {
    // echo "Sorry, file already exists.";
                header("location: details.php?E=$i&error=".$i."already_exist&N=$uname&P=$tag&D=$duration&C=$service&Tval=$tvalue&T=$message");
            }
            else
            {

// Check file size
                if ($_FILES["fileToUpload".$i]["size"] > 500000)
                {
    // echo "Sorry, your file is too large.";
                    header("location: details.php?E=$i&error=".$i."too_large&N=$uname&P=$tag&D=$duration&C=$service&Tval=$tvalue&T=$message");

    // $uploadOk = 0;
                }
                else 
                {

// Allow certain file formats
                    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
                    {
    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        header("location: details.php?E=$i&error=".$i."formate_not_valid&N=$uname&P=$tag&D=$duration&C=$service&Tval=$tvalue&T=$message");

    // $uploadOk = 0;
                    }
                    else
                    {
                      $flag=$flag+1;
                      echo $flag;

                  }

              }

          }

      } 
      else 
      {
        echo "File is not an image.";
          header("location: details.php?E=$i&error=".$i."not_image&N=$uname&P=$tag&D=$duration&C=$service&Tval=$tvalue&T=$message");
        // $uploadOk = 0;
      }
  }
// Check if $uploadOk is set to 0 by an error

}
$sql = "INSERT INTO basic VALUES ('".$uname."','".$tag."', '".$duration."','".$service."','".$type."','".$tvalue."','".$message."','".$path[0]."','".$path[1]."','".$path[2].   "')";
// $sql1 = "DELETE FROM basic WHERE 'basic'.'name'='".$uname."'";

if($flag==3)
{

    if ($conn->query($sql)) 
    {
        for($j=0;$j<3;$j++)
        {
                $target_file = $target_dir . basename($_FILES["fileToUpload".$j]["name"]);

            if (move_uploaded_file($_FILES["fileToUpload".$j]["tmp_name"], $target_file))
            {
                echo "The file ". basename( $_FILES["fileToUpload".$j]["name"]). " has been uploaded.";
                $flag1=$flag1+1;

            } 
            else
            {
                break;
            }
           
        }
        if($flag1==3)
        {


            header("location: preview.php?pname=$uname");
        }
        else
        {
            // $result=$conn->query($sql1);
            // if($result){
            header("location: details.php?E=$j&error=".$j."not_uploaded&N=$uname&P=$tag&D=$duration&C=$service&Tval=$tvalue&T=$message");
        // }

        }
    }

    else
    {
        // echo "MAAAAACHUDAOOOOOOO".$conn->error;
           header("location: details.php?account_not_created");
   }
}

$conn->close()

?>
