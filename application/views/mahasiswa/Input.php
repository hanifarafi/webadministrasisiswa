<form action="<?php echo base_url()."index.php/Mahasiswa/tambah_aksi";?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Anda Disini">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Alamat</label>
    <input type="text" class="form-control"  name="alamat" id="exampleInputPassword1" placeholder="Masukan Alamat">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Pekerjaan</label>
    <input type="text" class="form-control" name="pekerjaan" id="exampleInputPassword1" placeholder="Masukan Perkjaan anda">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenjang</label>
    <input type="text"  name="jenjang" class="form-control" id="exampleInputPassword1" placeholder="Masukan Jenjang">
  </div>
<input type="submit" class="btn btn-primary" name="submit" value="Tambah">
</form>