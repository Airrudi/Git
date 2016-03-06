<html>
  <head>
    <title>GIT Tutorial</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="main">
      <h1>GIT Tutorial</h1>
      <h3> Have fun Michiel, Ruud, Roy and Rens!</h3>
      <p>Thanks Mo!</p>    


      <p id="errorMessage">
    	
      	<?php
      		if(isset($_POST["submit"])){
      			$hostname='localhost';
      			$username='root';
      			$password='';

      			try {
      				$dbh = new PDO("mysql:host=$hostname;dbname=college",$username,$password);

      				$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line
      				$sql = "INSERT INTO students (student_name, student_email, student_city)
      				VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["stu_city"]."')";
      				
      				if ($dbh->query($sql)) {
      					echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
      				}
      				else{
      					echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
      				}

      				$dbh = null;
      			}
      			catch(PDOException $e){
      				echo $e->getMessage();
      			}
      		}
        ?>

      </p>

       <div id="login">
        <h2>Student&#39;s Form</h2>
        <hr />
        <form action="" method="post">
          <label>Name :</label>
          <input type="text" name="stu_name" id="name" required="required" placeholder="Please enter your name" />
        
          <label>Email :</label>
          <input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com" />
        
          <label>City :</label>
          <input type="text" name="stu_city" id="city" required="required" placeholder="Please enter you city" />
        
          <input type="submit" value=" Submit " name="Submit entry" />
        
        </form>       
      </div>

      <div id="entertainment">
        <iframe src="https://www.youtube.com/embed/kmPdjfg1_YY?autoplay=1" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://www.youtube.com/embed/_PTCd62EkBg" frameborder="0" allowfullscreen></iframe>
      </div>

    </div>



  </body>
</html>
