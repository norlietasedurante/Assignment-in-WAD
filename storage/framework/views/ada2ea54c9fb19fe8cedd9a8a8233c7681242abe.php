<!DOCTYPE html>
<html>
<head>
	<title> Edit Student Form </title>
</head>
<body>
<style type="text/css">
		body{
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
		#content{
				height: 100%;
    			background: #517fa4; 
				background: -webkit-linear-gradient(to left, #517fa4 , #243949); 
				background: linear-gradient(to left, #517fa4 , #243949); 
				border: 2px solid #A7A7A7 ;
				border-radius: 10px;
				padding-left: 40px;
				padding-right: 40px;
				padding-bottom: 30px;
				padding-top: 30px;
				margin-top: 50px;
				margin-left: 400px;
				margin-right: 400px;
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
				text-align: center;
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
			.logo{
				position: absolute;
				left: 330px;
				top: 70px;
				height: 40px;

			}
			</style>
 <div class="nory">

 	<div class="logo">
				
				<img src=" <?php echo e(URL::asset('img/nory13.png')); ?>" width="110px" >	
		</div>
<form method="POST" action="/edit" >
<?php echo e(csrf_field()); ?>

<div class="body">	
				<h1>Edit Stdent</h1>
									<label>
										<input type="hidden" name="id" value="<?php echo e($id); ?>">
									</label>
								<br><label > First Name: </label> 
								<input type="text" name="firstName"  value="<?php echo e($firstname); ?>" required> <br>

								<br><label> Middle:</label> 
								<input type="text" name="middleName" value="<?php echo e($middle); ?>" required> <br>

								<br><label> LastName: </label>
								<input type="text" name="lastName" value="<?php echo e($lastname); ?>" required> <br>

								<br><label> Course: </label>
								<input type="text" name="course_stud" value="<?php echo e($course); ?>" required> <br>

								<br><label> idNumber: </label> 
								<input type="number" name="idNumber" value="<?php echo e($id_number); ?>" required> <br><br>

								<br><button type="submit" value="register" > Save </button>
												
				</div>
				</form>	
 	
 </form>
</body>
</html>