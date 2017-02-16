<ul class="navbar-alt navbar-nav">
  <li class="menu-item menu-item-has-children dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-hover" aria-haspopup="true" aria-expanded="false">
      <svg class="icon__world" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
        <g fill="none">
          <g stroke="#2778AA">
              <ellipse cx="9.9" cy="9.9" rx="8.9" ry="8.9"/>
              <ellipse cx="10" cy="9.9" rx="4" ry="8.9"/>
              <path d="M2 9.4L18.3 9.4"/>
          </g>
        </g>
      </svg> <div class="d-inline hidden-md-up">Locations</div>
    </a>
    <ul class="dropdown-menu dropdown-menu-right" role="menu">
    	<li class="menu-item"><a title="Pagina di esempio." href="http://localhost:8888/studioup/ablerex/pagina-di-esempio/" class="nav-link">USA</a></li>
    	<li class="menu-item"><a title="Pagina di esempio." href="http://localhost:8888/studioup/ablerex/pagina-di-esempio/" class="nav-link">China</a></li>
      <li class="menu-item"><a title="Pagina di esempio." href="http://localhost:8888/studioup/ablerex/pagina-di-esempio/" class="nav-link">Singapore</a></li>
    </ul>
  </li>
  <li class="menu-item menu-item-has-children dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <svg class="icon__search" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="HEADER" transform="translate(-1154.000000, -38.000000)" stroke="#2778AA">
                  <g id="Lens" transform="translate(1155.000000, 39.000000)">
                      <circle id="Oval-Copy" cx="9" cy="9" r="9"></circle>
                      <g id="Group-13" transform="translate(5.000000, 5.000000)">
                          <path d="M5.14285714,5.14285714 L7.65728375,7.33318725" id="Line-Copy-5" stroke-linecap="square"></path>
                          <circle id="Oval-Copy" cx="2.85714286" cy="2.85714286" r="2.85714286"></circle>
                      </g>
                  </g>
              </g>
          </g>
      </svg> <div class="d-inline hidden-md-up">Search</div>
    </a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
      <div class="nav__search">
        <?php get_search_form(); ?>

      </div>
    </div>
  </li>
  <li class="menu-item menu-item-has-children dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown-hover" aria-haspopup="true" aria-expanded="false">
      <svg class="icon__lock" width="20px" height="20px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <defs>
              <rect id="path-1" x="5.625" y="6.75" width="6.75" height="6.75"></rect>
              <mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="6.75" height="6.75" fill="white">
                  <use xlink:href="#path-1"></use>
              </mask>
          </defs>
          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="HEADER" transform="translate(-1181.000000, -38.000000)" stroke="#2778AA">
                  <g id="Lock" transform="translate(1182.000000, 39.000000)">
                      <circle id="Oval-Copy-2" cx="9" cy="9" r="9"></circle>
                      <path d="M11.25,6.75 C11.25,5.50735931 10.2426407,4.5 9,4.5 C7.75735931,4.5 6.75,5.50735931 6.75,6.75" id="Oval-Copy"></path>
                      <use id="Rectangle" mask="url(#mask-2)" stroke-width="2" xlink:href="#path-1"></use>
                  </g>
              </g>
          </g>
      </svg> <div class="d-inline hidden-md-up">Login</div>
    </a>
    <div class="dropdown-menu dropdown-menu-right" role="menu">
      <div class="nav__login">
        <div class="nav__login-section nav__search-input-container background-pattern-red">
          <input type="text" placeholder="Username" name="username" class="form-control nav__search-input"/>
        </div>
        <div class="nav__login-section nav__search-input-container background-pattern-red" >
          <input type="text" placeholder="Password" name="password" class="form-control nav__search-input"/>
        </div>
        <div class="nav__login-section">
          <div class="row no-gutters">
            <div class="col-sm-6">
              <div class="nav__login-minisection border-bottom border-right hidden-xs-border-right">
                <div class="form-check">

                    <input type="checkbox" class="form-check-input">
                    <label class="form-check-label">
                    Remember me
                  </label>
                </div>
              </div>
              <div class="nav__login-minisection border-right xs-border-bottom hidden-xs-border-right">
                <a href="#" class="btn btn-info btn-sm btn--has-arrow btn-block">Reset Password</a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="nav__login-minisection nav__login-minisection--login">
                <button class="btn  btn-secondary" value="Log In" type="submit">Log In</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </li>
</ul>
