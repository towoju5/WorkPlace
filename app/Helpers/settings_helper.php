<?php


use App\Models\SettingsModel;

$settings   = new SettingsModel();


// Constants starts here
$conf = $settings->where('id', 1)->first();
defined('conf')       ||  define('conf',    $conf); // Get website settings