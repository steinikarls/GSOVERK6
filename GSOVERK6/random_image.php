<?php 
$images = [
['file' => 'myndir/image-1.jpg',
 'caption' => 'Fjallagarður'],
['file' => 'myndir/image-2.jpg',
 'caption' => 'trégarður'],
['file' => 'myndir/image-3.jpg', 
'caption' => 'á í skógi'],
['file' => 'myndir/image-4.jpg',
 'caption' => 'Frumskógur']
];
shuffle($images);

?>

<?php  

$mappa = fopen('myndir.csv', 'r');

$titles = fgetcsv($mappa);
$myndir = [];
while (($data = fgetcsv($mappa)) !== false)
{
	if (count($data) == 1 && is_null($data[0])) 
	{
		continue;
	}
	$myndir[] = array_combine($titles, $data);
}
fclose($mappa);
shuffle($myndir);









?>