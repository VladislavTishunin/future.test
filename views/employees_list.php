<html>
<head>
	<title>Комментарии</title>
	<link href="style/main.css" rel="stylesheet">
</head>
	<body>
		<div id="header">
			<div class="page_align">	
				<div class="content">
					<div class="wdth">
						<div id="head_info">
							<div class="contact_info">
								<p>Телефон: 8 (900) 000-00-00</p>
								<p>Email:  <span>email@pochta.ru </span></p>
							</div>
							<div id="title"><h1>Комментарии</h1></div>
						</div>
						<div id="head_logo"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="page_align">
			<div class="content">
				<?php foreach($comments as $c):?>
				<div class="comment">
					<div class="title"><b><?=$c['name'];?></b></div>
					<div class="date"><?=date('H:i d.m.Y',$c['date']);?></div>
					<div class="text"><?=$c['content'];?></div>
				</div>
				<?php endforeach;?>
				<form id="comment_form" action="?act=create" method="POST">
					<p class="form_name">Оставить комментарий</p>
					<label>
						<p>Ваше имя</p>
						<div id="name">
							<input type="text" name="name" autocomplete="off">
						</div>
					</label>
					<label>
						<p>Ваш комментарий</p>
						<div id="content">
							<textarea name="content" autocomplete="off"></textarea>
						</div>
					</label>
					<input type="submit" id="sent" value="Отправить">
				</form>
			</div>
		</div>

		<div id="footer">
			<div class="page_align">
				<div class="content">
					<div id="bottom_info">
						<div id="bottom_logo"></div>
						<div class="contact_info">
							<p>Телефон: 8 (900) 000-00-00</p>
							<p>Email: <span>email@pochta.ru </span></p>
							<p>Адрес:  <span>115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1 </span></p>
							<p>&nbsp;</p>
							<p class="copy">© 2010 - 2014 Future. Все права защищены</span></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</body>
</html>