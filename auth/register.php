<?php
session_start();
// Include config file
require_once "../conn.php";

$username = "";
$userpass = "";


?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/paper_img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Crie sua conta</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <link href="../bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/ct-paper.css" rel="stylesheet"/>
    <link href="../assets/css/demo.css" rel="stylesheet" /> 
    <link href="../assets/css/examples.css" rel="stylesheet" /> 
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
</head>
<body>


<nav class="navbar navbar-ct-transparent navbar-fixed-top" role="navigation-demo" id="register-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="www.creative-tim.com">RecargaBR</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#" class="btn btn-simple">Suporte técnico</a>
            </li>
            <li>
                <a href="#" class="btn btn-simple">Financeiro</a>
            </li>
            <li>
                <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#" target="_blank" class="btn btn-simple"><i class="fa fa-facebook"></i></a>
            </li>
           </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav> 
    <?php 
       

       
    ?>
   


    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">

                                <h3 class="title">Bem vindo!</h3>

                                <form class="register-form" action="verify_register.php" method="POST">

                                


                                    <label>Seu Email</label>

                                    <input type="text" class="form-control" name="username" value="<?php echo $username; ?>">

                                    

                                    <label>Sua senha</label>

                                    <input type="password" name="userpass" class="form-control" value="<?php echo $userpass;?>">
                                    <br>
                                    <label>Seu código de referência (Não é obrigatório)</label>

                                    <input type="text" name="" class="form-control" value="">
                                    <br>
                                    <div class="g-recaptcha" data-sitekey="6LdSWuQUAAAAABVRvlTwZzEvHQw88Pbykt14jLw6"></div>




                                    
                                    <button type="submit" name="reg_user" class="btn btn-fill btn-info btn-block">Criar conta</button>
                                </form>
                                
                                <?php 

                                    
                            
                                ?>

                            </div>
                        </div>
                    </div>
                </div>     
            <div class="footer register-footer text-center">
                    <h6>&copy; 2015, made with <i class="fa fa-heart heart"></i> by Creative Tim & Patrik Souza</h6>
            </div>
        </div>
    </div>      

</body>

<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

<script src="../bootstrap3/js/bootstrap.js" type="text/javascript"></script>

<!--  Plugins -->
<script src="../assets/js/ct-paper-checkbox.js"></script>
<script src="../assets/js/ct-paper-radio.js"></script>
<script src="../assets/js/bootstrap-select.js"></script>
<script src="../assets/js/bootstrap-datepicker.js"></script>

<script src="../assets/js/ct-paper.js"></script>

</body>
</html>


