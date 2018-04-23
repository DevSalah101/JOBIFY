<?php
    include "init.php";
?>

<section class="dashboard">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-3">
                
                <div class="sidebar bg-white border-right px-3">
                    <div class="dashboard__brand text-center border-bottom">
                        <i class="fab fa-angrycreative fa-4x"></i>
                    </div>

                    <div class="media py-3 border-bottom">
                        <img class="mr-3 rounded-circle" src="https://placeimg.com/80/80/any" alt="Generic placeholder image">
                        <div class="media-body mt-2">
                            <h5 class="mt-0">Mohammed Said</h5>
                            Founder Of App
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
            <nav class="navbar navbar-expand-lg navbar-white bg-white">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

            </div>
        </div>
    </div>
</section>

<?php
    include $tpl . "footer.php";
?>