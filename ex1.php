<html>

<head>
<title>Multiplication table 100 x 100</title>
</head>

<body>

    <table border="1">
    
    <?php 
    for( $i = 1; $i < 101; $i++)
    {
    echo "<tr>";
        for( $k=1; $k<101; $k++)
        {
    $z = $i * $k;
        echo "<td class='$bg'><a href='#' title='$i * $k = ". $i * $k . " ' >" . $i * $k . "</a></td>" ;
        }		
    echo  "</tr>";
    }        
    ?>
    </table>

</body>

</html>