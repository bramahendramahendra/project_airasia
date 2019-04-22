<nav class="navbar navbar-expand-md navbar-light bg-white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center navbar-font" id="navbarsExampleDefault">
        <ul class="navbar-nav ">
            <li class="nav-item active mx-4">
                <a class="nav-link" href="<?php echo site_url(); ?>/Landing"><img src="<?php echo base_url()?>Assets/img/aa-logo.png"></a>
            </li>
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
                <a style ="border-left: solid 1px lightgrey" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a style ="border-right: solid 1px lightgrey" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a class="nav-link" href="#">Login/Daftar</a>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-10 articles" id="site-content">
            <h1 class="title-post">Status Penerbangan</h1>
            <article class="posts">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="admintab-wrap mg-b-40">
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                <li class="active">
                                    <a data-toggle="tab" href="#TabProject">
                                        <span class="adminpro-icon adminpro-analytics tab-custon-ic">Cari dengan nomor penerbangan</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#TabDetails">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">Cari dengan rute</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                
                                <?php if($id_awal > '0') { ?>
                                    <div id="TabProject" class="tab-pane animated flipInX custon-tab-style1">
                                <?php } else {?>
                                    <div id="TabProject" class="tab-pane in active animated flipInX custon-tab-style1">
                                <?php } ?>
                                    <div _ngcontent-c15>
                                        <span _ngcontent-c15 class="tooltiptext">
                                            <p _ngcontent-c15 class="p-cls">
                                                Enter your airline code and flight number. 
                                                Example: AK6117, I5774
                                            </p>
                                        </span>
                                    </div>
                                   
                                    <?php
                                     
                                    if($id == 0 || $id == 1) { ?> 
                                        <form class="form-inline" method="post" action="<?php echo site_url(); ?>/Flight_Status/index4">
                                            <input class="form-control form-control-lg" style="font-size: 16px; height: 50px; width: 250px;" type="text" placeholder="Nomor penerbangan" name="cari_penerbangan">
                                            <button class="btn btn-danger" style="width: 185px;" type="submit" id="search-support">Cari penerbangan</button>
                                        </form>
                                        <?php }  elseif($id == 2) { ?> 
                                        <form class="form-inline" method="post" action="<?php echo site_url(); ?>/Flight_Status/index4">
                                            <input class="form-control form-control-lg" style="font-size: 16px; height: 50px; width: 250px;" type="text" placeholder="Nomor penerbangan" name="cari_penerbangan" value="<?php echo $no_penerbangan ?>">
                                            <button class="btn btn-danger" style="width: 185px;" type="submit" id="search-support">Cari penerbangan</button>
                                        </form> 
                                    <?php } ?>
                                </div>
                                
                                <?php if($id_awal == '0') { ?>
                                    <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">       
                                        <form  method="post" action="<?php echo site_url(); ?>/Flight_Status/index2">
                                            <div class="row">
                                                <div class=col-lg-5>
                                                    <select class="select2_demo_3 form-control" style="width: 250px; height: 50px;" name="rute_awal" onchange="this.form.submit()">
                                                        <option>Asal</option>
                                                        <?php foreach ($rute_awal as $value) { ?>
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class=col-lg-5>
                                                    <select class="select2_demo_3 form-control" style="width: 250px; height: 50px;">
                                                    </select>
                                                </div>
                                                <div class=col-lg-2>            
                                                    <button class="btn btn-danger" type="button" id="search-support">Cari penerbangan</button>
                                                </div>
                                            </div>
                                        </form> 
                                <?php } else {?>
                                    <div id="TabDetails" class="tab-pane in active animated flipInX custon-tab-style1">
                                        <form  method="post" action="<?php echo site_url(); ?>/Flight_Status/index3">
                                            <div class="row">
                                                <div class=col-lg-5>
                                                    <select class="select2_demo_3 form-control" style="width: 250px; height: 50px;" name="rute_awal">
                                                        <?php foreach ($rute_awal as $value) { 
                                                            if($value['id'] == $id_awal) { ?>
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)</option>
                                                        <?php }} ?>
                                                        <?php foreach ($rute_awal as $value) {  ?>
                                                            <option value="<?php echo $value['id']; ?>"><?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            <?php if($id_tujuan == '0') { ?>
                                                <div class=col-lg-5>    
                                                    <select class="select2_demo_3 form-control" style="width: 250px; height: 50px;" name="rute_tujuan">  
                                                        <option>Tujuan</option>         
                                                    <?php $temp = kosong; 
                                                        foreach ($rute_tujuan as $value) {  
                                                        if($value['id_rute_keberangkatan'] == $id_awal && $temp<>$value['id_rute_kedatangan']) {
                                                        ?>  
                                                        <option value="<?php echo $value['id_rute_kedatangan']; ?>"><?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)</option>
                                                    <?php 
                                                        $temp = $value['id_rute_kedatangan'];
                                                        }};  ?>
                                                    </select>
                                                </div>
                                            <?php } else { ?>
                                                <div class=col-lg-5>    
                                                    <select class="select2_demo_3 form-control" style="width: 250px; height: 50px;" name="rute_tujuan">         
                                                    <?php  
                                                        foreach ($rute_tujuan as $value) {  
                                                        if($value['id_rute_kedatangan'] == $id_tujuan) { ?>
                                                            <option value="<?php echo $value['id_rute_kedatangan']; ?>"><?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)</option>
                                                    <?php }}; ?>
                                                    <?php $temp = kosong;  
                                                        foreach ($rute_tujuan as $value) {  
                                                            if($value['id_rute_keberangkatan'] == $id_awal && $temp<>$value['id_rute_kedatangan']) {    ?>
                                                            <option value="<?php echo $value['id_rute_kedatangan']; ?>"><?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)</option>
                                                    <?php  
                                                        $temp = $value['id_rute_kedatangan'];
                                                        }}; 
                                                         ?>
                                                    </select>
                                                </div>
                                            <?php } ?>
                                                <div class=col-lg-2>
                                                    <button class="btn btn-danger" type="submit" id="search-support">Cari penerbangan</button>
                                                </div>
                                            </div>
                                        </form>
                                <?php } ?>
                                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-1"></div>
    </div>
    
    <?php if($id == 1) { ?>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-10 articles" id="site-content">
            <article class="posts1">    
                <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="admintab-wrap mg-b-40">
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style2">
                    <?php
                        // $no_href = 0;
                        // $temp = 'kosong';
                        // foreach ($rute as $value) {   
                        //     if($value['hari'] <> $temp) {    ?>
                            <?php
                            $temp="Selasa";
                        foreach ($rute as $value) {   
                            if($value['hari'] == $temp && $temp <> 'done') {    ?>
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal1">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            <?php echo $value['hari']; ?> - <?php echo $value['tanggal']; ?>
                                        </span> 
                                    </a>
                                </li class="hari-tab">
                                <?php  
                            $temp = "done";
                             }}   
                             ?> 
                         <?php  
                        // $temp = $value['hari'];
                        //      }}   
                             ?> 
                             
                             <?php
                            $temp="Rabu";
                        foreach ($rute as $value) {   
                            if($value['hari'] == $temp && $temp <> 'done') {    ?>
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal2">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            <?php echo $value['hari']; ?> - <?php echo $value['tanggal']; ?>
                                        </span> 
                                    </a>
                                </li class="hari-tab">
                                <?php  
                            $temp = "done";
                             }}   
                             ?>

                    <?php
                            $temp="Kamis";
                        foreach ($rute as $value) {   
                            if($value['hari'] == $temp && $temp <> 'done') {    ?>
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal3">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            <?php echo $value['hari']; ?> - <?php echo $value['tanggal']; ?>
                                        </span> 
                                    </a>
                                </li class="hari-tab">
                                <?php  
                            $temp = "done";
                             }}   
                             ?>
                                
                                <!-- <li class="active">
                                    <a data-toggle="tab" href="#Tanggal2" >
                                        <span class="adminpro-icon adminpro-analytics tab-custon-ic">
                                            Cari dengan nomor penerbangan
                                        </span>
                                    </a>
                                </li class="hari-tab">
                                
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal3">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            Cari dengan rute
                                        </span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <?php } ?>

    <?php if($id == 1) {  ?>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-10 articles" id="site-content">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="admintab-wrap mg-b-40">
                            <div class="tab-content">
                                <div id="Tanggal1" class="tab-pane animated flipInX custon-tab-style1">
                                    <?php 
                                        $temp = 'Selasa';
                                        foreach ($rute as $value) {   
                                            if($value['hari'] == $temp) {
                                            ?> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)
                                                    </p>
                                                
                                                    <p style="font-size:10px;">
                                                        Keberangkatan terjadwal
                                                    </p>
                                                    
                                                    <?php echo $value['jam_keberangkatan']; ?>
                                                </div>
                                            
                                                <div class="col-6">
                                                    <center><?php echo $value['nomor_penerbangan']; ?><center>
                                                    <br>
                                                    
                                                    <br><br>
                                                    <center><?php echo $value['status']; ?></center>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)
                                                    </p>
                                                    <p style="font-size:10px;">
                                                        kedatangan terjadwal
                                                    </p>
                                                
                                                    <?php echo $value['jam_kedatangan']; ?>
                                                </div>
                                            </div> 
                                            <hr>
                                        <?php }   ?>   
                                    <?php }    ?>
                                    
                                </div>
                                <div id="Tanggal2" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <?php 
                                        $temp = 'Rabu';
                                        foreach ($rute as $value) {   
                                            if($value['hari'] == $temp) {
                                            ?> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)
                                                    </p>
                                                
                                                    <p style="font-size:10px;">
                                                        Keberangkatan terjadwal
                                                    </p>
                                                    
                                                    <?php echo $value['jam_keberangkatan']; ?>
                                                </div>
                                            
                                                <div class="col-6">
                                                    <center><?php echo $value['nomor_penerbangan']; ?><center>
                                                    <br>
                                                    
                                                    <br><br>
                                                    <center><?php echo $value['status']; ?></center>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)
                                                    </p>
                                                    <p style="font-size:10px;">
                                                        kedatangan terjadwal
                                                    </p>
                                                
                                                    <?php echo $value['jam_kedatangan']; ?>
                                                </div>
                                            </div> 
                                            <hr>
                                        <?php }   ?>   
                                    <?php }    ?>
                                   
                                </div>
                                <div id="Tanggal3" class="tab-pane animated flipInX custon-tab-style1">
                                    <?php 
                                        $temp = 'Kamis';
                                        foreach ($rute as $value) {   
                                            if($value['hari'] == $temp) {
                                            ?> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)
                                                    </p>
                                                
                                                    <p style="font-size:10px;">
                                                        Keberangkatan terjadwal
                                                    </p>
                                                    
                                                    <?php echo $value['jam_keberangkatan']; ?>
                                                </div>
                                            
                                                <div class="col-6">
                                                    <center><?php echo $value['nomor_penerbangan']; ?><center>
                                                    <br>
                                                    
                                                    <br><br>
                                                    <center><?php echo $value['status']; ?></center>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)
                                                    </p>
                                                    <p style="font-size:10px;">
                                                        kedatangan terjadwal
                                                    </p>
                                                
                                                    <?php echo $value['jam_kedatangan']; ?>
                                                </div>
                                            </div> 
                                            <hr>
                                        <?php }   ?>   
                                    <?php }    ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <?php } ?>

    <?php if($id == 2) { ?>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-10 articles" id="site-content">
            <article class="posts1">    
                <div class="row">
                <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="admintab-wrap mg-b-40">
                            <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style2">
                    <?php
                        // $no_href = 0;
                        // $temp = 'kosong';
                        // foreach ($rute as $value) {   
                        //     if($value['hari'] <> $temp) {    ?>
                            <?php
                            $temp="Selasa";
                        foreach ($penerbangan as $value) {   
                            if($value['hari'] == $temp && $temp <> 'done') {    ?>
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal1">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            <?php echo $value['hari']; ?> - <?php echo $value['tanggal']; ?>
                                        </span> 
                                    </a>
                                </li class="hari-tab">
                                <?php  
                            $temp = "done";
                             }}   
                             ?> 
                         <?php  
                        // $temp = $value['hari'];
                        //      }}   
                             ?> 
                             
                             <?php
                            $temp="Rabu";
                        foreach ($penerbangan as $value) {   
                            if($value['hari'] == $temp && $temp <> 'done') {    ?>
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal2">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            <?php echo $value['hari']; ?> - <?php echo $value['tanggal']; ?>
                                        </span> 
                                    </a>
                                </li class="hari-tab">
                                <?php  
                            $temp = "done";
                             }}   
                             ?>

                    <?php
                            $temp="Kamis";
                        foreach ($penerbangan as $value) {   
                            if($value['hari'] == $temp && $temp <> 'done') {    ?>
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal3">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            <?php echo $value['hari']; ?> - <?php echo $value['tanggal']; ?>
                                        </span> 
                                    </a>
                                </li class="hari-tab">
                                <?php  
                            $temp = "done";
                             }}   
                             ?>
                                
                                <!-- <li class="active">
                                    <a data-toggle="tab" href="#Tanggal2" >
                                        <span class="adminpro-icon adminpro-analytics tab-custon-ic">
                                            Cari dengan nomor penerbangan
                                        </span>
                                    </a>
                                </li class="hari-tab">
                                
                                <li class="">
                                    <a data-toggle="tab" href="#Tanggal3">
                                        <span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic">
                                            Cari dengan rute
                                        </span>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <?php } ?>

    <?php if($id == 2 ) {  ?>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-10 articles" id="site-content">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="admintab-wrap mg-b-40">
                            <div class="tab-content">
                                <div id="Tanggal1" class="tab-pane animated flipInX custon-tab-style1">
                                    <?php 
                                        $temp = 'Selasa';
                                        foreach ($penerbangan as $value) {   
                                            if($value['hari'] == $temp) {
                                                if($value['nomor_penerbangan'] == $no_penerbangan) {
                                            ?> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)
                                                    </p>
                                                
                                                    <p style="font-size:10px;">
                                                        Keberangkatan terjadwal
                                                    </p>
                                                    
                                                    <?php echo $value['jam_keberangkatan']; ?>
                                                </div>
                                            
                                                <div class="col-6">
                                                    <center><?php echo $value['nomor_penerbangan']; ?><center>
                                                    <br>
                                                    
                                                    <br><br>
                                                    <center><?php echo $value['status']; ?></center>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)
                                                    </p>
                                                    <p style="font-size:10px;">
                                                        kedatangan terjadwal
                                                    </p>
                                                
                                                    <?php echo $value['jam_kedatangan']; ?>
                                                </div>
                                            </div> 
                                            <hr>
                                        <?php }}   ?>   
                                    <?php }    ?>
                                    
                                </div>
                                <div id="Tanggal2" class="tab-pane in active animated flipInX custon-tab-style1">
                                    <?php 
                                        $temp = 'Rabu';
                                        foreach ($penerbangan as $value) {   
                                            if($value['hari'] == $temp) {
                                                if($value['nomor_penerbangan'] == $no_penerbangan) {
                                            ?> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)
                                                    </p>
                                                
                                                    <p style="font-size:10px;">
                                                        Keberangkatan terjadwal
                                                    </p>
                                                    
                                                    <?php echo $value['jam_keberangkatan']; ?>
                                                </div>
                                            
                                                <div class="col-6">
                                                    <center><?php echo $value['nomor_penerbangan']; ?><center>
                                                    <br>
                                                    
                                                    <br><br>
                                                    <center><?php echo $value['status']; ?></center>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)
                                                    </p>
                                                    <p style="font-size:10px;">
                                                        kedatangan terjadwal
                                                    </p>
                                                
                                                    <?php echo $value['jam_kedatangan']; ?>
                                                </div>
                                            </div> 
                                            <hr>
                                        <?php } }  ?>   
                                    <?php }    ?>
                                   
                                </div>
                                <div id="Tanggal3" class="tab-pane animated flipInX custon-tab-style1">
                                    <?php 
                                        $temp = 'Kamis';
                                        foreach ($penerbangan as $value) {   
                                            if($value['hari'] == $temp) {
                                                if($value['nomor_penerbangan'] == $no_penerbangan) {
                                            ?> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_berangkat']; ?> (<?php echo $value['kode_berangkat']; ?>)
                                                    </p>
                                                
                                                    <p style="font-size:10px;">
                                                        Keberangkatan terjadwal
                                                    </p>
                                                    
                                                    <?php echo $value['jam_keberangkatan']; ?>
                                                </div>
                                            
                                                <div class="col-6">
                                                    <center><?php echo $value['nomor_penerbangan']; ?><center>
                                                    <br>
                                                    
                                                    <br><br>
                                                    <center><?php echo $value['status']; ?></center>
                                                </div>
                                                <div class="col-lg-3">
                                                    <p>
                                                        <?php echo $value['kota_datang']; ?> (<?php echo $value['kode_datang']; ?>)
                                                    </p>
                                                    <p style="font-size:10px;">
                                                        kedatangan terjadwal
                                                    </p>
                                                
                                                    <?php echo $value['jam_kedatangan']; ?>
                                                </div>
                                            </div> 
                                            <hr>
                                        <?php }  } ?>   
                                    <?php }    ?>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-1"></div>
    </div>
    <?php } ?>



    <?php //$id=0;  ?>

    <!-- <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-10 articles" id="site-content">
            <h1 class="title-post"></h1>
            <article class="posts">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="admintab-wrap mg-b-40">
                            <div class="tab-content">
                                <div id="Tanggal1" class="tab-pane animated flipInX custon-tab-style1">
                                    <div _ngcontent-c15>
                                        <span _ngcontent-c15 class="tooltiptext">
                                            <h2 _ngcontent-c15 class="p-cls">
                                                <b>UPS ! </b>
                                            </h2>
                                        </span>
                                    </div>
                                    <div _ngcontent-c15>
                                        <span _ngcontent-c15 class="tooltiptext">
                                            <p _ngcontent-c15 class="p-cls">
                                                Tidak ada penerbangan hari ini.
                                            </p>
                                        </span>
                                    </div>
                                </div>
                                <div id="Tanggal2" class="tab-pane in active animated flipInX custon-tab-style1">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                1
                                                <br>
                                                3
                                                <br>
                                                3
                                            </div>
                                           
                                            <div class="col-8">
                                                <center>2</center>
                                                <br>
                                                ===========================================
                                                <br><br>
                                                <center>2</center>
                                            </div>
                                           
                                            
                                            
                                            <div class="col-lg-2">
                                                3
                                                <br>
                                                3
                                                <br>
                                                3
                                            </div>
                                        </div>  
                                    
                                        
                                      
                                </div>
                                <div id="Tanggal3" class="tab-pane animated flipInX custon-tab-style1">
                                    <form class="form-inline">
                                        <select class="select2_demo_3 form-control" style="width: 250px; height: 50px;">
                                            <option>Asal</option>
                                            <option value="Bahamas">Ahmedabad (AMD)</option>
                                            <option value="Bahrain">Alor Setar (AOR)</option>
                                            <option value="Bangladesh">Amritsar (ATQ)</option>
                                            <option value="Barbados">Auckland (AKL)</option>
                                            <option value="Belarus">Bagdogra (IXB)</option>
                                            <option value="Belgium">Bali (DPS)</option>
                                            <option value="Belize">Banda Aceh (BTJ)</option>
                                            <option value="Benin">Bandung (BDO)</option>
                                            <option value="Bahamas">Bangkok – Don Mueang (DMK)</option>
                                            <option value="Bahrain">Beijing - Capital (PEK)</option>
                                            <option value="Bangladesh">Belitung (TJQ)</option>
                                            <option value="Barbados">Brunei (BWN)</option>
                                            <option value="Belarus">Busan (PUS)</option>
                                            <option value="Belgium">Fukuoka (FUK)</option>
                                            <option value="Belize">Guangzhou (CAN)</option>
                                            <option value="Benin">Hong Kong (HKG)</option>
                                            <option value="Bahamas">Jakarta (CGK)</option>
                                            <option value="Bahrain">Jeju (CJU)</option>
                                            <option value="Bangladesh">Kota Bharu (KBR)</option>
                                            <option value="Barbados">Kuala Lumpur (KUL)</option>
                                            <option value="Belarus">Labuan (LBU)/option>
                                            <option value="Belgium">Lombok (LOP)</option>
                                            <option value="Belize">Makassar (UPG)</option>
                                            <option value="Benin">Medan - Kualanamu (KNO)</option>
                                            <option value="Bahamas">Melbourne - Avalon (AVV)</option>
                                            <option value="Bahrain">Nanjing (NKG)</option>
                                            <option value="Bangladesh">New Delhi (DEL)</option>
                                            <option value="Barbados">Osaka - Kansai (KIX)</option>
                                            <option value="Belarus">Padang (PDG)</option>
                                            <option value="Belgium">Pattaya (UTP)</option>
                                            <option value="Belize">Phuket (HKT)</option>
                                            <option value="Benin">Quanzhou (JJN)</option>
                                            <option value="Belize">Sapporo - Shin-Chitose (CTS)</option>
                                            <option value="Benin">Semarang (SRG)</option>
                                            <option value="Bahamas">Seoul - Incheon (ICN)</option>
                                            <option value="Bahrain">Singapura (SIN)</option>
                                            <option value="Bangladesh">Sydney (SYD)</option>
                                            <option value="Barbados">Taipei - Taoyuan (TPE)</option>
                                            <option value="Belarus">Tokyo - Narita (NRT)</option>
                                            <option value="Belgium">Yogyakarta (JOG)</option>
                                        </select>
                                        <input class="form-control form-control-lg" type="text" placeholder="Tujuan" style="font-size: 16px; height: 50px; width: 250px;">
                                        <button class="btn btn-danger" type="button" id="search-support">Cari penerbangan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-sm-1"></div>
    </div> -->

