<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{



	$max_qry = mysqli_query($conn,"select max(id) from fregister");
		$max_row = mysqli_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;
	$qry=mysqli_query($conn,"insert into fregister values('$id','$name','$gender','$age','$email','$phone','$dept','$desig','$psw')");
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

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Tangerine"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lemon&family=Monoton&family=Montserrat:ital,wght@0,200;0,400;0,500;1,300&display=swap"
      rel="stylesheet"
    />

    <!-- mdbootstrap -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="node_modules/mdbootstrap/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css" />
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css" />
    <title>Home</title>
    
      <!--font Awesome ... for button icon-->
      <script src="https://kit.fontawesome.com/9973cec642.js" crossorigin="anonymous"></script>

  </head>

  <body>
  <link rel="stylesheet" href="index.css" />
    <img class="logo" src="images/LOGO.png" alt="logo">
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto"><li><a href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a></li>
  <li><a class="active" href="index.php">Home Page</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="admin.php">Admin login</a></li>
  <li><a href="#">&nbsp;</a></li>
  <li><a href="stud.php">Student Login</a></li>
  <li><a href="#">&nbsp;</a></li>
   <li><a href="fac.php">Faculty Login</a></li>
        </ul>
      </div>
    </nav>
    <!-- <h1>Hello, world!</h1> -->
    <main>
      <section class="discovery container section-1">
        <div
          class="
            text
            col-lg-6 col-md-6 col-12
            w-50
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
        ><br><br><br><br><br><br><br><br><br><br><br>
          <h1 class="got-lost-heading mb-3">FIND THE LOST</h1>

          <p>
            Something lost it's way and came to you just to show the world how
            honest you are!
          </p>
          <p class="mb-5">
            Or if you've lost something just chill! People here are damnnn cool!
          </p>
          <div class="shrink">
          </div>
        </div>

        <div class="img col-lg-6 col-md-6 col-12">
          <img
            src="images/lost-and-found.png"
            alt="image"
            class="img-fluid lost-found"
          />
        </div>
      </section>
 <form id="f1" name="f1" method="post" action="#" onSubmit="return vali()">
  <table width="36%" border="0" align="center" style="margin:0 auto;">	
		
    <tr>
     
      <td height="37" colspan="2"  align="center" ><div class="style5"><h3>Faculty Registration</h3></div></td>
      
    </tr>
	
	
    <tr>
      <td width="44%" height="42">Faculty Name</td>
      <td width="56%">
        <input name="name" type="text" id="name" required/>
     </td>
    </tr>
	
 <tr>
     <td height="39">Gender</td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
     
    </tr>
	
    <tr>
      <td height="37">Age</td>
      <td>
        <input name="age" type="text" id="age" required />
      </td>
     
    </tr>
	
    <tr>
    
      <td height="41">Email Id</td>
      <td><input name="email" type="email" id="email" required/></td>
     
    </tr>
		  <tr>
     
      <td height="37">Phone Number</td>
      <td><input name="phone" type="text" id="phone" maxlength="10" pattern="[6-9]{1}[0-9]{9}" required/></td>
      </tr>
	
		
	<tr>
     <td height="46">Department</td>
      <td><input type="text" name="dept" id="dept" required></td>
    </tr>
		   <tr>
     
      <td height="49">Designation</td>
      <td><input type="text" name="desig" id="desig" required></td>
      </tr>
	
		   <tr>
      <td height="45">Password</td>
      <td><input type="password" name="psw" id="psw" required></td>
     
    </tr>

	<tr>
      <td height="46">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>


<br />
<br />

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <!-- mdbootstrap -->
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/jquery.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/popper.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/bootstrap.min.js"
    ></script>
    <script
      type="text/javascript"
      src="node_modules/mdbootstrap/js/mdb.min.js"
    ></script>
  </body>
</html>