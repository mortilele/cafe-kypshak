<!DOCTYPE html>
<html lang="en">
<head>
  <title>Страница Администратора</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../images/logo2.png" type="image/x-icon"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
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
       <li class="active"><a href="admin.php"><i class=" glyphicon glyphicon-cog"></i> Страница администратора </a></li>

    </ul>
  </div>
</nav>
<script>

  function postSubmit(){
    if(formpost.post_title.value == '' && formpost.post_text.value == ''){ 
	//exit if one of the field is blank
      alert('Enter your message !');
      return;
    }
    var post_title = formpost.post_title.value;
    var post_text = formpost.post_text.value;
    var xmlhttp = new XMLHttpRequest(); 
	//http request instance
    
    xmlhttp.onreadystatechange = function(){ 
	//display the content of postlogs.php once successfully loaded
      if(xmlhttp.readyState==4&&xmlhttp.status==200){
        document.getElementById('comment_logs').innerHTML = xmlhttp.responseText; 
		//the postlogs from the db will be displayed inside the div section
      }
    }
    xmlhttp.open('GET', 'insertpost.php?post_title='+post_title+'&post_text='+post_text, true);
	//open and send http request
    xmlhttp.send();
  }
    
</script>
<div class="col-md-2">
<!--Admin management vertical navigation bar-->
<ul class="admin">
  <li class="admin"><form action="admin_user.php"> <button class="adminbtn" type="submit">Изменить пользователя<span class="glyphicon glyphicon-trash"></button></li></form>
  <li class="admin"><form action="admin_book.php"> <button class="adminbtn" type="submit">Изменить бронь <span class="glyphicon glyphicon-trash"></button></li></form>
  <li class="admin"><form action="admin_delete_comment.php"> <button class="adminbtn" type="submit">Удалить комментарий  <span class="glyphicon glyphicon-trash"></button></li></form>
  <li class="admin"><form action="admin_post.php"> <button class="adminbtn" type="submit">Изменить пост <span class="glyphicon glyphicon-trash"></button></li></form>
  <li class="admin"><form action="admin_menu.php"> <button class="adminbtn" type="submit">Изменить блюда <span class="glyphicon glyphicon-trash"></button></li></form>
  <li class="admin"><form action="../registration/logout.php"> <button class="adminbtn exit" type="submit">Выйти</button></li></form>
</ul>
</div>
  <form name="formpost">
    <div class="col-md-8" style="margin-left: 70px">
  <h3 style="font-size:30px;text-align:center;padding:10px;"> Добавить пост </h3>
        <div class="col-sm-12 well">
          <input style=" display: block; margin : 0 auto;text-align:center;width:400px;padding:5px;" id="post_title" name="post_title" placeholder="Название поста" type="text">
        </div>
      <textarea class="form-control" id="post_text" name="post_text" placeholder="Текст поста" rows="5"></textarea> </br> 
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit" onClick="postSubmit()">  Отправить <span class="glyphicon glyphicon-send"></span></button>
        </div>
    </div>
  </form>
<form role="form" action="save_food" method="POST">
  <h3 style="font-size:30px;text-align:center;padding:10px;"> Добавить блюдо </h3>
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" name="food_name" placeholder="Название блюда"  type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" name="food_price" placeholder="Цена"  type="number" required>
        </div>
      </div>
      <textarea class="form-control" name="food_description" placeholder="Описание блюда" rows="2"></textarea> </br> 
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">  Добавить <span class="glyphicon glyphicon-comment"></span></button>
        </div>
    </div>
  </form>  

<!--footer contacts form divided to google maps and contact list-->
<footer style="background:#fff; padding-top:5px; padding-bottom:20px;">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>ТОО "Кыпшак" Кафе</h5>
      </div>
      <div class="col-md-4">	
        <h5 style="text-align:center;">Казахстан, Кызылорда 2017</h5>
      </div>
      <div class="col-md-4">
        <h5 style="text-align:right;" >Сайт разработчика  <a href="#">Martian</a></h5>
       
      </div>
    </div>
  </div>
</footer>


</body>
</html>