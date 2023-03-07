<!DOCTYPE html>
<html>
<head>
  <title>Personal Website</title>
  <link rel="icon" type="image/x - icon" href="weblogo.png">
<style>
body{
  background-color: rgb(19, 19, 19);
}
h1{
  color: white;
  font-family: Franklin Gothic Medium;
  text-align: right;
  font-size: 10px;
  margin-top: 50px;
}
h2{
  color: rgb(34, 151, 235);
  font-family: Franklin Gothic Medium;
  text-align: center;
  font-size: 40px;
  margin-top: 50px;
}
p{
  color: white;
  font-family: Times New Roman;
  font-size: 20px;
}

</style>
</head>
<body>
<h1 id = "time"></h1>
<h2>Aaron Gabriel Suarez</h2>
<p id = "name"></p>
<p>Studying Bachelor of Science in Computer Science-Cyber Security and Forensics at Asia Pacific College</p>
<p>Finished Senior High School at AMA Binan Laguna</p>
<p>Finished Junior High School at Paharang Integrated School at Batangas City</p>
<p id = "random"></p>
<p id = "body"></p>
<script>
	sadfjasdlghsadhgaweoirfwerwqqrwerqwetewdfasdf
  const hour = new Date().getHours();
  let greeting;
  if (hour < 18) {
    greeting = "Good Morning";
  } else {
    greeting = "Good Evening";
  }

  let name = "Visitors";
  window.alert(greeting +" "+ name);
  document.getElementById("name").innerHTML = greeting +" "+ name;
  
  const a = new Date();
  document.getElementById("time").innerHTML = a;

  document.getElementById("random").innerHTML = "My favorite number is " + (Math.ceil(Math.random()*50));

  const body = {
    height: 160,
    weight: 49,
    mybody: function(){return "my height is " + this.height + " centimeters " + "and " + "my weight is " + this.weight + " kilograms ";}
  };

  document.getElementById("body").innerHTML = body.mybody();

  const anime = new Set(["My hero academia", "One Piece", "Tokyo Revengers", "Attack on Titan"]);
  const Movie = new Set(["IT", "Avengers", "Pixels", "Harry Potter"]);
  const VGames = new Set(["Valorant", "Overwatch2", "GTAV", "Genshin Impact"]);

  document.getElementById("anime").innerHTML = "Watching Anime:" + anime.size;
  document.getElementById("movie").innerHTML = "Watching Movie:" + Movie.size;
  document.getElementById("Games").innerHTML = "Playing Video Games:" + VGames.size;

  let myname = '{"names":[' + '{"firstname" : "Aaron Gabriel, "lastname" : "Suarez"}]}';
  const object = JSON.parse(text);
  document.getElementById("myname").innerHTML = object.names[0].firstname + " " + object.names[0].lastname;

</script>
</body>
</html>
<?php
// define variables and set to empty values
$nameErr = $emailErr =  "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Guest Form</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <p>Name:</p>
  <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  <p>Email:</p>
  <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <p>Comment:</p> 
  <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo "<p>$name</p>";
echo "<br>";
echo "<p>$email</p>";
echo "<br>";
echo "<p>$comment</p>";
?>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Mydb";
	
	// Create connection
  //test
  //test
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO alsuarez_myguests (name, email, comment)
	VALUES ('$name', '$email','$comment')";
	
	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}
?>
