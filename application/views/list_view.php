<div class="header">
	<div class="header-b">
		<h1>Список новостей</h1>
	</div>
</div>
<br>
<?php
if(empty($data)) {
	echo "Нет новостей.<br>";
} else {
	$count = 0;
	foreach($data as $news){ ?>
			<div class="body-text">
				<div class="body-text-b">
					<a href="<?php echo Route::$path_to_script.'/news/show/'.$news['id']?>"><?php echo $news['title'];?></a><br>
				</div>
			</div>
			<br>
<?php }?>
<?php }?>
<a href="<?php echo Route::$path_to_script?>/admin">В админку</a>