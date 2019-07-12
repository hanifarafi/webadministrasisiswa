        <title><?php echo $judul2; ?></title>
        <h5>Berikut data data mahasiswa</h5>
        <form action="<?php echo base_url('index.php/Mahasiswa/cari')?>" action="GET">
				<div class="form-group">
					<label for="cari">Data yang ingin  anda cari</label>
					<input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
				</div>
				<input class="btn btn-primary" type="submit" value="Cari">
			</form>
	    <table  class="table table-striped" border="1">
		<tr>
            <th scope="col">Nomor</th>
			<th scope="col">Nama</th>
			<th scope="col">Alamat</th>
			<th scope="col">Pekerjaan</th>
            <th scope="col">Jenjang Karir</th>
            <th scope="col">Opsi</th>
		</tr>
        <?php
        $no=1;
        foreach($user as $u){
        ?>
		<tr>
            <td scope="row"><?php echo $no++ ?></td>
			<td scope="row"><?php echo $u->nama ?></td>
			<td scope="row"><?php echo $u->alamat ?></td>
			<td scope="row"><?php echo $u->pekerjaan ?></td>
            <td scope="row"><?php echo $u->jenjang?></td>
            <td scope="row">    
            <?php echo anchor('index.php/Mahasiswa/hapus/'.$u->id,'Hapus'); ?>
            <?php echo anchor('index.php/Mahasiswa/tambah/','Tambah'); ?>
            </td>
		</tr>
		<?php } ?>
	</table>