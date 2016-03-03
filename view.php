<html>
  <head>
    <title>GIT Tutorial</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div id="main">
      <h1>GIT Tutorial</h1>
	  <h6> Have fun Michiel, Ruud, Roy and Rens!</h6>
      <div id="login">
        <h2>Student&#39;s Form</h2>
        <hr />
        <form action="" method="post">
        <label>Student Name :</label>
        <input type="text" name="stu_name" id="name" required="required" placeholder="Please Enter Name" />
        <br />
        <br />
        <label>Student Email :</label>
        <input type="email" name="stu_email" id="email" required="required" placeholder="john123@gmail.com" />
        <br />
        <br />
        <label>Student City :</label>
        <input type="text" name="stu_city" id="city" required="required" placeholder="Please Enter Your City" />
        <br />
        <br />
        <input type="submit" value=" Submit " name="submit" />
        <br /></form>
		<br />
		<a href="https://www.youtube.com/watch?v=0fKg7e37bQE"><img src="youtube.png" title="GIT Tutorial" height="60" width="90"><br />
        </a>
      </div>
      <!-- Right side div -->
    </div>
	
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
  </body>
</html>
