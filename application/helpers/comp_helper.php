<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function format_rupiah($angka)
{ 
	$rupiah = number_format($angka, 2, ',', '.');
	return $rupiah;
}
