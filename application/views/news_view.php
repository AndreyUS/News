<div class="header">
	<div class="header-b">
		<h1><?php echo $data['title'] ?></h1>
	</div>
</div>
<p>
<div class="body-text">
	<div class="body-text-b">
		Дата добавления: <?php echo $data['date']?> 
		Время добавления: <?php echo $data['time']?> <br>
	</div>
</div>
<br>
<div class="body-text">
	<div class="body-text-b">
		<p align="center">
			<img src="<?php echo Route::$path_to_script?>/images/<?php echo $data['img']?>"> <br>
		</p>
		<?php echo $data['text'] ?>
	</div>
</div>
<a href="<?php echo Route::$path_to_script?>">На главную</a>
</p>