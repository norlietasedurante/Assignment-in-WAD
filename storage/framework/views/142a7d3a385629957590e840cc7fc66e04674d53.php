<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
		body{
				background: #2e8b57; 
				background: -webkit-linear-gradient(to left, #2e8b57 , #243949); 
				background: linear-gradient(to left, #2e8b57 , #243949);
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
		table{
				border-collapse: collapse;
				width: 100%;
				color: white;
			}	
		td {
				padding: 10px;
				text-align: left;
				border-bottom: 1px solid #ddd;
			}
		th{
				padding: 10px;
				background-color: #4CAF50;
				color: white;
			}
		table, th, td{
					border: 1px solid black;
			}
		table{
					width: 900px;
				margin-left: 150px;
			}
		.update{
			padding-left: 10px;
			text-align: center;
		}
		.delete{
			padding-left: 10px;
			text-align: center;
		}
</style>
<body>
	<table>
		<thead>
			<tr>
				<th> FirstName </th>
				<th> Middle  </th>
				<th> LastName </th>
				<th> Course </th>
				<th> ID_number </th>
				
				<th></th>
				<th></th>
				
			</tr>
		</thead>

	<tbody>

			<?php foreach ($users as $student):
			?>
				<tr>
					<!-- <td> <?php echo e($student->id); ?></td>
					<td> <?php echo e($student->firstname); ?> </td>
					<td> <?php echo e($student->middle); ?>  </td>
					<td> <?php echo e($student->lastname); ?> </td>
					<td> <?php echo e($student->course); ?>  </td>
				 	<td> <?php echo e($student->id_number); ?>  </td>
					<td>
 -->
 					<td> <?php echo $student->firstname ?> </td>
 					<td> <?php echo $student->middle ?> </td>
 					<td> <?php echo $student->lastname ?> </td>
 					<td> <?php echo $student->course ?> </td>
 					<td> <?php echo $student->id_number ?> </td>
		<td>			
<form method="POST" action="/update">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($student->id); ?>">
		<input type="hidden" name="firstName" value="<?php echo e($student->firstName); ?>">
		<input type="hidden" name="middleName" value="<?php echo e($student->middleName); ?>">
		<input type="hidden" name="lastName" value="<?php echo e($student->lastName); ?>">
		<input type="hidden" name="course_stud" value="<?php echo e($student->course_stud); ?>">
		<input type="hidden" name="idNumber" value="<?php echo e($student->idNumber); ?>">
		<button class="btn" >edit</button>

	</form>

						</td>
						<td>
		<form method="POST" action="delete/<?php echo e($student->id); ?>">
				<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" value="<?php echo e($student->id); ?>">
		<input type="hidden" name="firstName" value="<?php echo e($student->firstName); ?>">
		<input type="hidden" name="middleName" value="<?php echo e($student->middleName); ?>">
		<input type="hidden" name="lastName" value="<?php echo e($student->lastName); ?>">
		<input type="hidden" name="course_stud" value="<?php echo e($student->course_stud); ?>">
		<input type="hidden" name="idNumber" value="<?php echo e($student->idNumber); ?>">
		<button class="btn" >delete</button>

							

						</form>
						</td>
			<?php endforeach; ?>
	</tbody>
		
	
	</table>
	

</body>
</html>