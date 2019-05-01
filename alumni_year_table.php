<?php include 'above.php';
?>
<head>
    <style>
        table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

        td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
                }

        tr:nth-child(even) {
                            background-color: #dddddd;
                            }
        h5 {text-align: center;}
    </style>
</head>

	<table>
      
	<?php
	echo '<p>&nbsp;</p>
	<h2>Alumni Section</h2>
	<h5>Click over the graduating year to see the list</h5>';
	$dir = "alumni";
	if (is_dir($dir))
	{	if ($dh = opendir($dir))
		{
		    $fileArray = scandir($dir,1);
		    $numOFfiles = sizeof($fileArray);
		    $i =0;$j=0;
		    while($i<$numOFfiles)
			    {
			    	if($fileArray[$i]=="."||$fileArray[$i]=="..")
			        {
			    		$i++;$j++;
			    		continue;
			    	}
			    	
			       	$year = $dir."/".$fileArray[$i];
			        $Descr=basename($year);
			        $path_parts = pathinfo($Descr);
			        
			        if( $j++ % 8 ==0 )
			        echo '<tr>';
			        echo '<td><ul><a href="alumni_List.php?id='.$path_parts['filename'].'" target="_blank">'.$path_parts['filename'].'</a></ul></td>';
			    	if( $j % 8 ==0 )
			        echo '</tr>';

			    	$j++;
			        $i++;
				}
			closedir($dh);
		}
	}
	?>	
</table>

<?php include 'below.php';
?>