<?php
include('connection.php');
$machineid = $_GET['machine'];
echo'
<table class="table table-striped table-bordered table-hover" id="dataTables-Transactions">
<thead>
<tr> 
<th><center>No. of 5 cents</th>
<th><center>No. of 10 cents</th>
<th><center>no. of 25 cents</th>
<th><center>No. of one peso</th>
<th><center>No. of five peso</th>
<th><center>No. of ten peso</th>
<th><center>Total Money</th>
</tr>';
                                        
$query = "SELECT * FROM inventorycoin_tbl WHERE id=" . $machineid;	
$records = mysqli_query($link,$query);
                                                    
 while($data=mysqli_fetch_row($records))
{
echo"<tr>";
                                                        
echo"<td>".$data[1]."</td>";	
echo"<td>".$data[2]."</td>";
echo"<td>".$data[3]."</td>";
echo"<td>".$data[4]."</td>";
echo"<td>".$data[5]."</td>";
echo"<td>".$data[6]."</td>";
echo"<td>".$data[7]."</td>";
echo"</tr>";
                                                        
}
echo '</table>';

echo'
<table class="table table-striped table-bordered table-hover" id="dataTables-Transactions">
<thead>
<tr> 
<th><center>No. of 20 Bills</th>
<th><center>No. of 50 Bills</th>
<th><center>No. of 100 Bills</th>
<th><center>No. of 200 Bills</th>
<th><center>No. of 500 Bills</th>
<th><center>No. of 1000 Bills</th>
<th><center>Total Money</th>                                               
</tr>';

$query = "SELECT * FROM inventorybill_tbl WHERE id=" . $machineid;    	
$records = mysqli_query($link,$query);

while($data=mysqli_fetch_row($records))
{
echo"<tr>";
                                                        
echo"<td>".$data[1]."</td>";	
echo"<td>".$data[2]."</td>";
echo"<td>".$data[3]."</td>";
echo"<td>".$data[4]."</td>";
echo"<td>".$data[5]."</td>";
echo"<td>".$data[6]."</td>";
echo"<td>".$data[7]."</td>";														
echo"</tr>";
                                                        
}
echo'</table>';
?>