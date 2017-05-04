<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>Редактирование: Гостевая книга</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Редактирование: Гостевая книга</h1><hr/>
		
		<form method="POST" id="id-form_messages">
			
			<div class="form-group">
				<label for="name">Имя: *</label>
				<input class="form-control" placeholder="Имя" name="name" type="text" id="name"></input>
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input class="form-control" placeholder="E-mail" name="email" type="email" id="email"></input>
			</div>

			<div class="form-group">
				<label for="message">Сообщение: *</label>
				<input class="form-control" placeholder="Текст сообщения" name="message" cols="50" id="message"></input>
			</div>
			
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Дабавить">
			</div>

		</form>
	    
	</div>

	
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>