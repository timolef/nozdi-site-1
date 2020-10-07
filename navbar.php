<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/main.js"></script> 
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <a class="navbar-brand" href="#">
    <img src="images/test_nozdi_logo.png" width="45" height="45" alt="" loading="lazy">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"> HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="music.php"> MY MUSIC TEST1<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="forum.php"> FORUM <span class="sr-only">(current)</span></a>
      </li>
       

    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-2">
                <a href="#GetOfferModal" role="button" class="btn btn-primary btn-lg" data-toggle="modal">Login</a>
            </div>
        </div>
    </div>

    <div id="GetOfferModal" class="modal fade modal-get-offer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="form" role="form" autocomplete="off" id="formGetOffer" novalidate="" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname1" id="uname1" required="" placeholder="Login">
                            <div class="invalid-feedback">Oops, you missed this one.</div>
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="pwd1" required="" placeholder="Password">
                            <div class="invalid-feedback">Enter your password too!</div>
                        </div>
                    
                        <div class="form-group py-4">
                            <button type="submit" class="btn btn-success" id="btnGetOffer">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

  </body>
</html>
