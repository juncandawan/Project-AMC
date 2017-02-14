<?php
    include('connection.php');
   // $date = $_GET['date'];
   $startdate = $_GET['startdate'];
   $enddate = $_GET['enddate'];
   
    $machineid = $_GET['machineid'];

    echo '<table class="table table-striped table-bordered table-hover" id="dataTables-TransactionPage">';
    echo '<thead>';
    echo '<tr>';
    echo '<th><center>Transaction Number</th>';  
    echo '<th><center>Date and Time</th>';
    echo '<th><center>Currency</th>';
    echo '<th><center>Amount in Peso</th>';
    echo '<th><center>Amount of Currency Inserted</th>'; 
    echo '<th><center>Deducted Per Transaction</th>';
     echo '<th><center>Transaction Status</th>';
    echo '<th><center>Total Amount in Peso</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    
    $query = "SELECT * FROM transactions_tbl WHERE dtime BETWEEN '" . $startdate . " 00:00:00' AND '" . $enddate . " 23:59:00' AND machineNo=" . $machineid; 
    $result = mysqli_query($link,$query);

    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['dtime'] . "</td><td>" . $row['currency'] . "</td><td>" . $row['AmountInPeso'] . "</td><td>". $row['AmountofCurInserted'] . "</td><td>". $row['deducted'] . "</td><td>".  $row['transactionStatus'] . "</td><td>". $row['TotalInPeso'] . "</td>";
    }
	
	?>
    <div class="col-lg-12">
	<label for="name">Total Income:</label>
	</div>											
	<div class="col-lg-2">
	<?php

    $query =  "SELECT SUM(deducted) FROM transactions_tbl WHERE dtime BETWEEN '" . $startdate . " 00:00:00' AND '" . $enddate . " 23:59:00' AND machineNo=" . $machineid;
			
	$result = mysqli_query($link,$query) or die(mysqli_error());
    $income = $result;
				
    // Print out result
	while($row = mysqli_fetch_array($income))
	{
	echo '<input type="text" class="form-control" placeholder="Total Income" disabled="disabled" name="Income" value="'.$row['SUM(deducted)'].'"/>';
	echo "<br />";
	}
    echo '</tbody>';
    echo '</table>';
?>
</div>