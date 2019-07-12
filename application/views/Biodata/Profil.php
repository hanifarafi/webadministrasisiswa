<title><?php echo $judul; ?></title>
<img src="Hanif.jpg" class="rounded mx-auto d-block" alt="gambar">
<div class="container-fluid">
<h3>Halo nama saya hanif arafi saya biasa dipanggil hanif</h3>
</div>
<table border='1'>
<tr>
    <th>id</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>Pendidikan</th>
</tr>
<?php foreach($profil as $p){?>
<tr>
    <td><?php echo $p ->id  ?></td>
    <td><?php echo $p ->nama ?></td>
    <td><?php echo $p ->umur ?></td>
    <td><?php echo $p ->pendidikan ?></td>
</tr>
<?php } ?>
</table>    