<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> -->
    

    <?php
    if(! isset($page_name)){
        $page_name = '';
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?= $page_name=='product-list' ? 'active' : '' ?>">
                        <a class="nav-link" href="20200415_productlist.php">商品列表</a>
                    </li>
                    <li class="nav-item <?= $page_name=='data-insert' ? 'active' : '' ?>">
                      <a class="nav-link" href="20200415_cart-list.php">購物車
                        <span class="badge badge-pill badge-info cart-count"></span>
                      </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <?php // print_r($_SESSION['loginUser'])  ?>
                    <?php if(isset($_SESSION['loginUser'])):  ?>
                        <li class="nav-item">
                            <a class="nav-link"><?= $_SESSION['loginUser']['nickname'] ?></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="">修改會員資料</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="">登出</a>
                        </li>
                    <?php else:  ?>
                        <li class="nav-item <?= $page_name=='login' ? 'active' : '' ?>">
                            <a class="nav-link" href="20200413_login.php">登入</a>
                        </li>
                        <li class="nav-item <?= $page_name=='data-insert' ? 'active' : '' ?>">
                            <a class="nav-link" href="register.php">註冊</a>
                        </li>
                    <?php endif;  ?>
                </ul>
            </div>
        </div>
    </nav>
    <style>
        #navbarSupportedContent .nav-item.active {
            background-color: #7abaff;
        }
    </style>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
