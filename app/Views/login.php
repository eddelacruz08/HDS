<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= base_url() ?>/public/img/hds_logo_name.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
    <!-- <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css"> -->
    <script type="text/javascript" src="<?= base_url()?>/public/font-awesome/js/all.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/styleLogin.css">
    <title><?= SYSTEM_TITLE ?></title>
  </head>

	<body>
    <h2 class="text-center font-weight-bold my-4"><?= SYSTEM_NAME ?></h2>
    <div id="layoutAuthentication_content">
                <main>

                    <div class="container">
                      <!-- <img src="public/img/hds_logo_name.png" class="brand_logo" alt=""> -->
                        <div class="row justify-content-center" >
                            <div class="col-md-4">
                                <!-- <div class="card shadow-lg border-2 rounded-lg mt-1"> -->
                                <img src="public/img/hds_logo_with_name_black.png" class="brand_logo" alt="">

                                    <div class="login-wrap">
                                      <h4 class="text-center font-weight-bold my-4"> WELCOME</h4>
                                      <?php if(isset($_SESSION['error_login'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          				         <?= $_SESSION['error_login']; ?>
                                  				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  				    <span aria-hidden="true">&times;</span>
                                  				  </button>
                          				      </div>
                          				          <?php endif; ?>

                                  <div class="card-body">
                                    <div class="input-container">
                                    <form class="form-signin " method="post" action="<?= base_url() ?>">
                                      <div class="form-group">
                                        <!-- <i class="fas fa-user icon"></i> -->
                                        <label class="usename font-weight-bold" for="inputUsername" ></label></i>
                                        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                                      </div>
                                    </div>

                                      <div class="form-group">
                                        <label class="pass_word font-weight-bold"  for="inputPassword"></label>
                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                      </div>

                                    <div class="input-container">
                                      <div class="form-group">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                      </div>
                                      </div>
                                      <hr>
                                      <div class="form-group"><button class="btn " type="submit">Sign In</button></div>
                                    </form>
                                  </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    <script src="<?= base_url() ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>/public/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/js/sweetalert2@9.js"></script>
    <script src="<?= base_url() ?>/public/js/myAlerts.js"></script>
    <?= view('App\Views\theme\notification') ?>
    

  </body>
</html>
