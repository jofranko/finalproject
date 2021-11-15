<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>ZCAR: Contact</title>
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="main.css">
    <link rel="icon" href="img/logo.ico">
  </head>
  <body>
    
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-sm navbar-light">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="img/logo.png" style="width: 50%;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link btn btn-outline-warning btn-sm" href="/">Go back</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- CONTACT -->
    <header class="main-header call-to-action section">
      <div class="container">
        <h3 class="text-warning">Contact</h3>
          <p>
            Do you have any questions about our service?
          </p>
          <form action="" method="POST">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <i class="fas fa-user input-group-text"></i>
              </div>
              <input type="text" class="form-control" name="c_name" placeholder="Name">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <i class="fas fa-envelope input-group-text"></i>
              </div>
              <input type="text" class="form-control" name="c_email" placeholder="example@example.com">
            </div>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <i class="fas fa-pencil-alt input-group-text"></i>
              </div>
              <input type="text" class="form-control" name="c_message" placeholder="Message">
            </div>
            <input type="submit" class="btn btn-warning btn-sm text-white" name="email" value="Send">
          </form>
      </div>
    </header>

    <!-- FOOTER -->
    <footer>
      <div class="container p-3">
        <div class="row text-center text-black">
          <div class="col ml-auto">
            <p> &copy 2020 ZCAR, Inc. All rights reserved.</p>
          </div>
        </div>
      </div>       
    </footer>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>