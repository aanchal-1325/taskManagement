<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
	<title>To-Do-List</title>
</head>

<body>
	<div class="heading">
	<h1>
	Update Task
	</h1>
</div>


<form method="post" action="request.php" class="input_form">
		
		<input class="task_input" type="hidden" name="taskId" value="<?php echo $_GET['Update']?>" >
	
		<input type="text" name="nameTask" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn"> Task Name</button><br>



	
  <input class="task_input" type="datetime-local" class="" id="birthdaytime" name="Date">
  <button type="submit" name="submit" id="add_btn" class="add_btn"> Date&Time</button><br>


	<input type="text" name="Description" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn"> Description</button><br>

		<input type="text" name="taskStatus" value="Pending" class="task_input">
		<button type="submit" name="submit" id="add_btn" class="add_btn"> task status</button><br>
		<div style="text-align: center; margin-top:50px">
<button  type="submit" name="update" id="add_btn" class="add_btn">Submit</button><br>
	</div>
</form>





</body>
</html>