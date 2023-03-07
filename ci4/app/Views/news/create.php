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
<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="create" method="post">
    <?= csrf_field() ?>

    <p>Name</p>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <p>Comment</p>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Submit">
</form>
