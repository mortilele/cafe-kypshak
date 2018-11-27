<style>
/* Ibrahim Jabbari -- www.ibrahimjabbari.com */
@import url(https://fonts.googleapis.com/css?family=Arvo:700);
@import url(https://fonts.googleapis.com/css?family=Seaweed+Script);

.postcontent {
  width: 800px;
  margin: 10% auto;
}
.post {
  color: black;
  font-family: Arvo;
  font-weight: bold;
  line-height: 1.4em;
  letter-spacing: 0.009em;
  transform: scaleY(0.7);
  -webkit-transform: scaleY(0.7);
  -moz-transform: scaleY(0.7);
  margin:0;
  text-align: center;
  font-size: 20px;
}
.posttitle {
  font-family: "Franklin Gothic Medium";
  color: #000;
  text-align: center;
  font-size: 20px;
  position: relative;
  margin:0;
}
.posttitle span {
  background-color: #fff;
  padding: 0 0.3em;	
}
.posttitle:before {
  content:"";
  display: block;
  position: absolute;
  z-index:-1;
  top: 50%;
  width: 100%;
  border-bottom: 3px solid #222;
}

</style>
<?php

$con=mysqli_connect("localhost","cafe_kypshak","kypshak_cafe","cafe_kypshak");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }	
$result = mysqli_query($con, "SELECT * FROM post_content ORDER BY post_id ASC");
while($row=mysqli_fetch_array($result)){
	 $post_date=$row['post_date_published'];
$post_date = date( "m/d/Y", strtotime($post_date));

echo "<div class='postcontent'>";
echo "<p class='posttitle'> <span>" . $row['post_title'] . "</span> </p>";	
echo "<p class='post'>" . $row['post_text'] . "</p>";
    echo "<p class='posttitle'>     <span class='glyphicon glyphicon-calendar'> Дата публикации: ". $post_date  . "<span> </p>";
echo "</div>";

}	
mysqli_close($con);

?>