<!DOCTYPE html>
<html>
	<head>
		<title>client >> index.php</title>
		<h1>___ client >> index.php ___</h1>	
	</head>
	<body>		
		<h1>_______________________</h1>


		<form action='/login.php' method='POST'>
			User : 
			<input type='text' name='index_u'     value='admin' required> <br>
			Pass : 
			<input type='password' name='index_p' value='0000' required> <br>
  			
			<input type='submit' value='Login'>
			<!-- <input type='reset' value='reset'> -->
		</form>
		
		<h2>_______________________</h2> <br>


		<form action='/register.php' method='POST'>
			UserName : 
			<input type='text' name='reg_u' value='A' > <br>
			PassPhrase : 
			<input type='password' name='reg_p' value='1111' > <br>
			<!-- PassPhrase : 
			<input type='password' name='reg_p2' value='1' > <br> -->

			<input type='submit' value='Register'>
		</form>


		<h1>_______________________</h1>
	</body>

</html>