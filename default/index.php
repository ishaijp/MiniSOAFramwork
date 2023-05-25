<?php 
		    if($_SERVER['REQUEST_METHOD'] == 'POST'){
				$number = $_POST['ticket'];
			 
			$data = array(
				'number' => $number,
				); 
			 
			$ch = curl_init();

			$options = array(
				CURLOPT_URL => 'http://localhost:8440/index.php',
				CURLOPT_POST => 1,
				CURLOPT_POSTFIELDS => $data,
				CURLOPT_RETURNTRANSFER => 1
				);
				
			curl_setopt_array($ch, $options);

			$result = curl_exec($ch);

			curl_close($ch);

			print_r($result);	
			}
			?>	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Consumer</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<style> 
input[type=text] {
    width: 100%;
	float: center;
    margin: 0 auto;
    box-sizing: border-box;
}
input[type=number] {
    width: 40px;
    box-sizing: border-box;
}
</style>
	</head>

	<body>
             <table class="tbl_one">
			     <tr>
					<th>Send Request</th>
				<tr>		
		        <tr>
			<td>
			   <form action="" method="post">
                  <button type="ticket" name="ticket" value="<?php echo mt_rand(1, 100); ?>" onclick="alert('Generate a Ticket!')">Click Me!</button>
			   </form>
			</td>
			</tr>
			</table>			   
				   </div>

<div class="footer">
	   <h3>isha_ijp.... :)</h3>
   </div>	
	    </div>		
    </body>	
 </html>
