	<div class="container">
	<h3>Hasil Pencarian</h3>
	<hr>
		<?php
		if(count($user)>0)
		{
			foreach ($user as $u) {
			echo $u->nama ."<br>";
			}
		}
 
		else
		{
			echo "Data tidak ditemukan";
		}
 
		?>
 
	</div>