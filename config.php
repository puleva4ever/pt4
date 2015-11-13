<?php

	require('lib\Page.php');
	require('lib\Header.php');
	require('lib\Menu.php');
	require('lib\Content.php');
	require('lib\Footer.php');

	define('LAYOUT',
		"<!DOCTYPE html>
		<html>
		<head>
			<style type='text/css'>"
	);

	$links = array(
		'Google'=>'http://www.google.com',
		'Twitter'=>'http://www.twitter.com'
	);

	$css = file_get_contents('css/style.css');

	$page1 = new Page('Titulo en plan a saco','images/logo.png',$css,$links,'Esto es el content de la pagina','Me encanta este footer, por que es como la caña de españa');

?>