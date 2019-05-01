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
        h2 {text-align: center;}
    </style>
</head>

<body>
    <p>&nbsp;</p>

    <style>
    b,i{color: blue;}
    h2{text-align: center;}
    </style>

    <table>
         <tr>
            <th>S. No.</th>
            <th>Name</th>
            <th>Courses Enrolled</th>
            <th>Current Organisation OR Institute</th>
        </tr>


<?php
$year=$_GET['id'];
$year=$year.'.txt';
$path_parts = pathinfo($year);
$j=1;
echo '<h2>Alumni List '.$path_parts['filename'].' </h2>';

$file = fopen("alumni/$year","r") or die("Error");
while(($row = fgets($file)) != false) 
{   echo '<tr>';
    $col = explode("_",$row,4);
    
    for($i=0;$i<3;$i++) 
    {   if($i==0)
        {   echo '<td>'.$j.'</td>'; 
            $j=($j+1);
        }
        echo "<td>".$col[$i]."</td>";
    }
    echo '</tr>';
}fclose($file);
?>
</table>
</body> 
<p>&nbsp;</p>

<p>&nbsp;If you are one of our alumni & your name does not appear in this list or needs an update consider <a href="alumni_form.php"> <b><i> Registering yourself (click here)</i></b> </a>.</p>

<?php include 'below.php';
?>