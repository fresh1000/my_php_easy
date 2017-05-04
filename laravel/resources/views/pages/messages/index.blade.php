<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>Гостевая книга</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Гостевая книга</h1><hr/>
		
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
	    
	    <div class="text-right"><b>Всего сообщений:</b> <i class="bage">0</i></div><br/>
		
		<div class="messages">
			<div class="panel-heading">
				<h3 class="panel-title">
					<span>Карлсон</span>
					<span class="pull-right label label-info">17:15:00/03.07.2015</span>
				</h3>
			</div>
			<div class="panel-body">
				Sadasdasd
				Asdasdasdas
				SAdasdsdasd
				SAFEFRFRddsd
				<hr/>
				<div class="pull-right">
					<a class="btn btn-info" href="#">
						<i class="glyphicon-pencil"></i>
					</a>
					<button class="btn btn-danger">
						<i class="glyphicon glyphicon-trash"></i>
					</button>
				</div>
			</div>
		</div>
	
	</div>

	
	

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>