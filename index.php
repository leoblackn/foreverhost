<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Live Eid Mubark</title>

</head>
<body>
    <form method="post">
    	 
    	 <label>Nickname</label><br>
    	 <input type="text" name="nick"><br>
    	 <label>Comment</label><br>
    	 <textarea cols="45" rows="5" name="comment"></textarea><br>
    	 <button type="submit" name="upload">Post Now !</button>

    </form>
    <?php 
 

  $localhost = "localhost";
  $user = "root";
  $pass = "";
  $room = "eid";

   $connect = mysqli_connect($localhost,$user,$pass,$room);


  $nickname = @ $_POST['nick'] ;
  $comment = @ $_POST['comment'];

  if (isset($_POST['upload'])) {
  	  
  	  $sql = "INSERT INTO eidmb (nickname , comment) VALUES ('$nickname' , '$comment')";
  	  mysqli_query($connect,$sql);
       
        echo "تم ارسال رسالتك الان الي جاد محمد في انتظارك العيد القادم  <br>" ;
         
        
        
  }




 ?>


<br><hr>


<?php 
 
  $sqlget = "SELECT nickname , comment FROM eidmb";
  $result = $connect->query($sqlget);

  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  " - اسمي: ". $row["nickname"]. " - الرساله : " . $row["comment"] . "<br><hr>";
    }
}

?>

</body>
</html>

