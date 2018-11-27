<html>
<head>
<title>Удаление комментариев</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script type="text/javascript" src="../js/goback.js"></script>
</head>
<body style="background-color:#Fefefe;overflow-x:hidden;"">
 <header> <!-- Banner, divided to 3 equal parts-->
    <div class="container">
      <div class="row">
        <div class="col-sm-4 logotype">
          <img src="../images/322.jpg" alt="Logo"  style="width:100%"class="img-responsive">
        </div>
        <div class="col-sm-4 descript text-center" style="margin-top:30px;">
          <h2 style="font-size:40px; color:#666666;"><b>Кафе Кыпшак</b></h2>
        </div>
        <div class="col-sm-4 phone_number">
          <h2 style="text-align:right;">+7 777 497 5757</h2>
                 <p class="anim" id="anima">&mdash; Контакт &mdash;</p>
        </div>
      </div>
    </div>
  </header>
  <!--Horizontal navigation bar-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>        
      </button>
      <a class="navbar-brand" href="#"; style="font-family:Astakhov Dished; font-size:170%; color:#FFF8DC"> <i class="glyphicon glyphicon-cutlery" style="font-size:80%";></i>  Кыпшак </a> 
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"> 
        <li><a href="../index.php"><i class="fa fa-bars"></i> Главная</a></li>
        <li><a href="../menu/menu.php"><i class="glyphicon glyphicon-glass"></i> Меню  </a></li>
    <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
        <li><a href="../booking/customer_details.php"><i class="glyphicon glyphicon-cutlery"></i> Бронирование</a></li>
     <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
      <li><a href="#Contacts"><i class="glyphicon glyphicon-envelope"></i> Контакты</a></li>
    <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li>
        <li><a href="../comment/comment.php"><i class="glyphicon glyphicon-thumbs-up"></i> Отзывы</a></li>
      <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li> 
      <li><a href="../aboutus/aboutus.php"><i class="glyphicon glyphicon-certificate"></i> О нас</a></li>
          <li><a>  <img src=../images/png.png style="height: 20px; width: 25px;"> </a></li> 
       <li><a href="admin.php"><i class=" glyphicon glyphicon-cog"></i> Страница администратора </a></li>
  </div>
</nav>
<div class="container"> 
    <div style="width:700px; margin:0 auto;">
	 <h3 style="font-size:30px;padding:10px;"> Список комментариев </h3>
<?php
//link to database
require("db.php");
$result = mysqli_query($con, "SELECT * FROM customers_feedback ORDER BY comment_id ASC");
//display all comments from base to administrator in order to delete
while($row=mysqli_fetch_array($result)){
$comment_date=$row['comment_date_publish'];
$comment_date = date( "m/d/Y", strtotime($comment_date)); //convert date and time to only show month, day, and year
echo "<div class='comments_content'>";
echo "<h3> <a style='color:red;font-size:42px;margin-left:600px;' href='delete_comment.php? comment_id=".$row['comment_id']."'> <span class='glyphicon glyphicon-remove-circle'> </a></h3>";
echo "<h4 style='font-size:14px;
  font-family:Verdana, Geneva, sans-serif; text-decoration:none; float:right; padding:4px;  
  border: 3.5px solid transparent; border-image: url(border.jpg) 30 round; background-color:white;color:black !important;'>     <span class='glyphicon glyphicon-calendar'></span> Дата публикации:  " . $comment_date . "</h4>";
echo "<h3 style='border-bottom: 2px solid black;text-align:center;'>" . $row['comment_author'] . "</h3>"; 
echo "<h3 style=' border: 10px solid transparent;font-size:15px;  
    padding: 15px;border-image: url(border.png) 30 round;background-color:#fefefe;'>" .$row['comment_text'] . "</h3>";
echo "</div>";
} 
mysqli_close($con);

?>
 <button onclick="goBack()" type="submit" class="btn-danger"> <span class="glyphicon glyphicon-remove"></span> Назад</button>
</div>
</div>

</body>
</html>