<?php
$conn = pg_connect("host=localhost port=5432 dbname=elearn user=postgres password=Workhard@123");
if (!$conn)
  {
    // echo 'asdasd';
  die('Could not connect: ' . pg_error());
  }
  				
					// echo 'asdasdsad';
                    
                    $name=$_GET['fname'];
					
					// echo $name;
					
                        $query=pg_query($conn,"insert into department(name) values('$name')");
                        if ($query) {	
                            header('Location:department.php');
                            // echo 'asdasd';
                        } 
                        else if(!$query)
                        {
                            echo "<b style='color:black;'>Error Occurred!</b>";
                        }
				?>