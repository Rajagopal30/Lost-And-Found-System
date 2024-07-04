<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"insert into sregister(name,gender,dob,email,phone,dept,year,reg) values('$name','$gender','$dob','$email','$phone','$dept','$year','$reg')");
	if($qry)
	{
	
	echo "<script>alert('Registered sucessfully')</script>";
	
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
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
      <a class="navbar-brand grow" href="#">gotLost</a>
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

        <a href="./forms/register.html"><i class="fas fa-user signin grow"> SignIn</i></a>
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
        >
          <h1 class="got-lost-heading mb-3">GOT LOST</h1>

          <p>
            Something lost it's way and came to you just to show the world how
            honest you are!
          </p>
          <p class="mb-5">
            Or if you've lost something just chill! People here are damnnn cool!
          </p>
          <div class="shrink">
            <a class="learn-more" href="forms/register.html">Register Now</a>
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
  <table width="39%" border="0" align="center" style="margin:0 auto">	
	
    <tr>
    
     <td height="47" colspan="2"  align="center" ><div class="style5"><h3>New Student Registration</h3></div></td>
      
    </tr>
	
    <tr>
    
      <td width="44%" height="57"><span class="style6">Student Name</span></td>
      <td width="56%"><label>
        <input name="name" type="text" id="name" required/>
      </label></td>
     
    </tr>
	
    <tr>
     
      <td height="45"><span class="style6">Gender</span></td>
      <td><input name="gender" type="radio" value="male" />
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
      
    </tr>
	
    <tr>
     
      <td height="46"><span class="style6">Date Of Birth</span></td>
      <td><label>
        <input name="dob" type="date" id="dob" required />
      </label></td>
     
    </tr>
	
    <tr>
      
      <td height="54">Email Id</td>
      <td><input name="email" type="email" id="email" required/></td>
     
    </tr>
	
	  <tr>
      
      <td height="51">Phone Number </td>
      <td><input name="phone" type="text" id="phone" maxlength="10" pattern="[6-9]{1}[0-9]{9}"  required/></td>
     
    </tr>
	
	<tr>
     
      <td height="55">Department</td>
      <td><input type="text" name="dept" id="dept" required></td>
     
    </tr>
	  <tr>
    
      <td height="38">Year</td>
      <td><input type="text" name="year" id="year" required></td>
      
    </tr>
	
    <tr>
    
      <td height="47">Register Number</td>
      <td><input name="reg" type="text" id="reg" required></td>
     
    </tr>
	<tr>
     
      <td height="59">&nbsp;</td>
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
