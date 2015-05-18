<!DOCTYPE html>
<html>
<head>
        <title>Cadastro AdotPET</title>
        <?php echo $this->Html->css(array('bootstrap', 'component', 'font-awesome.min', 'style')); ?>
        <?php echo $this->Html->script(array('jquery.min', 'move-top', 'easing', 'responsiveslides.min', 'move-top', 'js', 'easing')); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- Google font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    </head>
    <body>
    <?php 
        $flash = $this->Session->flash();
        if (!empty($flash)) {
          echo '<div class="alert alert-info col-md-4 pull-right">'.$flash.'</div>';
        }
      ?>
        <!-- header -->
        <header>
            <div class="header-top">
                <div class="container">
                    <p class="social-media">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </p>
                    <p class="phonenum">Atendimento: 0800-9999-999</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="logo">
                        <a href="index.html"><?php echo $this->Html->image('logo.png'); ?></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- register -->
        <section class="container" id="register">
            <div class="row">

                <div class="col-md-12">
                <br />
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </section>
        <!-- footer -->
        <footer>
            <div class="container">
                <p style="color:#fff; text-align:center;">Copyright  <a href="#" style="color:#fff;">ADOTPET</a></p>
                <div class="clearfix"></div>
            </div>
        </footer>
        <script type="text/javascript">
            $(document).ready(function() {
                /*
                var defaults = {
                      containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear'
                 };
                */

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
    </body>
</html>
