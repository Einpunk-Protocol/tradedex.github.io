<?php

//fetch total investors that requested withdrawal//

$sql3 = "SELECT * FROM wbtc ";
$result3 = mysqli_query($link, $sql3);
if (mysqli_num_rows($result3) > 0) {
	$total3 = mysqli_num_rows($result3);
} else {
	$total3 = 0;
}

//fetch total investors online

$sql2 = "SELECT * FROM users WHERE session = 1 ";
$result2 = mysqli_query($link, $sql2);

if (mysqli_num_rows($result2) > 0) {

	$total2 = mysqli_num_rows($result2);
} else {
	$total2 = 0;
}

//fetch total investors that registered

$sql = "SELECT * FROM users ";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {

	$total = mysqli_num_rows($result);
} else {
	$total = 0;
}


//fetch total investors that has invested

$sql1 = "SELECT COUNT(*) AS total FROM btc";
$result1 = mysqli_query($link, $sql1);
$row1 = mysqli_fetch_assoc($result1);
$total1 = $row1['total'];

// Calculate the sum of "moni" from the "wbtc" table.
$sql_qry1 = "SELECT SUM(moni) AS count FROM wbtc";
$duration1 = $link->query($sql_qry1);
$row1 = $duration1->fetch_assoc();
$withdraw = $row1['count'];

// Calculate the sum of "usd" from the "btc" table.
$sql_qry = "SELECT SUM(usd) AS counter FROM btc";
$duration = $link->query($sql_qry);
$row = $duration->fetch_assoc();
$deposit = $row['counter'];
