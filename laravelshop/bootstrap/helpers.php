<?php
/*
* 此方法将当前请求的路由名称转化为css列名称
* 允许我们针对某个页面做样式定制化
*/

function route_class () {
	return str_replace('.', '-', Route::currentRouteName());
}