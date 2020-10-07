<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Productions</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
    include_once "navbar.php";
     ?>
     <div class="container justify-content-center">
       <div class="row justify-content-center">
           <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

               <div class="carousel-inner">
                   <div class="carousel-item active">
                       <img src="https://www.onefm.ch/wp-content/uploads/2019/12/imgjpgc86b49f40364cce88db586a3b032db6574d9ce33.jpg" class="d-block w-100 h-50" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="https://cloudfront-us-east-1.images.arcpublishing.com/tbt/EJFDMVF2SJCWPPNM6JSNIHWCZU.jpg" class="d-block w-100" alt="...">
                   </div>
                   <div class="carousel-item">
                       <img src="https://i2.wp.com/views.fr/wp-content/uploads/2020/06/lil-baby-1000x750-1.jpg?fit=1000%2C750&ssl=1" class="d-block w-100" alt="...">
                   </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="sr-only">Next</span>
               </a>
           </div>
         <?php
         $username = 'root';
         $password = '';
         $hostname = 'localhost';
         $database = 'nozdi';
         $mysqli = new mysqli($hostname, $username, $password, $database);
         session_start();

         $con = mysqli_connect("localhost", "root", "", "nozdi");
         $sql = "SELECT * FROM instrus;";
         $result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {

         // output data of each row

         while($row = mysqli_fetch_assoc($result)) {
         echo "
         <div class='card instrumental d-print-flex w-40 '>
           <div class='card-header title_sub'>
             ".$row['name']."
           </div>
           <div class='card-body d-print-flex'>
             <blockquote class='blockquote mb-0'>
               <p>".$row['type_artist']."</p>
               <img src='" .$row["link_picture"]. "' class='picture_instrus' alt='' />
               <a class='btn btn-primary' href='".$row["link"]. "' role='button'>View ...</a>

               <footer class='blockquote-footer'>
                 Mood : ".$row['mood']."
               </footer>
             </blockquote>
           </div>
         </div>
         ";
       }}else{
         echo "No results";
       }


          ?>

      </div>
    </div>
     <?php
     include_once "footer.php";
      ?>
  </body>
</html>
