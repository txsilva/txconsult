<?php
global $wpdb;

$resultado = $wpdb-get_results("SELECT * FROM wp_users");

echo "<pre>";
print_r($resultado);
?>