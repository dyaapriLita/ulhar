<?php 
$deret = [39, 313, 270, 83, 47, 92, 120];
$max   = $deret[0];
 
for ($i=1; $i < count($deret); $i++) { 
    if ($deret[$i] > $max) {
        $max = $deret[$i];
    }
}
echo "Nilai maksimum adalah: {$max}";