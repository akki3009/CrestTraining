<html>
    <head>
        <title>Pagination</title>
    </head>
    <body>
    	<br><br>
        <?php include_once 'paging.php'; ?>
        <table border="2" align="center">
        	<thead>
        		<th>Employee Id</th>
	            <th>First Name</th>
	            <th>Last Name</th>
            </thead>
            <tbody>
            <?php 
            // print_r($result);
            	foreach($result as $data) { 
                	echo '<tr>';
                    echo '<td>'.$data['EmployeeId'].'</td>';
                    echo '<td>'.$data['First_Name'].'</td>';
                    echo '<td>'.$data['Last_Name'].'</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
        </table>
            <center>
            	<br><br><br>
            	<?php
	            if($page_counter == 0){
	            	echo "<a href=?start= $page_counter > 0 </a>";
	                for($j=1; $j < $pagination; $j++) {
	                	echo "<a href=?start=$j > ". $j ."</a>";
	                }
	            }
	            else
	            {
	                echo "<a href=?start=$previous > Previous </a>"; 
	                for($j=0; $j < $pagination; $j++) {
	                	if($j == $page_counter) {
		                    echo "<a href=?start=$j >". $j ."</a>";
		                }else{
		                    echo "<a href=?start=$j >". $j ."</a>";
		                } 
	            	}
	            	// echo $j;
		            if($j != $page_counter+1)
		            {
		            	echo "<a href=?start=$next > Next </a>"; 
		            }
	        	} 
	            ?>
	        </center>
    </body>
</html>