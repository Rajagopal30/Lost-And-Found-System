
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['des']))
{


$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
	$max_qry = mysqli_query($conn,"select max(id) from fregister");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
$qry=mysqli_query($conn,"insert into found values('$id','$name','$email','$item','$place','$date','$des','$img')");
	if($qry)
	{
	
	echo "<script>alert('registered sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	
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
                    <a class="nav-link grow" href="lostform.php">Lost</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link grow" href="foundForm.php">Found</a>
                </li>
                <li class="nav-item">
                   
                </li>
                <li class="nav-item">
                    <a class="nav-link grow" href="view.php">View</a>
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

                    <h1 class="text-center">Glad To See You Here <i class="far fa-smile-beam"></i></h1>
                   <form class="mt-4" action="" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Register Number</span>
                            </div>
                            <input type="text" class="form-control" placeholder="John Cena" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="name">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Email*</span>
                            </div>
                            <input type="email" class="form-control" placeholder="cenajohn@gmail.com" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="email">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Item*</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Item Name" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="item">
                        </div>

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Location</span>
                            </div>
                            <input type="text" placeholder="If you remember" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="place">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Date*</span>
                            </div>
                            <input type="date" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="date">
                        </div>
						
						
						
						
						  <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary" id="inputGroup-sizing-default">Image</span>
                            </div>
                            <input type="file" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="img">
                        </div>
						
						
						
						
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-primary">Where</span>
                            </div>
                            <textarea class="form-control" placeholder="It is black in color..." aria-label="With textarea" name="des"></textarea>
                        </div>
                       

                        <div class="form-check mb-5">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Agree terms and conditions</label>
                        </div>
                        <div class="submit-button text-center">
                            <button type="submit" class="btn btn-outline-primary ">Submit</button>
                        </div>
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
