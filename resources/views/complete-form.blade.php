<!DOCTYPE html>
<html>
<head>
	<title>Complete_Form</title>

</head>
	<style >
	body {
	background: #2e8b57; 
	background: -webkit-linear-gradient(to left, #2e8b57 , #243949); 
	background: linear-gradient(to left, #2e8b57 , #243949);
}
			.complate{
				margin-left: 200px; 
				margin-top: 100px;
				font-size: 20px;
				margin-right: 10px;
			

			}
			table{

				border: 1px solid black;
				width: 50px;
				height: 400px;
				margin-left: 350px;
				border-radius: 20px;
				padding: 40px;
				padding-right: 5px;
				font-size: 20px;
				text-align: left;
				margin-top: 100px;
				font-family: courier;
				background-color: #add8e6;

			
			}
			h1{
				padding-right: 100px;
				text-align: center;
				font-size: 24px;
				margin-top: 0px;
				margin-left: 30px;
				margin-right: 10px;
				padding-top: 10px; 
				background-color: #5f9ea0;
				height: 50px;
				width: 200px;
				padding-left: 90px;
				padding-right:150px; 
				font-style: 
				top:100px;	
					
			}
			.logo{
				position: absolute;
				left: 400px;
				top: 130px;
				height: 40px;

			}
			form{
				text-align: center;
			}
			.add-student{

				float: left;
				margin-left: 50px;
				width: 100px;
				height: 100px;
							



			}
			.show-student{
				float: right;
				margin-right: 100px;
				height: 100px;
				
			}
			button{
				width: 110px;
			}
	
			
		
	</style>
<body>
	<div class="complete">
	<div class="logo">
				
				<img src=" {{ URL::asset('img/nory13.png') }}" width="100px" >

		</div>
		<table>
			<tr>
				<td>
				<h1> Complete Form </h1>
				<br>
		           	Firstname: {{ $firstname }} <br><br>
		           	Middle: {{ $middle }} <br><br>
		           	Lastname: {{ $lastname }} <br><br>
		           	Course: {{ $course }} <br><br>
		           	 ID Number: {{ $id_number }} <br><br>
		         
		      <br><br>
		    	<div class="/add-student">	
		    	<form method="POST" action="/add-students">
			  			{{ csrf_field() }}
			  			<button type="submit"> Add Student </button>
		    	</form>
		    	</div>
		    	<div class"/show-student">
		    	<form method="POST" action="/show-students">
		    		{{ csrf_field() }}
		    			<button type="submit"> Show All</button>
		  	  	</form>
		  	  	</div>
</td>
		    </tr>
		</table>
</body>
</html>