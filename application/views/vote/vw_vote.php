<style>
.custom0{
  width: 100%;
  margin-left: 12%;
  margin-top: 2%;
}
.custom{
  width: 20%;
  height: 30%;
  margin-right: 7rem;
  float: left;
}
.page-wrap2{
  text-align:center;
}
.page-wrap{
  text-align:left;
  width:300px;
  height:100%;
  margin:0 auto;
}
</style>
<div>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo right"><i class="material-icons">cloud</i>Logo</a>
      <?php foreach ($get_info as $val): ?>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          <li><a href="">NIS : <?php andro($val->nis); ?></a></li>
          <li><a href="">NAMA : <?php andro($val->nama_lengkap); ?></a></li>
          <li><a href="">KELAS : <?php andro($val->kelas); ?></a></li>
          <li><a href="">JURUSAN : <?php andro($val->jurusan); ?></a></li>
        </ul>

  <?php endforeach; ?>

  </div>
  </nav>


  <h4 id="title_ketua" style="text-align:center;">Ketua Osis</h4>


<div class="custom0" id="ketua">
  <div class="custom">
    <div class="card">
     <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="<?php echo base_url('assets/img/1.jpg'); ?>">
     </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4">Wildan<i class="material-icons right">more_vert</i></span>
       <p><input class="with-gap" name="ketua" type="radio" id="ketua1" value="ketua1"  />
       <label for="ketua1">Pilih</label></p>
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4">Wildan<i class="material-icons right">close</i></span>
       <p>Here is some more information about this product that is only revealed once clicked on.</p>
     </div>
   </div>
    </div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo base_url('assets/img/2.jpg'); ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4">Kevin<i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="ketua" type="radio" id="ketua2" value="ketua2"  />
     <label for="ketua2">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4">Kevin<i class="material-icons right">close</i></span>
     <p>Here is some more information about this product that is only revealed once clicked on.</p>
   </div>
 </div>
</div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo base_url('assets/img/3.jpg'); ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4">Arip<i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="ketua" type="radio" id="ketua3" value="ketua3"  />
     <label for="ketua3">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4">Arip<i class="material-icons right">close</i></span>
     <p>Here is some more information about this product that is only revealed once clicked on.</p>
   </div>
  </div>
  </div>
</div>

<h4 id="title_wakil" style="text-align:center;display:none;" >Wakil osis</h4>

<div class="custom0" id="wakil" style="display:none;">
  <div class="custom">
    <div class="card">
     <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="<?php echo base_url('assets/img/1.jpg'); ?>">
     </div>
     <div class="card-content">
       <span class="card-title activator grey-text text-darken-4">Ani<i class="material-icons right">more_vert</i></span>
       <p><input class="with-gap" name="wakil" type="radio" id="wakil1" value="wakil1"  />
       <label for="wakil1">Pilih</label></p>
     </div>
     <div class="card-reveal">
       <span class="card-title grey-text text-darken-4">Wildan<i class="material-icons right">close</i></span>
       <p>Here is some more information about this product that is only revealed once clicked on.</p>
     </div>
   </div>
    </div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo base_url('assets/img/2.jpg'); ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4">Elvan<i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="wakil" type="radio" id="wakil2"  value="wakil2" />
     <label for="wakil2">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4">Kevin<i class="material-icons right">close</i></span>
     <p>Here is some more information about this product that is only revealed once clicked on.</p>
   </div>
 </div>
</div>


<div class="custom">
  <div class="card">
   <div class="card-image waves-effect waves-block waves-light">
     <img class="activator" src="<?php echo base_url('assets/img/3.jpg'); ?>">
   </div>
   <div class="card-content">
     <span class="card-title activator grey-text text-darken-4">Cindy<i class="material-icons right">more_vert</i></span>
     <p><input class="with-gap" name="wakil" type="radio" id="wakil3"  value="wakil3" />
     <label for="wakil3">Pilih</label></p>
   </div>
   <div class="card-reveal">
     <span class="card-title grey-text text-darken-4">Arip<i class="material-icons right">close</i></span>
     <p>Here is some more information about this product that is only revealed once clicked on.</p>
   </div>
  </div>
  </div>
</div>
<div class="page-wrap">
  <div class="page-wrap2">
<a id="pilih_ketua" class="waves-effect waves-light btn" style="position:center;"><i class="material-icons right">check</i>pilih ketua</a>
<a id="pilih_wakil" class="waves-effect waves-light btn" style="display:none;"><i class="material-icons right">check</i>pilih wakil</a>
</div>
</div>
  <script>
  $(document).ready(function(){
  $("#pilih_ketua").click(function(){
    if (!$('input[name=ketua]:checked').val() ) {
      swal("Anda belum memilih", "", "warning");
}else{
    swal({
  title: 'Anda yakin ?',
  text: "",
  type: 'question',
  showCancelButton: true,
  allowOutsideClick: false,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Iya'
}).then(function () {
    $("#wakil").show( "fade", 2500 );
    $("#title_wakil").show( "fade", 2500 );
    $("#pilih_wakil").show( "fade", 2500 );
    $("#ketua").hide();
    $("#title_ketua").hide();
    $("#pilih_ketua").hide();
})
}
  });

  $("#pilih_wakil").click(function(){
    if (!$('input[name=wakil]:checked').val() ) {
      swal("Anda belum memilih", "", "warning");
}else{
    var ccs = $("input:radio[name=ketua]:checked").val();
    var ssc = $("input:radio[name=wakil]:checked").val();

    $.ajax({
    url :'<?php echo site_url('vote/vote_now'); ?>',
    type:'post',
    data:{
      ketua : ccs,
      wakil : ssc,
    },
    beforeSend:function(){
       //tampilkan animasi loading
    },
    success:function(rs){
      swal({
    title: 'Terimakasih',
    text: "",
    type: 'success',
    showCancelButton: false,
    allowOutsideClick: false,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Keluar'
    }).then(function () {
      window.location.href='<?php echo site_url('logout'); ?>';
    })
      console.log(ccs);
      console.log(ssc);
    }
});
}
  })
  window.location.hash="11";
  window.location.hash="12";
  window.onhashchange=function(){window.location.hash="11";}
});
</script>
