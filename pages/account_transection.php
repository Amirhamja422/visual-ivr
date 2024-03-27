<?php
include '../libs/db.php';
//$account = $_GET['value'];
$accountNo = $_GET['value'];
include '../api/get-transection.php';
$arr_data = json_decode($result, true);
//$sql = "SELECT * FROM `last_5_account_transaction` WHERE `account_no`='".$account."'";
//echo $sql;
//$data = mysqli_query($con,$sql);
?>

<div class="main_body" style="height:259px;">
	<table class="table" style="width: 100%;color: #ffffff; text-align: center;">
		<thead >
			<tr>
				<th>SL</th>
				<th>Date</th>
				<th>Type</th>
				<th>Amount</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for($i=0;$i<5;$i++){
				echo "<tr>
						<td>".$arr_data[$i]['tran_serial']."</td>
						<td>".$arr_data[$i]['date']."</td>
						<td>".$arr_data[$i]['type']."</td>
						<td>".$arr_data[$i]['amount']."</td>
					</tr>";
			}
			/*while ($row = mysqli_fetch_assoc($data)) {
				echo "<tr>
				<td>".$row['created_at']."</td>
				<td>".$row['dr']."</td>
				<td>".$row['cr']."</td>
			</tr>";
			}*/
			?>			
		</tbody>
	</table>	
</div>
