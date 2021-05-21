<?php
// Array with names
$a[] = "Emerald";
$a[] = "Venus";
$a[] = "PineBrezovica";
$a[] = "Rubin";
$a[] = "SwissDiamond";



// get the q parameter from URL
$q = $_GET["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
	/*for ($i = 0; $i < count($a); $i++){
		if ($q == strtolower(substr($a[$i], 0, $len))) {
			if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
		}
	}*/
    foreach($a as $name) {
		
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>