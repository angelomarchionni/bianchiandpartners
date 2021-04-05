<?php
    include "config.php";
?>
<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title><?php echo $lang['title'] ?></title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <style type="text/css">
        .footer {
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
        }
        .logo-size {
           height: 50px;
        }
        img {
  max-width: 100%;
  height: auto;
}
       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

    <a href="/"  class="logo-link"><img src="./immagini/bianchi.jpg" alt="Logo" class="logo-size"></a>

        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#" onclick="show_div('home');"><?php echo $lang['home'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"  onclick="show_div('servizi');"><?php echo $lang['servizi'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="show_div('contact');"><?php echo $lang['contact'] ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="show_div('sudinoi');"><?php echo $lang['sudinoi'] ?></a>
            </li>
        </ul>
    </nav>
    <div class="container" style="margin-top: 30px;" style="margin-left: 30px; !important;">

<div id="home" style="display: block;">
     <?php 
    
    
    // echo $_SESSION['lang'];
    
    if ($_SESSION['lang']=='it')
    {
        ?>
<p class="text-sm-left"><h5>Bianchi & Partners consulenza ed assistenza aziendale, tributaria, societaria, del lavoro, legale, fiscale a Praha</h5></p>
<picture>
  <source srcset="./immagini/office_originale_1.png" media="(max-width: 400px)">
  <source srcset="./immagini/office_originale_1.png">
  <img src="./immagini/office_originale_1.png" alt="Ufficio">
</picture> 

 <?php 
    }
    else
    {
        ?>
   <p class="text-sm-left"><h5>      Bianchi & Partners obchodní, daňové, podnikové, pracovní, právní a fiskální poradenství a pomoc </h5></p>
        <?php 
    }
    
    ?>







</div>











<div id="servizi" style="display: none;">


<?php include 'servizi.php'; ?>




</div>
<div id="contact" style="display: none;">
     <?php 
    
    
   
    if ($_SESSION['lang']=='it')
    {
        include 'contatti.php';
    }
    else
    {
        include 'contattiCE.php';
    }
    
    ?>







</div>
<div id="sudinoi" style="display: none;">
    Test Data4 <?php echo $_SESSION['lang'] ?>
</div>


    
    </div>

    <div class="footer bg-dark">
        <a href="index.php?lang=it"><?php echo $lang['lang_it'] ?><img alt="Qries" src="./immagini/flagofitaly.png"
         width=30" height="15"></a>
        | <a href="index.php?lang=ce"><img alt="Qries" src="./immagini/flagofczech.png"
         width=30" height="15"> <?php echo $lang['lang_ce'] ?></a>
            <br>

       
        Bianchi & Partners s.r.o. Washingtonova 17 / 110 00 Praha 1 – Česká republika 
        
    </div>

    <script>


//Functon to show divs from the nav menu
function show_div(toShow)
    {
        
        document.getElementById('home').style.display = 'none';
        document.getElementById('servizi').style.display = 'none';
        document.getElementById('contact').style.display = 'none';
        document.getElementById('sudinoi').style.display = 'none';
        var show = document.getElementById(toShow);
        show.style.display = "";
    }


</script>



</body>
</html>