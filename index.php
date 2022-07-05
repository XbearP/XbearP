<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->

<head>

    <title>医院重点实验室无人化管理及服务平台设计</title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

</head>
<!-- //Head -->

<!-- Body -->

<body>

    <section class="main">
        <div class="bottom-grid">
            <div class="logo">
                <h1> <a href="index.php"> 医院重点实验室无人化管理及服务平台设计</a></h1>
            </div>
        </div>
        <!-- register -->
        <div class="w3lhny-register">
            <div class="iconhny">
               <span class="fa fa-user-plus"></span>
             </div>
            <formaction="#" method="post" class="register-form">
            <form class="layui-form" action="php/password.php" method="post" >
                <fieldset>
                    <div class="form">
                        <div class="form-row">
                            <span class="fa fa-user"></span>
                           
                            <input type="text" class="form-text" name="username" placeholder="姓名" required="">
                        </div> <!-- 登录 -->
                        <div class="form-row">
                            <span class="fa fa-envelope"></span>
                            
                            <select type="email" class="form-text" placeholder="Email Address" required="">


                                <option value ="volvo">学生</option>

                                <option value ="saab">用户</option>

                                <option value="opel">管理员</option>



                            </select>
                        </div><!-- 用户选择-->
                        <div class="form-row">
                            <span class="fa fa-lock"></span>
                            
                            <input type="password" class="form-text" name="password" placeholder="密码" required="">
                        </div><!-- 密码-->
                        <div class="form-row button-login">
                            <button class="btn btn-login">登录</button>
<!--                            <span >注册</span>-->
                            <a href="register.php" style='color:white'>注册</a>


                        </div>
                    </div>
                 </fieldset>
            </form>

              <span class="create-account">成都信息工程大学</span>


        </div>
        <!-- //register -->

    </section>

</body>
<!-- //Body -->

</html>