<div class="header">
	<div class="header-b">
		<h1>Добавить новость</h1>
	</div>
</div>
<br>
<div class="body-text">
	<div class="body-text-b">
		<p>
		<form enctype="multipart/form-data" action="" method="post">
			Заголовок*: <br>
			<input type="text" size="50" name="title"> <br>
			Текст*:<br> 
			<textarea cols="50" rows="10" name="text"></textarea> <br>
			Картинка:<br> 
			<input type="file" name="image"> <br>
			<input type="submit" value="Добавить">
		</form>
		<a href="../admin">В админку</a>
		<?php if($add_status=="data_empty") { ?>
		<p style="color:green">*Поля обязательные для заполнения.</p>
		<?php } elseif($add_status=="image_upload_error") { ?>
		<p style="color:red">Ошибка при загрузке изображения.</p>
		<?php } elseif($add_status=="data_successful") { ?>
		<p style="color:green">Успешно добавлено.</p>
		<?php } ?>
		</p>
	</div>
</div>
