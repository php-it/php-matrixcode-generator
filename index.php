<?php
function generateMatrixCode($digits) {
	// Check if $digits is equal to 16, 64, 256, 1024 or 4096
	if ($digits != 16 && $digits != 64 && $digits != 256 && $digits != 1024 && $digits != 4096) {
		return 'Invalid argument. Only 16, 64, 256, 1024 or 4096 digits are supported.';
	}
	
	$random_code = array();
	$outputStr = '<table style="border-spacing: 0px; border: 7px solid black;"><tr>';

	// Number of digits: 16
	if ($digits == 16) {
		for ($i = 1; $i < 17; $i++) {
			$random_code[$i] = mt_rand(0,1);
			if ($random_code[$i] == 1) {
				$outputStr .= '<td style="width: 20px; height: 20px; background-color: black"></td>';
			}
			else {
				$outputStr .= '<td style="width: 20px; height: 20px"></td>';
			}
			if ($i == 16) {
				$outputStr .= '</tr>';
				break;
			}
			if ($i % 4 == 0) {
				$outputStr .= '</tr><tr>';
			}
		}
	}
	
	// Number of digits: 64
	if ($digits == 64) {
		for ($i = 1; $i < 65; $i++) {
			$random_code[$i] = mt_rand(0,1);
			if ($random_code[$i] == 1) {
				$outputStr .= '<td style="width: 20px; height: 20px; background-color: black"></td>';
			}
			else {
				$outputStr .= '<td style="width: 20px; height: 20px"></td>';
			}
			if ($i == 64) {
				$outputStr .= '</tr>';
				break;
			}
			if ($i % 8 == 0) {
				$outputStr .= '</tr><tr>';
			}
		}
	}
	
	// Number of digits: 256
	if ($digits == 256) {
		for ($i = 1; $i < 257; $i++) {
			$random_code[$i] = mt_rand(0,1);
			if ($random_code[$i] == 1) {
				$outputStr .= '<td style="width: 10px; height: 10px; background-color: black"></td>';
			}
			else {
				$outputStr .= '<td style="width: 10px; height: 10px"></td>';
			}
			if ($i == 256) {
				$outputStr .= '</tr>';
				break;
			}
			if ($i % 16 == 0) {
				$outputStr .= '</tr><tr>';
			}
		}
	}
	
	// Number of digits: 1024
	if ($digits == 1024) {
		for ($i = 1; $i < 1025; $i++) {
			$random_code[$i] = mt_rand(0,1);
			if ($random_code[$i] == 1) {
				$outputStr .= '<td style="width: 5px; height: 5px; background-color: black"></td>';
			}
			else {
				$outputStr .= '<td style="width: 5px; height: 5px"></td>';
			}
			if ($i == 1024) {
				$outputStr .= '</tr>';
				break;
			}
			if ($i % 32 == 0) {
				$outputStr .= '</tr><tr>';
			}
		}
	}
	
	// Number of digits: 4096
	if ($digits == 4096) {
		for ($i = 1; $i < 4097; $i++) {
			$random_code[$i] = mt_rand(0,1);
			if ($random_code[$i] == 1) {
				$outputStr .= '<td style="width: 5px; height: 5px; background-color: black"></td>';
			}
			else {
				$outputStr .= '<td style="width: 5px; height: 5px"></td>';
			}
			if ($i == 4096) {
				$outputStr .= '</tr>';
				break;
			}
			if ($i % 64 == 0) {
				$outputStr .= '</tr><tr>';
			}
		}
	}
	
	$outputStr .= '</table>';
	return $outputStr;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP Matrix Code-generator</title>
</head>
<body>
<h1>Example of a 1024 digits matrix code</h1>
<?php echo generateMatrixCode(1024); ?>
</body>
</html>