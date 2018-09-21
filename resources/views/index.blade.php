 

             @if (session('status'))
    
                      {{ session('status') }}
                 
             @endif
               @if ($errors->any())
                  <ul>
                      @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            
             @endif
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href='/css/app.css' rel='stylesheet' type='text/css'>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<title>User validation</title>
</head>
<body>
	<div id="container">
		<h1> User add </h1>
		<form action="{{ route('Create-user') }}" method="post">
		 {{ csrf_field() }}	
			<label for="useradd">Заполните данные</label>
			<input type="text" class="form-control col-5" id="name" name="name" placeholder="ФИО">
			<input type="text" class="form-control col-5" id="email" name="email" placeholder="example@mail.com">
			<input type="text" class="form-control col-5" id="phone" name="phone" placeholder="+380 XX XXX XX XX">
			<input type="text" class="form-control col-5" id="ip" name="ip" placeholder="IP address: xx.xx.xx.xx">
			<input type="text" class="form-control col-5" id="mac" name="mac" placeholder="MAC address: xx:xx:xx:xx:xx">


			<button type="submit" class="btn btn-outline-primary">Confirm</button>
</form>

</div>


</body>
</html>