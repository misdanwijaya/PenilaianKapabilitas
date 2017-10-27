<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Fungsi untuk Merubah susunan format tanggal
function ubahformatTgl($tanggal) {
    $pisah = explode('/',$tanggal);
    $urutan = array($pisah[2],$pisah[1],$pisah[0]);
    $satukan = implode('-',$urutan);
    return $satukan;
}