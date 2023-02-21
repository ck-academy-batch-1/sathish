<?php
// Define the villages for each district in Tamil Nadu
$villages = array(
	'viluppuram' => array('Anandhapuram', 'Kallakurichi', 'Tindivanam', 'Vikravandi', 'Viluppuram'),
	'vellore' => array('Arcot', 'Gudiyatham', 'Katpadi', 'Tirupathur', 'Vaniyambadi', 'Vellore')
);

// Get the selected district from the POST data
$district = $_POST['district'];

// If the district exists in the array, return its corresponding list of villages
if (array_key_exists($district, $villages)) {
	echo json_encode($villages[$district]);
} else {
	echo json_encode(array());
}
?>
