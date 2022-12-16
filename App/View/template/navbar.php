<section class="navbarmenu">
  <?php error_reporting(0); $auth1 = $_SESSION['auth'];  
  error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE); ?>
  <nav>
    <div class="nav_container">
      <li><a href="<?= \Staditek\App\Core\Router::url("") ?>">CAR DEALER</a></li>
      <ul class="menu_nav">
        <?php if ($_SESSION['auth'] == null) { ?>
          <li><a href="<?= \Staditek\App\Core\Router::url("") ?>">HOME</a></li>
        <?php
        } else { ?>
        <?php if ($auth1->sebagai == "manager") { ?>
          <li><a href="<?= \Staditek\App\Core\Router::url("dashboard") ?>">DASHBOARD</a></li>
          <?php
          } else { ?>
        <li><a href="<?=\Staditek\App\Core\Router::url("") ?>">HOME</a></li>
        <?php }  } ?>
        <li><a href="<?= \Staditek\App\Core\Router::url("profile") ?>">PROFILE</a></li>
        <li class=""><a href="<?= \Staditek\App\Core\Router::url("product") ?>">PRODUCT</a>
        </li>
        <li><a href="<?= \Staditek\App\Core\Router::url("about") ?>">ABOUT</a></li>
        <li><a href="<?= \Staditek\App\Core\Router::url("contact") ?>">CONTACT</a></li>
      </ul>
      <ul class="menu_nav1">
        <?php if ($_SESSION['auth'] == null) { ?>
          <li><a href="<?= \Staditek\App\Core\Router::url("login") ?>">LOG IN</a></li>
          <li><a href="<?= \Staditek\App\Core\Router::url("register") ?>">SIGN UP</a></li>
        <?php
        } else {
          $auth = $_SESSION['auth'];
        ?>
          <li class="emailAkun"><a><?= $auth->email ?></a></li>
          <div class="navigation">
            <a class="button" href="<?= \Staditek\App\Core\Router::url("logout") ?>">
              <img class="account-img" src="<?= \Staditek\App\Core\Router::url('assets/images/' . $auth->avatar) ?>" alt="<?= htmlentities($auth->email, TRUE) ?>">
              <div class="logout">LOG OUT</div>
            </a>
          </div>
        <?php

        } ?>
      </ul>
    </div>
  </nav>
</section>