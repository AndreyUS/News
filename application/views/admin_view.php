<div class="header">
	<div class="header-b">
		<h1>Панель администрирования</h1>
	</div>
</div>
<br>
<div class="body-text">
	<div class="body-text-b">
		<p>
		Привет, <b><?php echo $_SESSION['login']; ?></b> <br>
		<a href="<?php echo Route::$path_to_script?>/admin/add">Добавить новость</a> <br>
		<a href="<?php echo Route::$path_to_script?>/admin/list">Посмотреть список новостей</a> <br>
		<a href="<?php echo Route::$path_to_script?>/admin/logout">Выйти</a> <br>
		</p>
	</div>
</div>