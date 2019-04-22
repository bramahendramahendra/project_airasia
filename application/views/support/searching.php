
<body>


<br>

<div class="row mt-3">
  <div class="col-md-2"></div>
  <div class="col-md-8">
     
      <form action="" method="post">
        <div class="input-group mb-3">
        
          <input type="text" class="form-control" placeholder="Masukan Topik contohnya:Bandara,Bagasi,Pajak " name="keyword">
          <div class="input-group-append">
            <button class="btn btn-danger" type="submit" >cari</button>
          </div>
        </div>
        
      </form>
  </div>
  <div class="col-md-2"></div>
  
</div>
    <br>

<div class="container-bawah">
     <nav class="navbar navbar-expand-md ">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navbar-link" href="#"><img src="<?php echo base_url()?>Assets/img/home.png" height="20"></a>
      </li>
      <li class="nav-item dropdown active ml-4 mr-1">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Roboto',sans-serif; font-size: 14px; color:white;" m>
          Topik
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-family: 'Roboto',sans-serif; font-size: 14px; color: black; background-color: #A0A0A0">
          
           <a class="dropdown-item" href="#pemesanan">Pemesanan Penerbangan</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Bagasi</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Check in</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Pengembalian dana</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Produk dan layanan</a>
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Tamu dengan kebutuhan khusus</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="font-family: 'Roboto',sans-serif; font-size: 14px; color:white;">Laporan saya</a>
      </li>
    </ul>
    
  </div>
</nav>


</div>  

<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-8">
    	<div id='result'>
      
      <?php foreach($support as $sp) : ?>
          <div class='item'>
            <div class='url'><a href="#" style="font-family: 'Roboto',sans-serif; font-size: 16px; color: red;"><?php echo $sp["url"] ?></a></div>
            <div class='creat'><?php echo $sp["created_at"] ?></div>
            <div class='des'><?php echo $sp["deskripsi"]?></div><br>
          </div>
      <?php endforeach ;?>  
      </div>
    </div>
	<div class="col-md-4">
	      <h1 class="channel">channel yang dapat dihubungi</h1>
	              <p class="AVA"><img src="<?php echo base_url()?>Assets/img/cewe.png" width="20px" height="20px">Berbicara dengan AVA sekarang</p> 
	              <p><img src="<?php echo base_url()?>Assets/img/twe.png" width="20px" height="20px">Hubungi kami 24/7 lewat Twitter</p>
	              <p><img src="<?php echo base_url()?>Assets/img/facebook1.png" width="20px" height="20px">Hubungi kami 24/7 lewat Facebook</p>
	              <p><img src="<?php echo base_url()?>Assets/img/email.png" width="20px"  height="20px">Email kami</p>
	              <p><img src="<?php echo base_url()?>Assets/img/call.png" width="20px" height="20px">call center</p>

	              <h4>Popular Articles</h4>
	              <p><a href="" style="font-family: 'Roboto',sans-serif; font-size: 14px; color: black;">Bagaimana mengubah pemesanan saya</a></p>  
	              <p><a href="#!" style="font-family: 'Roboto',sans-serif; font-size: 14px; color: black;">Dapatkah saya menambah berat bgasi?</a></p>
	              <p><a href="#!" style="font-family: 'Roboto',sans-serif; font-size: 14px; color: black;">Bagaimana saya menyerahkan pengembalian dana saya</a></p>
	              <p><a href="#!" style="font-family: 'Roboto',sans-serif; font-size: 14px; color: black;">Apabila setelah pembelian saya tidak dapat mengikuti penerbangan, apakah uang saya dapat dikembalikan? (pengembalian uang)</a></p>
	              <p><a href="#!" style="font-family: 'Roboto',sans-serif; font-size: 14px; color: black;">Apa yang dimaksud dengan Self Check-In? (Web, Mobile, Kiosk)</a></p> 
	    </div>
	  </div>
	</div>
	  </div><br><br>
 
       
<footer class="page-footer center-on-small-only" style="background-color: #f2f2f2;">
      <div>
        <div class="container">
          <div class="row py-4 d-flex align-items-center">
          <div class="col-md-4 text-center text-md-left mb-4 mb-md-0">
            <p style="font-family: sans-serif; font-size: 12px;">AirAsia.com    |    Syarat dan ketentuan</p>
          </div>
          <div class="col-md-7 mb-r">
            <p style="font-family: sans-serif; font-size: 12px; margin-bottom: 3px;"> Penggunaan situs web AirAsia menyatakan persetujuan Anda terhadap [Syarat Penggunaan dan Kebijakan Privasi] kami  Syarat penggunaan  dan  Kebijakan Privasi</p>
            <p style="font-family: sans-serif; font-size: 12px; margin-bottom: 3px;">
              ©2019 AirAsia Berhad.
            </p>
            <p style="font-family: sans-serif; font-size: 12px; margin-bottom: 3px;">
              Website ini dimiliki dan dioperasikan oleh AirAsia Berhad ("AirAsia")
            </p>
          </div>
        </div>
        </div>
      </div>
    </footer>




          <!-- Optional JavaScript
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </body>
        </html>
