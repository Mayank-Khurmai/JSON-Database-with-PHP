<html>
	<head>
		<title>JSON Database</title>
	</head>
	<body>
	<form method="POST" action="index2.php">
		<h2>Username</h2>
			<input type="text" required="required" placeholder="Username" name="username">
			<br>
		<h2>Comment </h2>
			<input type="text" required="required" placeholder="Comment" name="comment">
			<br>
			<br>
		<input type="submit">
	</form>
	
	
	</body>
</html>	


<?php	
			$myObject = json_decode(file_get_contents('a2.json'));
				
				echo "
					<table border='2px' style='width:400px; border:2px solid black;'>
						<thead>
							<tr>
								<th>Username</th>
								<th>Comment</th>
							</tr>
						</thead>
					";
				
				foreach($myObject as $x){
					
				echo "
						<tr>
							<td>".$x->username."</td>
							<td>".$x->comment."</td>
						</tr>
					";
				}
				
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
		$formdata = array(
			  'username'=> $_POST['username'],
			  'comment'=> $_POST['comment']
		   );
		   
		$current_data = file_get_contents('a2.json');  
		$array_data = json_decode($current_data, true); 
		$array_data[] = $formdata;  
		$final_data = json_encode($array_data, JSON_PRETTY_PRINT);  
		if(file_put_contents('a2.json', $final_data)) 
		{
				echo "
						<tr>
							<td>".$_POST['username']."</td>
							<td>".$_POST['comment']."</td>
						</tr>
					";
		}					
	}
	
	echo "
		</table>
		";
?>
