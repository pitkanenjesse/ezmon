<!DOCTYPE html>
<!-- Página de login do sistema-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Ezmon server</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href=bootstrap.min.css rel="stylesheet">
    <style type="text/css">
        h2   {color:white}

p    {color:white}



body, html {

    height: 100%;

    background-repeat: no-repeat;

    /*background-image: linear-gradient(135deg, rgba(31,123,229,1) 0%, rgba(58,139,232,1) 47%, rgba(70,153,234,1) 92%, rgba(72,156,234,1) 100%);*/

    background-image: url("1777799.jpg"); 

    background-size: 100% 100%;

}



.card-container.card {

    width: 350px;

    padding: 40px 40px;

}



.btn {

    font-weight: 700;

    height: 36px;

    -moz-user-select: none;

    -webkit-user-select: none;

    user-select: none;

    cursor: default;

}



/*

 * Card component

 */

.card {

    background-color: #F7F7F7;

    /* just in case there no content*/

    padding: 20px 25px 30px;

    margin: 0 auto 25px;

    margin-top: 50px;

    /* shadows and rounded borders */

    -moz-border-radius: 2px;

    -webkit-border-radius: 2px;

    border-radius: 2px;

    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}



.profile-img-card {

    width: 96px;

    height: 96px;

    margin: 0 auto 10px;

    display: block;

    -moz-border-radius: 50%;

    -webkit-border-radius: 50%;

    border-radius: 50%;

}



/*

 * Form styles

 */

.profile-name-card {

    font-size: 16px;

    font-weight: bold;

    text-align: center;

    margin: 10px 0 0;

    min-height: 1em;

}



.reauth-email {

    display: block;

    color: #404040;

    line-height: 2;

    margin-bottom: 10px;

    font-size: 14px;

    text-align: center;

    overflow: hidden;

    text-overflow: ellipsis;

    white-space: nowrap;

    -moz-box-sizing: border-box;

    -webkit-box-sizing: border-box;

    box-sizing: border-box;

}



.form-signin #inputEmail,

.form-signin #inputPassword {

    direction: ltr;

    height: 44px;

    font-size: 16px;

}



.form-signin input[type=email],

.form-signin input[type=password],

.form-signin input[type=text],

.form-signin button {

    width: 100%;

    display: block;

    margin-bottom: 10px;

    z-index: 1;

    position: relative;

    -moz-box-sizing: border-box;

    -webkit-box-sizing: border-box;

    box-sizing: border-box;

}



.form-signin .form-control:focus {

    border-color: rgb(104, 145, 162);

    outline: 0;

    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);

    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);

}



.btn.btn-signin {

    /*background-color: #4d90fe; */

    /*background-color: rgb(104, 145, 162);

    / background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/

    padding: 0px;

    font-weight: 700;

    font-size: 14px;

    height: 36px;

    -moz-border-radius: 3px;

    -webkit-border-radius: 3px;

    border-radius: 3px;

    border: none;

    -o-transition: all 0.218s;

    -moz-transition: all 0.218s;

    -webkit-transition: all 0.218s;

    transition: all 0.218s;

}





.forgot-password {

    color: rgb(104, 145, 162);

}



.forgot-password:hover,

.forgot-password:active,

.forgot-password:focus{

    color: rgb(12, 97, 33);

}
    </style>
    <script src="jquery-1.11.1.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>
<p align=center><font size=12>EZMON<font><p>

<p align=center><font size=6>Sistema de monitoramento e gerenciamento de servidores Linux.</font></p>





    <div class="container">

        <div class="card card-container">

            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->


            <p id="profile-name" class="profile-name-card"></p>

            <form method="post" action="valida.php" class="form-signin">

                <span id="reauth-email" class="reauth-email"></span>

                <input type="text" name="usuario" id="inputEmail" class="from-control" placeholder="Usuário" required autofocus>

                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>

                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit" value="Entrar">Iniciar Sessão</button>

            </form><!-- /form -->


            </a>

        </div><!-- /card-container -->

    </div><!-- /container -->
<script type="text/javascript">

</script>
</body>
</html>