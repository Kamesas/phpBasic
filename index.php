<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>

	<header>
		<div class="container">
			<h1>Email app</h1>		
			<p><a href="index.php">Главная</a> | <a href="contact.php">Контакты</a> | <a href="admin.php">Админка</a></p>
		
			<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
			  Login/Logout
			</button>
		</div>
	</header>

	<main>
		<div class="container">
			<div class="row">
				<div class="col-3">
					Почта
					<div>Входящие</div>
					<div>Отправленные</div>
				</div>
				<div class="col">
					<button type="button" class="btn btn-outline-primary">Primary</button>					
					<button type="button" class="btn btn-outline-success">Success</button>

					<div class="row">
						<div class="col">
							<table class="table">
							  <thead>
							    <tr>							     
							      <th scope="col">Отправитель</th>
							      <th scope="col">Тема письма</th>
							      <th scope="col">Дата получения</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>							      
							      <td>Mark</td>
							      <td>Otto</td>
							      <td>@mdo</td>
							    </tr>
							    <tr>							      
							      <td>Jacob</td>
							      <td>Thornton</td>
							      <td>@fat</td>
							    </tr>
							    <tr>							      
							      <td>Larry</td>
							      <td>the Bird</td>
							      <td>@twitter</td>
							    </tr>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>	



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
      	<form>
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>

    </div>
  </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common.js"></script>
</body>
</html>