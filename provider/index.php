							   
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Provider</title>
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
					<th>Received Request Provider</th>
				<tr>		
		        <tr>
			<td>
               <p class="msg">
			  
				<?php 
				print_r($_POST);
				echo "<br>";
				print('Provider Port - 8460');
				?> 	
			   </p>
			</td>
			</tr>
			</table>			   
				   </div>
		
    </body>	
 </html>
