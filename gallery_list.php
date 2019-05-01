<?php include 'above.php';
?>
<style>
.btn {
    background-color: DodgerBlue; /* Blue background */
    border: none; /* Remove borders */
    color: white; /* White text */
    padding: 12px 16px; /* Some padding */
    font-size: 16px; /* Set a font size */
    cursor: pointer; /* Mouse pointer on hover */
}

/* Darker background on mouse-over */
.btn:hover {
    background-color: RoyalBlue;
}
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php
	echo '<p>&nbsp;</p>
	<h2>Gallery</h2>';
	$dir = "gallery";
	if (is_dir($dir))
	{	if ($dh = opendir($dir))
		{
		    $folderArray = scandir($dir,1);
		    $numOFfolders = sizeof($folderArray);
		    $i =0; $j=0;
			    while($i<$numOFfolders)
			    {
			    	if($folderArray[$i]=="."||$folderArray[$i]=="..")
			        {
			    		$i++;$j++;
			    		continue;
			    	}
			    	
			        $year = $dir."/".$folderArray[$i];
			        $Descr=basename($year);
			        if( $j++ % 5 ==0 )
			        echo '<p>&nbsp;</p>';

			        echo '&nbsp;&nbsp;&nbsp;&nbsp; <button class="btn"><i class="fa fa-folder"></i></button> <a href="gallery.php?id='.$Descr.'">Gallery '.$Descr.'</a>&nbsp;&nbsp;&nbsp;&nbsp;';

			    //echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="gallery.php?id='.$Descr.'">Gallery '.$Descr.'</a>';
			        $i++;$j++;
				}

			closedir($dh);
		}
	}
	?>
<p>&nbsp;</p>
<?php include 'below.php';
?>