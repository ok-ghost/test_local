<?php
	function get_percent_from_number ($percent, $number) {
		$result = $number * $percent / 100;
		return round($result, 1);
	}
	function get_diff_numbers ($number1, $number2) {
		if ($number1 > $number2) {
			$diff = (1 - $number2 / $number1) * 100;
		} elseif ($number1 < $number2) {
			$diff = ($number2 / $number1 - 1) * 100;
		} else {
			$diff = 0;
		}
		if ($number1 > $number2) {
			return "- " . round($diff, 1) . "%";
		} elseif ($number1 < $number2) {
			return "+ " . round($diff, 1) . "%";
		} else {
			return $diff;
		}
	}
	function get_plus_percent ($num_plus, $perc_plus) {
		$result = $num_plus * (1 + $perc_plus / 100);
		return round($result, 1);
	}
	function get_minus_percent ($num_minus, $perc_minus) {
		$result = $num_minus * (1 - $perc_minus / 100);
		return round($result, 1);
	}
?>