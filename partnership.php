<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Partenaires</title>
    <link href="css\style.css" rel="stylesheet" type="text/css" />
    <!--Popper-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <!--CSS & JS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <!--icon font stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  </head>
  
  <body>
    <!-- navbar creation / use on all pages-->
    <section>
    <?php include('menu.php'); ?>
        </section>
  
    <!-- Main Content -->
    <main>
        <h1>Nos partenaires</h1>

     <div id="logos">
        <!--integration logo partnership-->
       <img class="logop" src="img\tramoy.png" alt="Tramoy logo" width="200">
       <a href="https://archerystudio.wixsite.com/archerystudio/l-equipe" title="Archery studio" target="_blank">
          <img class="logop" src="img\archerystudio.png" alt="Archery studio" width="200"> </a>
        <a href="https://www.ffta.fr/" title="FFTA" target="_blank">  
          <img class="logop" src="img\FFTA1.jpg" alt="FFTA" width="200"></a>
       <a href="https://www.auvergnerhonealpes.fr/" title="Région Auvergne-Rhône-Alpes" target="_blank">
          <img class="logop" src="img\region.jpg" alt="Région Auvergne-Rhône-alpes" width="200"></a>
        <a href="https://www.ville-passy-mont-blanc.fr/" title="ville de Passy" target="_blank">
          <img class="logop" src="img\Passy.png" alt="Commune de Passy" width="200"></a>
     </div>
      
    </main>
   
  <!-- footer use on all pages -->
  <?php include('footer.php'); ?>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>