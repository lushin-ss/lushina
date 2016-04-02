<html>
	<?php //подключили голову с title
		require_once 'blocks/head.php';
	?> 
	<?php //подключили стили
		require_once 'blocks/styles.php';
	?> 
<body class="c-layout-header-fixed">
	<?php //подключаем половину хедера, иначе не работает. нужно потом что-то придумать (и стоит ли его вообще выносить)
		require_once 'blocks/header.php';
	?>
	<?php //подключили кнопки "бренд" с логотипами
		//require_once 'blocks/brend.php';
	?>		
	<?php //подключаем QUICK SEARCH
		require_once 'blocks/serch.php';
	?>					
	<?php //подключаем меню
		require_once 'blocks/menu.php';
	?>			
	<?php //закрываем хедер (нужно подумать)
		require_once 'blocks/header_close.php'
	?>
	<?php //восстановление пароля
		require_once 'blocks/user_password_form.php';
	?>
	<?php
	//создание пользователя
		require_once 'blocks/user_registration_form.php';
	?>
	<?php //форма фхода на сайт
		require_once 'blocks/user_login_form.php';
	?>
	<?php //боковая панель переключающая стили
		//require_once 'blocks/quick_sidebar.php';
	?>
<!-- BEGIN: PAGE CONTAINER -->
<div class="c-layout-page">

		<?php //хлебные крошки
			//require_once 'blocks/breadcrumbs.php';
		?>
	
<!-- BEGIN: PAGE CONTENT -->
	<?php //блок с контентом и кнопками вида (нужно потрошить)
		require_once 'blocks/content_box.php';
	?>
	<?php // просто форма с кнопкой
		//require_once 'blocks/bar.php';
	?>
	<?php //слайд-шоу карусель
		require_once 'blocks/carousel.php';
	?>
<!-- END: PAGE CONTENT -->
</div>
<!-- END: PAGE CONTAINER -->
<?php	//!!!футер пока выключен (нужно править)
//require_once 'blocks/footer.php';
?>
	<?php	//стрелочка вверх в футере (возвращает в начало страницы)
		require_once 'blocks/footer_go2top.php';
	?>
	<?php	//скрипты
		require_once 'blocks/script.php';
	?>

</body>
</html>