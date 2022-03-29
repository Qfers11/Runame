<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <link rel="stylesheet" href="Register.css">
  <div class="container mt-4">

     <?php
              if($_COOKIE['user'] == ''):
              ?>





      <div class="row">
          <div class="col">

      <div class="row">
           <div class="col">

<img src="image/lapk2.png" style="
    position: fixed;
    top: 530px;
    left: 720px;
    height:250px;
    z-index:9999;
">

    <form action="validation-form/check.php" method="post"style="
                                                                        position: fixed;
                                                                        left: 720px;
                                                                        padding-bottom:100px;
                                                                        padding-top:20px;
                                                                        top:30px;
                                                                        padding-top:120px;
                                                                    ">
                   <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин" style="
                       position: fixed;
                       padding-left: 10px;
                       top: 200px;
                       left: 730px;
                   "><br>
                   <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" style="
                       position: fixed;
                       top: 290px;
                       left: 730px;
                       padding-left: 10px;
                   "><br>
                  <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль" style="
                      position: fixed;
                      top: 380px;
                      padding-left:10px;
                      left:730px;
                  "><br>
                   <button class="btn btn-success" type="submit" style="
                         position: fixed;
                         top: 500px;
                         left:730px;
                     ">Зарегистрироваться</button>
                </form>
     </div>
     <h1 style="
                          color: white;
                          top: 50px;
                          left: 790px;
                          position: fixed;
                      ">Зарегистрироваться</h1>


                                 <button onclick="window.location.href = 'http://localhost/11.php';" style="
                                                                position: fixed;
                                                                top: 500px;
                                                                left: 970px;
                                                            ">Авторизоваться</button>

    </div>
          <div class="col">

       <form action="validation-form/auth.php" method="post" style="
               all: unset;
           ">

             <?php else: ?>
                      <p>Привет <?=$_COOKIE['user']?>. Что бы выйти нажмите <a
                      href="exit.php">здесь</a>.</p>
                    <?php endif;?>

                             </form>




       </body>
   </div>
   </div>
</body>
</html>