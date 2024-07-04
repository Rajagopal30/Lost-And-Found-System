
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

$up=mysqli_query($conn,"update lost set status='$reg' where id='$id'");

if($up){

echo "<script>alert('updated Success')</script>";
}

}
?>


<!Doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="foundForm.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <title>Found Form</title>
</head>

<body>
<link rel="stylesheet" href="index.css" />
    <img class="logo" src="images/LOGO.png" alt="logo">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link grow" href="adminhome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link grow" href="provide.php">Provide</a>
                </li>
             

                <li class="nav-item">
                    <a class="nav-link grow" href="index.php">Logout</a>
                </li>
            </ul>
        

        </div>
    </nav>
    <!-- <h1>Hello, world!</h1> -->
    <main>
        <section>
            <div class="container" id="main-container">
                <div class="image">
                    <img src="../images/found.jpg" alt="">
                </div>

                <div class="container p-5 mt-5" id="form-container">

                    <h1 class="text-center">View Request<i class="far fa-smile-beam"></i></h1>
        <form method="post" action="">         

<table width="100%" align="center" border="3">
	
	
	<tr>
		<td colspan="13" align="center"><strong><h3></h3></strong></td>
  </tr>
	
	
	
	
		    <tr>


		  <td ><div align="center" class="style6"><strong>Register Number</strong> </div></td>
		   <td ><div align="center" class="style6"><strong>Email</strong> </div></td>
		   		   <td width="10%"><div align="center" class="style6"><strong>Item</strong> </div></td>
		   <td ><div align="center" class="style6"><strong>Place</strong> </div></td>
		    <td ><div align="center" class="style6"><strong>Date</strong> </div></td>
			<td ><div align="center" class="style6"><strong>Description</strong> </div></td>
		
			<td ><div align="center" class="style6"><strong>Enter Register Number</strong> </div></td>
			<td ><div align="center" class="style6"><strong>Action</strong> </div></td>
		
        </tr>
		<tr>
		<td colspan="13">&nbsp;</td>
		</tr>
		<?php
		$qry=mysqli_query($conn,"select * from lost where status=''");
	
		while($row=mysqli_fetch_array($qry))
		{
		
		
		
		?>
        <tr>
		

		   <td><div align="center"><?php echo $row['name'];?></div></td>
		      <td><div align="center"><?php echo $row['email'];?></div></td>
			  <td><div align="center"><?php echo $row['item'];?></div></td>
			 <td><div align="center"><?php echo $row['place'];?></div></td>
			   <td><div align="center"><?php echo $row['date'];?></div></td>
			    <td><div align="center"><?php echo $row['des'];?></div></td>
		
			   <td><div align="center"><input type="text" name="reg"><input type="hidden" name="id" value="<?php echo $row['id'] ?>"></div></td>
			   <td><div align="center"><input type="submit" name="btn"></div></td>
			
					   
					   
					  
										 
        </tr>


<?php } ?>
		 <tr>
		  	 	<td colspan="13">&nbsp;</td>
		   		
		
		
		</tr>
		

</table>

</form>

                </div>
            </div>
        </section>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
