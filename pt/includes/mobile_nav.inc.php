<div class="mobile-menu" id="mobile-menu">
  <h3>menu</h3>
    <?php

	$sm = (isset($_GET['sm'])?$_GET['sm']:NULL);

?>
<nav>
      <ul>s
        <li <?php if($sm==1){ echo 'class="current"'; }?>><a href="../home?sm=1">home</a></li>
        <li <?php if($sm==2){ echo 'class="current"'; }?>><a href="../empresa/?sm=1">empresa</a></li>
        <li <?php if($sm==3){ echo 'class="current"'; }?>><a href="../servicos/?sm=2">serviços</a></li>
        <li <?php if($sm==4){ echo 'class="current"'; }?>><a href="../clientes/?sm=3">clientes</a></li>
        <li <?php if($sm==5){ echo 'class="current"'; }?>><a href="../tecnologia/?sm=4">tecnologia</a></li>
        <li <?php if($sm==6){ echo 'class="current"'; }?>><a href="../faleconosco/?sm=6">fale conosco</a></li>
        <li><a href="http://router.hivelog.com.br/rgsv1" target="_blank">rastreamento</a></li>
      </ul>
    <!--

    Desktop Menu end

    //-->
</nav>

<!--

Envor mobile menu end

//-->
</div>