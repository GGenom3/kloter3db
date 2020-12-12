<html>
<head><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
  	<div class="container">
  		<div class="row">
    		<div class="col-sm">
      			<h2>DW Employee</h2>
    		</div>
    	
  		</div>
	</div>
	

<div>
	
     <?php 
$host     ="localhost";
$user     ="Genom3";
$password ="some_pass";
$database ="kloter3";
$koneksi  =mysqli_connect($host, $user, $password, $database);

$result = mysqli_query($koneksi, "SELECT * FROM user_tb");
$result2 = mysqli_query($koneksi, "SELECT * FROM skill_tb");
while($user_data = mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>",$user_data['name']."</td>";
  echo "<td>",$user_data['id']."</td><br>";
} 
while($user_data2 = mysqli_fetch_array($result2)){
  echo "<tr>";
  echo "<td>",$user_data2['name']."</td>";
} 
            ?>


    <br/><br/>

    <form action="index.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>skill</td>
                <td><input type="text" name="skill"></td>
            </tr>
            <tr> 
                <tr>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
            </tr>
        </table>
    </form>

    <?php
    $host     ="localhost";
$user     ="Genom3";
$password ="some_pass";
$database ="kloter3";
$koneksi  =mysqli_connect($host, $user, $password, $database);

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $skill = $_POST['skill'];

        $result3 = mysqli_query($koneksi, "INSERT INTO user_tb(name) VALUES('$name')");
        $result4 = mysqli_query($koneksi, "INSERT INTO skill_tb(skill) VALUES('$name')");
           
    }
    ?>
   
</div>
</body>
</html>