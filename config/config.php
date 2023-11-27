<?php

session_cache_limiter('nocache');
session_start();



$sql = "SELECT * FROM settings ";
$result = mysqli_query($link, $sql);
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);

  $name = $row['bname'];
  $logo = $row['logo'];
  $emaila = $row['email'];
  $phone = $row['phone'];
  $title = $row['title'];
  $bankurl = $row['sname'];
  $wl = $row['wl'];
  $rb = $row['rb'];
  $ids = $row['id'];

  $cy = $row['cy'];
}

if (isset($row['bname'])  && isset($row['logo']) && isset($row['title']) && isset($row['wl'])) {
  $name = $row['bname'];
  $logo = $row['logo'];
  $emaila = $row['email'];
  $phone = $row['phone'];
  $title = $row['title'];
  $bankurl = $row['sname'];
  $wl = $row['wl'];
  $rb = $row['rb'];
  $ids = $row['id'];
  $cy = $row['cy'];
} else {
  $ids = '';
  $name = '';
  $logo = '';
  $emaila = '';
  $phone = '';
  $title = '';
  $bankurl = '';
  $wl = '';
  $rb = '';
  $cy = '';


  $api  = '';
  $eapi  = '';
}
