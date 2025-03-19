<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="iso-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tessaroline">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>CompLog Tecnologia e Eccomerce</title>

    <!--
    * Google Fonts
    //-->
    <link href='../../assets/fonts/proxima/stylesheet.css' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="../../assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../../assets/css/colorbox-skins/4/colorbox.css" type="text/css">
    <link href="../../assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/settings.css" rel="stylesheet" type="text/css">

    <link href="../../assets/css/header/h1.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/responsive.css" rel="stylesheet" type="text/css">
    <link href="../../assets/css/color1.css" rel="stylesheet" type="text/css" id="site-color">
    <link href="../../assets/css/rivathemes.css" rel="stylesheet" type="text/css">
    
    
    
		
    <!-- LayerSlider styles -->
    <link rel="stylesheet" href="../../assets/css/layerslider/css/layerslider.css" type="text/css">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../js/vendor/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../../assets/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>

  <body>
<div class="boxed-bg"><div class="boxed"><div class="boxed-wrapper">
  

    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->
    <!--

    Scroll to the top

    //-->
    <div id="to-the-top"><i class="fa fa-chevron-up"></i></div>
    <!--

    Image Preload

    //-->
    <div id="preload">
      <span>Carregando<br>Aguarde ...</span>
      <i class="fa fa-cog fa-spin"></i>
      <p></p>
    </div>
    <!--

    Envor mobile menu start

    //-->
    <i class="glyphicon glyphicon-align-justify" id="mobile-menu-btn"></i>
    <?php include("../includes/mobile_nav.inc.php"); ?>

    <!--

    Envor header start

    //-->
    <header class="header  header-1" id="header">
      <!--

      Top bar start

      //-->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!--

              Contact information start

              //-->
              <?php include("../includes/contact.inc.php"); ?>
              <!--

              Contact information end

              //-->

              <!--

              Social Buttons start

              //-->
              <?php include("../includes/social.inc.php"); ?>
              <!--

              Social Buttons end

              //-->
            </div>
          </div>
        </div>
      <!--

      Top bar end

      //-->
      </div>
      <!--

      Logo & Menu start

      //-->
      <div class="header-bg" id="header-menu">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="relative">
               <!--

                Site Logo start

                //-->
                <?php include("../includes/logo.inc.php"); ?>
                <!--
				
                Desktop Menu start

                //-->
                <?php include("../includes/nav_menu.inc.php"); ?>

              </div>
            </div>
          </div>
        </div>
      <!--

      Logo & Menu end

      //-->
      </div>
    <!--

    Envor header end

    //-->
    </header>
    <!--

    Envor site content start

    //-->
    <div class="content">
      <!--

      Page Title start

      //-->
      <section class="page-title-1 contact" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9">
              <h1>Fale <strong>Conosco</strong></h1>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <!-- <form class="search">
                <input type="text" placeholder="type to search...">
              </form> -->
            </div>
          </div>
        </div>
      <!--

      Page Title end

      //-->
      </section>


      <!--

      Mobile breadscrubs end

      //-->
      </section>

	
    <!--

      Main Content start

      //-->
      <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <p>Solicite um orçamento, nos mande seus elogios, criticas ou sugestões.</p>
              <p>&nbsp;</p>
              
              <section id="contact" >
                	
                    <?php
			
					if(isset($_GET['chk']) && $_GET['chk']==1){
						echo '<div class="text-center"><div class="alert alert-success" role="alert">Seu contato foi enviado com sucesso</div></div>';
					}
					
					?>
                
                    
                    <form action="mail.php" method="post" onSubmit="return checa_formulario(this)" name="email" class="f1">

                      <p><label for="snome">Nome</label><input type="text" name="snome" id="snome" class="col-lg-7"></p>
                      
                      <p><label for="semail">E-mail</label><input type="text" name="semail" id="semail" class="col-lg-7"></p>
                      
                      <p><label for="stelefone">Telefone</label><input type="text" name="stelefone" id="stelefone"></p>
                      
                      <p><label for="sassunto">Assunto</label><input type="text" name="sassunto" id="sassunto" class="col-lg-7"></p>

                      <p><label for="smensagem">Mensagem</label>
                        <textarea id="smensagem" name="smensagem" rows="4" class="col-lg-7"></textarea>
                      </p>
                      
                      <p><button type="submit" class="btn  btn-normal  btn-primary">Enviar</button></p>
                    </form>
                
                  </section>
              
            </div>

          </div>
        </div>
      <!--

      Main Content start

      //-->
      </section>




    <!--

    Envor site content end

    //-->
    </div>
    <!--

    Envor footer start

    //-->
    <?php include("../includes/footer.inc.php"); ?>
    
    </div>
   </div>
  </div>
	


    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the About Company load faster -->
    <script src="../../assets/js/vendor/jquery-1.11.0.min.js"></script>
    <script src="../../assets/js/vendor/core-1.0.5.js"></script>

    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="../../assets/js/jquery.mousewheel.min.js"></script>
    <script src="../../assets/js/jquery.colorbox-min.js"></script>
    <script src="../../assets/js/preloadCssImages.jQuery_v5.js"></script>
    <script src="../../assets/js/jquery.stellar.min.js"></script>
	<script src="../../assets/js/masonry.pkgd.min.js"></script>
	<script src="../../assets/js/imagesloaded.pkgd.min.js"></script>
    
    <!--
    * jQuery with jQuery Easing, and jQuery Transit JS
    //-->
    <script src="../../assets/js/layerslider/jquery-easing-1.3.js" type="text/javascript"></script>
    <script src="../../assets/js/layerslider/jquery-transit-modified.js" type="text/javascript"></script>
    <!--
    * LayerSlider from Kreatura Media with Transitions
    -->
    <script src="../../assets/js/layerslider/layerslider.transitions.js" type="text/javascript"></script>
    <script src="../../assets/js/layerslider/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    <script src="../../assets/js/jquery.rivathemes.js"></script>
            <script type="text/javascript">
            $('document').ready(function() {
			  var $container = $('body');
			  $container.imagesLoaded( function() {
				/*
	
				Footer News Slider
	
				*/
				$('#footer-news').rivaSlider({
				  visible : 1,
				  selector : 'envor-post-preview'
				});
				$('#preload').hide();
			  });
		  });
		  
		  
		  function checa_formulario(email){
	
			if (email.snome.value == "") {
				alert("Preencha o campo \"Nome\".");
				email.snome.focus();
				return (false);
			}
			
			if (email.stelefone.value == "") {
				alert("Preencha o campo \"Telefone\".");
				email.stelefone.focus();
				return (false);
			}
		
			// -------------------------
			// Verifica o Campo Email
			// -------------------------
			if(email.semail.value=="")
			{alert("Preencha o campo \"E-mail\".")
				email.semail.focus();
				return (false);
			}
			emaildig=email.semail.value
			if (emaildig.indexOf("@",2)==-1)
				{alert("O campo Email não foi preenchido corretamente.")
				email.semail.focus();
				email.semail.value= "";
				return (false);
			}
			
			if (email.smessage.value == "") {
				alert("Preencha o campo \"Mensagem\".");
				email.smessage.focus();
				return (false);
			}
		
		}
		  
		  
    </script>

    <script src="../../assets/js/envor.js"></script>
    <script type="text/javascript">
      
      /*

      Google Analytics Code

      */
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src='//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
      /*

      Windows Phone 8 ? Internet Explorer 10

      */
      if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style")
        msViewportStyle.appendChild(
          document.createTextNode(
            "@-ms-viewport{width:auto!important}"
          )
        )
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle)
      }
    </script>
  </body>
</html>