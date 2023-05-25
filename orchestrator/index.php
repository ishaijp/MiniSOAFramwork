							   
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Orchestrator</title>
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
					<th>Received Request</th>
				<tr>		
		        <tr>
			<td>
               <p class="msg">
			  
				<?php 
				$myarray = implode($_POST);
				if($myarray <= 50){	
				
			$data = array(
				'number' => $myarray,
				'time' => time(), 
				); 	
			 
			$ch = curl_init();

			$options = array(
				CURLOPT_URL => 'http://localhost:8460/index.php',
				CURLOPT_POST => 1,
				CURLOPT_POSTFIELDS => $data,
				CURLOPT_RETURNTRANSFER => 1
				);
				
			curl_setopt_array($ch, $options);

			$result = curl_exec($ch);

			curl_close($ch);

			print_r($result);	
			}else {
				
				$data = array(
				'number' => $myarray,
				'time' => time(), 
				); 	
				
				$ch = curl_init();

			$options = array(
				CURLOPT_URL => 'http://localhost:8480/index.php',
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
			   </p>
			</td>
			</tr>
			</table>			   
				   </div>

	
    </body>	
 </html>
