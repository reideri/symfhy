<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/panel.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,700,800,900" rel="stylesheet">    
</head>
<body>
        <div class="dashboard">
            <div class="container">
              <div class="row">
                <div class="col-8">
                  <h2>Dashboard</h2>
                  <p>Welcome to Symfhy Dashboard</p>
                </div>

                <div class="col-4">
                  <div class="toggle-menu" id="toggle-menu">
                    <span class="line-button"></span>
                  </div>
                </div>
              </div>
            </div>
        </div>
     	<div class="content">
          <div class="row">
              <div class="col-12 col-md-2" style="height: 100vh">
                <div class="menu" id="sidebar">
                  <div class="balance">
                    <h1>$0.00</h1>
                    <p>My Coins: 0</p>
                  </div>
                    <nav>
                      <ul>
                        <li>
                          <a href="panel.php">Dashboard</a>
                        </li>
                          <p class="title">Work now</p>
                          <li>
                            <a href="url.php"><i class="text-green fas fa-cut"></i> Advertising</a>
                          </li>
                          <p class="title">Tools</p>
                          <li>
                            <a href="#"><i class="text-green fas fa-paperclip"></i> Add Link</a>
                          </li>
                          <li>
                            <a href="#"><i class="text-green fas fa-paperclip"></i> Buy Coins</a>
                          </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              <div class="col-12 col-md-8 offset-md-1">
                      <div class="row">
                        <div class="col-12">
                           <div class="profile">
                               <div class="capsule">
                                 <img src="https://cdn.dribbble.com/users/418188/screenshots/3947029/design_party_graphic_design_tubik_1x.png" alt="">  
                               </div>
                               <h4>Darren15</h4>
                               <h5><i class="fas fa-envelope"></i> dgonnou@gmail.com</h5>
                           </div>
                        </div>  

                        <div class="col-12">
                           <div class="info">
                              <h2><i class="fas fa-smile"></i> Congratulations!</h2>
                              <div class="txt">
                                  <div class="row">
                                      <div class="col-12 col-md-2 d-flex justify-content-center">
                                          <img src="https://cdn.dribbble.com/users/26309/screenshots/1921594/congrats.gif" alt="">
                                      </div>

                                      <div class="col-12 col-md-10">
                                          <p>Thank you for registering at Symfhy, we hope and you fulfill all the terms and conditions of our platform, to avoid any kind of rejection to your account.</p>
                                      </div>
                                  </div>
                                  
                              </div>
                           </div>
                        </div>

                      </div>
                </div>
        </div>
  
        </div>        
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $('#toggle-menu').on('click', function(){
        $('#sidebar').toggleClass('menu-hide');
      })
    </script>
</body>
</html>