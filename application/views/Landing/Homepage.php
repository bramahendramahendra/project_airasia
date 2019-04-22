<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center navbar-font" id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item active mx-4">
          <a class="nav-link" href="#">Pembelian Saya</a>
        </li>
        <li class="nav-item active mx-4">
          <a class="nav-link" href="#">Check-in</a>
        </li>
        <li class="nav-item active mx-4">
          <a class="nav-link" href="<?php echo site_url(); ?>/Flight_Status">Status Penerbangan</a>
        </li>
        <li class="nav-item active mx-4">
          <a class="nav-link" href="#">Pelayanan Pelanggan</a>
        </li>
        <li class="nav-item dropdown active ml-4 mr-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ID
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown active ml-1 mr-4">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            IDR
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#exampleModal" data-toggle="modal" data-target="#exampleModal" onclick="openLogin()">Login/Daftar</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-Home">
    <img src="<?php echo base_url()?>Assets/img/ds-default-large.jpg" class="img-fluid-Home" alt="Responsive image">
    <div class="centered"><h1 class="font-weight-bold font-Home">Anda pasti suka tawaran kami!</h1><p class="font-weight-light font-Home">Dapatkan harga hemat ke lebih dari 140 destinasi</p></div>
  </div>
  <div class="container justify-content-around">
    <div class="row">
      <div class="col p-1 m-2 my-4 text-center">
        <img src="<?php echo base_url()?>Assets/img/sale.svg" width="60px">
        <p class="font-weight-light font-menu">Hotel</p>
      </div>
      <div class="col p-1 m-2 my-4 text-center">
        <img src="<?php echo base_url()?>Assets/img/point.svg" width="60px">
        <p class="font-weight-light font-menu">Penerbangan + Hotel</p>
      </div>
      <div class="col p-1 m-2 my-4 text-center">
        <img src="<?php echo base_url()?>Assets/img/card.svg" width="60px">
        <p class="font-weight-light font-menu">AirAsia Cards</p>
      </div>
      <div class="col p-1 m-2 my-4 text-center">
        <img src="<?php echo base_url()?>Assets/img/point.svg" width="60px">
        <p class="font-weight-light font-menu">Poin BIG Saya</p>
      </div>
      <div class="col p-1 m-2 my-4 text-center">
        <img src="<?php echo base_url()?>Assets/img/shop.svg" width="60px">
        <p class="font-weight-light font-menu">OURSHOP</p>
      </div>
    </div>
  </div>
  <h1 class="text-center font-weight-bold font-promotion">Destinasi dengan harga promo</h1>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  </div>
  <script>
    function openLogin() { 
     document.getElementById('exampleModal').innerHTML = `<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><button id="btn_login" type="button" class="btn" onclick="openLogin()">Login</button><button id="btn_daftar" type="button" class="btn" onclick="openDaftar()">Daftar</button></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url('UserController/Signin'); ?>" method="POST">
            <div class="form-group" onsubmit="">
              <label for="email">Email</label>
              <input type="email" class="form-control mb-4" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" placeholder="Kata sandi" name="password">
            </div>
            <div class="modal-footer justify-content-center">
              <button type="submit" class="btn btn-danger btn-lg btn-block">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>`;
   }

       function openDaftar() { 
     document.getElementById('exampleModal').innerHTML = `<div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><button id="btn_login" type="button" class="btn" onclick="openLogin()">Login</button><button id="btn_daftar" type="button" class="btn">Daftar</button></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="<?php echo site_url('UserController/Register'); ?>" method="POST">
            <div class="form-group" onsubmit="">
              <label for="email">Email</label>
              <input type="email" class="form-control mb-4" id="email" aria-describedby="emailHelp" placeholder="Email" name="email">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control mb-4" id="nama" placeholder="Nama" name="nama">
              <label for="password">Password</label>
              <input type="password" class="form-control mb-4" id="password" placeholder="Kata sandi" name="password">
              <label for="JK">Jenis Kelamin</label><br>
              <label class="radio-inline"><input type="radio" name="JK" value="Pria" checked>Pria</label>
              <label class="radio-inline mx-4"><input type="radio" name="JK" value="Wanita">Wanita</label>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="submit" class="btn btn-danger btn-lg btn-block">Daftar</button>
            </div>
          </form>
        </div>
      </div>
    </div>`;
   }
 </script>

</body>