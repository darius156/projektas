<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>document</title>
</head>

<body>
    <h1>Valdymo skydas</h1><?php echo $_SESSION["username"] ?>
    <br>
    <a href="logout.php">Atsijungti</a>
    <?php

include "dbConn.php"; // Using database connection file here

if(isset($_POST["submit"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	
    $q = "insert into add_worker(fname,capability,about,image) values('$_POST[fname]','$_POST[capability]','$_POST[about]','$dst_db')";
    $check = mysqli_query($db, $q);  // executing insert query

    //$check = mysqli_query($db,"insert into tbltest(fname,images) values('$_POST[fname]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
if(isset($_POST["submit1"]))
{
    $var1 = rand(1111,9999);  // generate random number in $var1 variable
    $var2 = rand(1111,9999);  // generate random number in $var2 variable
	
    $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
    $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number

    $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
    $dst = "./all_images/".$var3.$fnm;  // storing image path into the {all_images} folder with 32 characters hex number and file name
    $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name

    move_uploaded_file($_FILES["image"]["tmp_name"],$dst);  // move image into the {all_images} folder with 32 characters hex number and image name
	

    $check = mysqli_query($db,"insert into tbltest(fname,images) values('$_POST[fname]','$dst_db')");  // executing insert query
		
    if($check)
    {
    	echo '<script type="text/javascript"> alert("Data Inserted Seccessfully!"); </script>';  // alert message
    }
    else
    {
    	echo '<script type="text/javascript"> alert("Error Uploading Data!"); </script>';  // when error occur
    }
}
?>

    <form method="post" enctype="multipart/form-data">
        <table border="2">
            <tr>
                <td>Ivesti teksta</td>
                <td><input type="text" name="fname" placeholder="Iveskite" Required></td>
            </tr>
            <tr>
                <td>pasirinkti nuotrauka</td>
                <td><input type="file" name="image" Required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="submit1" value="Ikelti"></td>
            </tr>
        </table>
    </form>

    <hr />

    <h2>Irasai</h2>

    <table border="2">
        <tr>
            <td>ID</td>
            <td>Tekstas</td>
            <td>Nuotrauka</td>
        </tr>

        <?php


$records = mysqli_query($db,"select * from tbltest"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['fname']; ?></td>
            <td><img src="<?php echo $data['images']; ?>" width="200" height="200"></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">Istrinti</a></td>
        </tr>
        <?php
}
?>

    </table>
    <hr>
    <h2>Zinutes</h2>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Vardas</td>
            <td>Gmailas</td>
            <td>Tel.Nr</td>
            <td>Zinute</td>
        </tr>

        <?php


$records = mysqli_query($db,"select * from userinfo"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
        <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['user']; ?></td>
            <td><?php echo $data['email']; ?></td>
            <td><?php echo $data['mobile']; ?></td>
            <td><?php echo $data['comment']; ?></td>
            <td><a href="delete.php?id=<?php echo $data['id']; ?>">Istrinti</a></td>
        </tr>
        <?php
}
?>

    </table>
    <hr>
    <h2>Pridėti Darbuotoja</h2>

<form method="post" enctype="multipart/form-data">
<table border="1"> 
    <tr>
      <td>Enter Name</td>
      <td><input type="text" name="fname" placeholder="Vardas" Required></td>
    </tr>
    <tr>
      <td>Enter capability</td>
      <td><input type="text" name="capability" placeholder="Pareigos" ></td>
    </tr>
    <tr>
      <td>Enter about</td>
      <td><input type="text" name="about" placeholder="Apie" ></td>
    </tr>
    <tr>
      <td>Select Image</td>
      <td><input type="file" name="image" Required></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="submit" value="Upload"></td>			
    </tr>
  </table>
</form>

<hr/>

<h2>Darbuotoju sarašas</h2>

<?php

$records = mysqli_query($db,"select * from add_worker"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>

<table border="1">
  <tr>
    <!-- <?php echo $data['id']; ?> <br> -->
    <td><p>Darbuotojo vardas</p></td> 
    <td><p>Jo darbo specifika</p> </td>
    <td><p>Darbuotojo aprasymas</p></td>
    <td><p>Nuotrauka</p></td>
    <td></td>
  </tr>
    <tr>
      <td><?php echo $data['fname']; ?> </td>
      <td><?php echo $data['capability']; ?></td>
      <td><?php echo $data['about']; ?></td>
      <td><img src="<?php echo $data['image']; ?>" width="200" height="200"></td>
      <td><a href="delete.php?id=<?php echo $data['ID']; ?>">Istrinti</a></td>
    </tr>   
</table>
<?php
}
?>

</table>

    <?php mysqli_close($db);  // close connection ?>

</body>

</html>