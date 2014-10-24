<div class="header">
	<div class="header-b">
		<h1>Добро пожаловать!</h1>
	</div>
</div>
<br>
<div class="body-text">
	<div class="body-text-b">
		<h3>Список новостей:</h3>
	</div>
</div>
<p>
<?php
if(empty($data)){
	echo "Нет новостей.<br>";
}else {
	$count = 0;
	foreach($data as $news) { ?>
			<div class="body-text">
				<div class="body-text-b">
					<h2><a href="<?php echo Route::$path_to_script.'/news/show/'.$news['id']?>"><?php echo $news['title'];?></a></h2>
					<small> <b> Добавлена: </b> <?php echo $news['date']; ?>
 					в <?php echo $news['time']; ?> <br></small>
				</div>
			</div>
			<br>
<?php }?>
<?php }?>
<?php 	
	$total_pages = ceil($total_rows / 10);
	for ($i=1; $i<= $total_pages; $i++) {
?>
<a href="<?php echo Route::$path_to_script.'/main/page/'. $i?>"><?php echo $i;}?> </a>  
</p>