</div>

    <div class="garis"  style="margin-top: 250px;">
      <div class="grey"></div>
    </div>

    <footer class="page-footer center-on-small-only" style="background-color: #f2f2f2;">
      <div>
        <div class="container">
          <div class="row py-4 d-flex align-items-center">
            <div class="col-md-1 text-center text-md-left mb-4 mb-md-0">
              <a href="https://www.mavcom.my/en/consumer/make-a-complaint/"><img src="<?php echo base_url()?>Assets/img/right.png" alt=""></a>
            </div>
            <div class="col-md-11 mb-r">
              <p style="font-family: sans-serif; font-size: 12px; margin-bottom: 3px;">
                <span>©2019 AirAsia Group Berhad. Penggunaan situs web AirAsia menunjukkan bahwa Anda setuju dengan</span>
                <a href="https://www.airasia.com/id/id/about-us/terms-and-conditions.page" style="color: red;"><span>Syarat dan Ketentuan</span></a>
                <span>,</span> 
                <a href="https://www.airasia.com/id/id/about-us/terms-of-use.page" style="color: red;"><span>Ketentuan Penggunaan</span></a>
                <span>dan {2}.</span>
                <span>Tarif meliputi pajak bandara dan semua biaya dan ongkos yang dikenakan oleh badan pengatur yang relevan.Situs web ini dimiliki dan dioperasikan oleh AirAsia Berhad (284669-W) ("AirAsia").</span>
                <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action;jsessionid=s9cWNe7dMLPamgem0bR7P-5Z8HWycQdPLCeWaCD-LrqQkziVGbu7!1146639696" style="color: red;"><span>粤ICP备17160544号</span></a>
              </p>
              <p style="font-family: sans-serif; font-size: 12px; margin-bottom: 3px;">
                <a href="https://ir.airasia.com/corporate_structure.html" style="color: red;"><span>AirAsia Berhad (Malaysia) | </span></a>
                <a href="http://www.aavplc.com/index.html?menu=aav_organisation_chart&lang=en" style="color: red;"><span>Thai AirAsia Co. Ltd | </span></a>
                <a href="https://www.airasia.com/id/id/about-us/airasia-indonesia-organizational-structure.page" style="color: red;"><span>PT Indonesia AirAsia | </span></a>
                <a href="https://www.airasia.com/id/id/about-us/airasia-philippine-organizational-structure.page" style="color: red;"><span>Philippines AirAsia Inc. | </span></a>
                <a href="http://www.airasiax.com/" style="color: red;"><span>AirAsia X Berhad (Malaysia) | </span></a>
                <a href="https://www.airasia.com/id/id/about-us/thai-airasia-x-organizational-structure.page" style="color: red;"><span>Thai AirAsia X Co.,Ltd  | </span></a>
                <a href="https://www.airasia.com/jp/ja/about-us/airasia-japan-company-profile.page" style="color: red;"><span>AirAsia Japan Co., Ltd. | </span></a>
                <a href="https://www.airasia.com/id/id/about-us/airasia-india-organizational-structure.page" style="color: red;"><span>AirAsia (India) Limited </span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>