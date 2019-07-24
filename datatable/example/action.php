<?php 

$parts = [
	[
		[
			'Id' 		=> '0001',
			'Lang' 		=> 'ID',
			'Name' 		=> 'Name001',
			'Status' 	=> 'Active'
		],
		[
			'Id' 		=> '0002',
			'Lang' 		=> 'EN',
			'Name' 		=> 'Name002',
			'Status' 	=> 'Deactive'
		]
	],
	[
		[
			'Id' 		=> '0003',
			'Lang' 		=> 'ID',
			'Name' 		=> 'Name003',
			'Status' 	=> 'Active'
		],
		[
			'Id' 		=> '0004',
			'Lang' 		=> 'EN',
			'Name' 		=> 'Name004',
			'Status' 	=> 'Deactive'
		]
	],
	[
		[
			'Id' 		=> '0005',
			'Lang' 		=> 'ID',
			'Name' 		=> 'Name005',
			'Status' 	=> 'Active'
		],
		[
			'Id' 		=> '0006',
			'Lang' 		=> 'EN',
			'Name' 		=> 'Name006',
			'Status' 	=> 'Deactive'
		]
	],
];

$total 	  = count($parts);

$current  = $_POST['current'] ?? 1;

$current  = ($current <= 0) ? 1 : $current;

$current  = ($current > $total) ? $total : $current;

$result   = $parts[$current-1];

header('Content-Type: application/json');

echo json_encode([
	'status'	=> 1000,
	'current' 	=> $current,
	'count'		=> count($parts[0]) + count($parts[1]) + count($parts[2]),
	'total'		=> 3,
	'rows' 		=> $result,
]);