<?php 
session_start();
// Abrindo a $_SESSION referente ao tipo de usuário
// Se o usuario for regular, ele será 0
// VIP = 1
// Master VIP = 2
// Cada um desses terá um nº de anúncios diários diferentes.


// incluir o tipo de usuário no banco de dados também
require_once "../conn.php";
?>

<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Ganhar dinheiro
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://recargabr.xyz" class="simple-text logo-normal">
          Social Grana
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item  ">
            <a class="nav-link" href="dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Painel de Controle</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="perfil_usuario.php">
              <i class="material-icons">person</i>
              <p>Perfil de Usuario</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="user_refferals.php">
              <i class="material-icons">content_paste</i>
              <p>Referências</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="ads.php">
              <i class="material-icons">public</i>
              <p>Ganhar Dinheiro</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="withdraw.php">
              <i class="material-icons">account_balance_wallet</i>
              <p>Sacar Dinheiro</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="logout.php">
              <i class="material-icons">logout</i>
              <p>Logout</p>
            </a>
          </li>
          
          
          <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Ganhar Dinheiro</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                
                  
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
           
              <?php 
                $sql = "SELECT * FROM anuncios" ;
              ?>
              
            
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title"><b>Seja ativo e ganhe dinheiro todos os dias!</b></h4>
              <p class="card-category">Basta clicar e assistir a todos os anúncios abaixo.
                
              </p>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <h4 class="card-title"><b>Anúncios Mínimos de R$ 0,01</b></h4>
                  <div class="alert alert-success">
                    <span>
                      <?php 
                        // $result = $conn->query($sql);
                      // if(isset($_SESSION['logado'])){
                          // if($result = ){
                            // while($row = $result -> fetchassoc()){
                            //}                         
                          //}
                        //}
                        echo 
                        "<a href='#'>" .
                        "As melhores notícias do Brasil e do Mundo (1)" . "<i class='material-icons'>" ."work". "</i>"."</a>";
                      ?>
                    
                    </span>
                  </div>
                  <div class="alert alert-success">
                    <button type="button" class="close">
                     
                    </button>
                    <span>BaixaTudo.club (2)</span>
                  </div>
                  <div class="alert alert-success" data-notify="container">
                    
                    <button type="button" class="close">
                     
                    </button>
                    <span data-notify="message">
                        <?php ?>
                    Responda essas perguntas </span>
                  </div>
                  <div class="alert alert-success">
                    
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      
                    </button>
                    <span data-notify="message"> Veja mais vídeos e anúncios e ganhe muito mais com nosso sistema.</span>
                  </div>
                </div>
                <div class="col-md-6">
                  <h4 class="card-title"><b>Anúncios Médios de R$ 0,02</b></h4>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                    </button>
                    <span>
                       <b> Questionário I </b>  </span>
                  </div>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                    </button>
                    <span>
                      <b> Questionário II - </b> Reserve um tempo e responda as perguntas</span>
                  </div>
                  <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">
                    </button>
                    <span>
                      <b> Questionário III - </b> Responda mais essas perguntas aqui sobre algo</span>
                  </div>
                  <div class="alert alert-success">
                    <button type="button" class="close">
                     
                    </button>
                    <span>
                      <b> Questionário IV </b> O que você acha dessas marcas ?</span>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="places-buttons">
                <div class="row">
                  <div class="col-md-6 ml-auto mr-auto text-center">
                    <h4 class="card-title">
                     <b> Anúncios Grandes de R$ 0,10 </b>
                      <?php // Após esses anúncios serem visualizados
                      // Trocar a classe dos botões para default
                      
                      ?>
                      <p class="category">Clique em qualquer caixinha abaixo para assistir</p>
                    </h4>
                  </div>
                </div>

                <!--Reutilizar a classe rol e col na página withdraw.php -->
                <div class="row">
                  <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-success btn-block" onclick="md.showNotification('top','left')">Sabonete íntimo Palmolive</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-success btn-block" onclick="md.showNotification('top','center')">Ganhe 1000 Reais por mês de forma passiva!</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-success btn-block" onclick="md.showNotification('top','right')">Investimento HYIP BitcoinNow!</button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8 col-md-10 ml-auto mr-auto">
                    <div class="row">
                      <div class="col-md-4">
                        <button class="btn btn-success btn-block" onclick="md.showNotification('bottom','left')">Veja este anúncio I</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-success btn-block" onclick="md.showNotification('bottom','center')">Assista mais esse aqui II</button>
                      </div>
                      <div class="col-md-4">
                        <button class="btn btn-success btn-block" onclick="md.showNotification('bottom','right')">E mais este III</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php // include_once "footer.php"?>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
  
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
 
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
</body>

</html>