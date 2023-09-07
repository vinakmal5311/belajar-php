<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

// for( $i = 0; $i < 5; $i++ ) {
//     echo "hello word <br>";
// }
// $i = 0;
// while( $i < 5 ){
//     echo "hello word <br>";
// $i++;
// }

// $i = 10;
// do {
//     echo "hello word <br>";
//     $i++;
// } while ( $i < 5 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
    <?php for ( $i = 1; $i <= 5; $i++ ) :
        // for( $i = 1; $i <= 3; $i++){
        //     echo "<tr>";
        //     for( $c = 1; $c <= 5; $c++)
        //     {
        //         echo "<td>$i.$c</td>";
        //     }
        //     echo "</tr>";
        // }
    ?>
    <?php if( $i % 2 == 0) :?>
    <tr class="warna-baris">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for($c = 1; $c <= 5; $c++) :?>
            <td><?="$i.$c";?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
    </table>
</body>
</html>