<?php
    $size = 5;
    
    // reversed pyramid star pattern
    for ($i = 0; $i < $size; $i++) {
        // printing spaces
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = 0; $k < ($size - $i) * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    // pyramid star pattern
    for ($i = 2; $i <= $size; $i++) {
        // printing spaces
        for ($j = $size; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
?>
<br>
<br>
<?php
    // heart star pattern
    $size = 6;
    
    for ($i = $size / 2; $i < $size; $i += 2) {
        // print first spaces
        for ($j = 1; $j < $size - $i; $j += 2) {
            echo "&nbsp;&nbsp;";
        }
        // print first stars
        for ($j = 1; $j < $i + 1; $j++) {
            echo "*";
        }
        // print second spaces
        for ($j = 1; $j < $size - $i + 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print second stars
        for ($j = 1; $j < $i + 1; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    // lower part
    // inverted pyramid
    for ($i = $size; $i > 0; $i--) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i * 2; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
<br><br>


<?php
    $size = 5;
    
    // upside pyramid
    for ($i = 1; $i <= $size; $i++) {
        // printing spaces
        for ($j = $size; $j > $i; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    // downside pyramid
    for ($i = 1; $i <= $size - 1; $i++) {
        // printing spaces
        for ($j = 0; $j < $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // printing star
        for ($k = ($size - $i) * 2 - 1; $k > 0; $k--) {
            echo "*";
        }
        echo "<br>";
    }
?>
<br>
<br>
