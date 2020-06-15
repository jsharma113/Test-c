<?php

    include 'db.php';

    //$db->logout();
    session_start();
    $isLoggedIn = (isset($_SESSION["login"])) ? true : $db->redirect(); ;

    if (isset($_GET['logout']) && ($_GET['logout'] == 'true')) {
     $db->logout();
    }

  ?>
  <style type="text/css">
      .navbar {
    color: #007bff;
    background-color: black;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 0.5rem 1rem;
        margin-bottom: 70px;
}

    .loader {
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #3498db;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
          margin-left: 44%;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }

  </style>
<nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <!--navbar settings-->
    <div class="container-fluid">
        <div class="navbar-header">
   
            <!--<a class="navbar-brand" href="index.html">Logout</a>-->

            <?php if($isLoggedIn): ?>
                <a class="navbar-brand">
                    Welcome <?php echo $_SESSION["login"];  ?>
                </a>
            <?php endif; ?>
        </div>
        <?php if($isLoggedIn): ?>
            <div class="nav navbar-nav navbar-right">
               <a href="?logout=true" class="navbar-brand"><strong>Logout</strong></a>
            </div>
        <?php endif; ?>
    </div>
</nav>

<style type="text/css">
    $(".hBack").on("click", function(e){
    e.preventDefault();
    window.history.back();
    });
</style>

