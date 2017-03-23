<!DOCTYPE html>
<html>
<head>
	<title></title>

		<style type="text/css">
body {
	background: #2e8b57; 
	background: -webkit-linear-gradient(to left, #2e8b57 , #243949); 
	background: linear-gradient(to left, #2e8b57 , #243949);
}
			.nory{
				margin-left: 200px; 
				margin-top: 50px;
				font-size: 20px;
				margin-right: 100px;
			

			}
			.body{
				width: 560px;
				border: 1px solid black;
				margin-left: 100px;
				border-radius: 10px;
				
				padding: 10px;
				padding-right: 50px;
				font-size: 20px;
				text-align: right;
				font-family: courier;
				background-color: #add8e6;

			
			}
			h1{
				border-radius: 5px;
				text-align: right;
				font-size: 25px;
				margin-top: 20px;
				margin-left: 30px;
				margin-right: 10px;
				padding-top: 20px; 
				background-color: #5f9ea0;
				height: 50px;
				width: 300px;
				padding-left: 90px;
				padding-right:150px; 
				font-family: "Times New Roman" , Times, serif;
				

				
			}
			.logo{
				position: absolute;
				left: 330px;
				top: 90px;
				height: 40px;

			}
			input{
				margin-top: 10px;
				width: 300px;
				padding: 10px 10px;
				margin: 8px 0px;


			}
			button[type=submit]{
				width: 150px;
				text-align: center;

			}
			button:hover{
				color: red;
			}
			
		</style>
</head>
<body>
	<div class="nory">
		<form method="POST" action="/process-registration">
				{{ csrf_field() }}
				
<div class="logo">
				
				<img src=" {{ URL::asset('img/nory13.png') }}" width="110px" >	
		</div>
		<div class="body">	
				<h1>LVCC Registration Form</h1>
						
								<br><label for="name"> First Name: </label> 
								<input type="text" name="firstname"  placeholder=" first name" required> <br>

								<br><label for="middle"> Middle:</label> 
								<input type="text" name="middle" placeholder="middle initial" required> <br>

								<br><label for="lastname"> LastName: </label>
								<input type="text" name="lastname" placeholder=" last name" required> <br>

								<br><label for="course"> Course: </label>
								<input type="text" name="course" placeholder=" course" required> <br>

								<br><label for="id_number"> ID_number: </label> 
								<input type="number" name="id_number" placeholder="id_number" required> <br><br>

								
														<form method="POST" action="/process-registration">
			  			    		{{ csrf_field() }}
			  			
								<br><button type="submit" value="register" > Register </button>
		    	</form>		
				</div>	
		</form>
		
	</div>
		
</body>
 
</html>