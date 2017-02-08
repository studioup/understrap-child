<ul class="navbar-alt navbar-nav">
  <li class="menu-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-hover" aria-haspopup="true" aria-expanded="false">
      <img src="<?php echo get_stylesheet_directory_uri() . '/img/icon-world.svg'; ?>" />
    </a>
    <ul class="dropdown-menu dropdown-menu-right" role="menu">
    	<li class="menu-item"><a title="Pagina di esempio." href="http://localhost:8888/studioup/ablerex/pagina-di-esempio/" class="nav-link">USA</a></li>
    	<li class="menu-item"><a title="Pagina di esempio." href="http://localhost:8888/studioup/ablerex/pagina-di-esempio/" class="nav-link">China</a></li>
      <li class="menu-item"><a title="Pagina di esempio." href="http://localhost:8888/studioup/ablerex/pagina-di-esempio/" class="nav-link">Singapore</a></li>
    </ul>
  </li>
  <li class="menu-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <img src="<?php echo get_stylesheet_directory_uri() . '/img/icon-search.svg'; ?>" />
    </a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
      <div class="nav__search">
        <?php get_search_form(); ?>

      </div>
    </div>
  </li>
  <li class="menu-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-hover" aria-haspopup="true" aria-expanded="false">
      <img src="<?php echo get_stylesheet_directory_uri() . '/img/icon-lock.svg'; ?>" />
    </a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
      <div class="nav__login">
        <div class="nav__login-section nav__search-input-container background-dotted-red">
          <input type="text" placeholder="Username" name="username" class="form-control nav__search-input"/>
        </div>
        <div class="nav__login-section nav__search-input-container background-dotted-red" >
          <input type="text" placeholder="Password" name="password" class="form-control nav__search-input"/>
        </div>
        <div class="nav__login-section">
          <div class="row no-gutters">
            <div class="col-sm-6">
              <div class="nav__login-minisection border-bottom border-right">
                <div class="form-check">

                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">
                    Remember me
                  </label>
                </div>
              </div>
              <div class="nav__login-minisection border-right">
                <a href="#" class="btn btn-info btn-sm btn--has-arrow btn-block">Reset Password</a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="nav__login-minisection">
                <input class="btn btn-lg btn-secondary" value="Log In" type="submit" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </li>
</ul>
