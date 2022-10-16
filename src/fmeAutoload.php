<?php 

// 自动加载
use dove\Config;

$entry = Config::get('fme','entry');

if(!!$entry && $baseUrlArr[1]==$AClist['fme_setting']['entry']) {
	Plugin::load('fme',[Route::baseUrl(true),$baseUrl,$AClist],true);
}
