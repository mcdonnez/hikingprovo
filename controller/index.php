<?php
require_once('../view/functions/render.php');
// this is a test
// determine what page to render
if (isset($_GET['page']))
	$page = $_GET['page'];
else
	$page = 'index';
switch ($page)
{
	case 'hikes':
		render('templates/header', array('active' => 'hikes'));
		render('hikes');
		render('templates/footer');
		break;
	case 'map':
		render('templates/header', array('active' => 'map'));
		render('map');
		render('templates/footer');
		break;
	case 'log':
		render('templates/header', array('active' => 'log'));
		render('log');
		render('templates/footer');
		break;
	case 'login':
		render('templates/header', array('active' => 'login'));
		render('login');
		render('templates/footer');
		break;
	case 'connect':
		render('templates/header', array('active' => 'index'));
		render('functions/connect');
		render('templates/footer');
		break;
	case 'addhike':
		render('templates/header', array('active' => 'index'));
		render('addhike');
		render('templates/footer');
		break;
	case 'addedhike':
		render('templates/header', array('active' => 'index'));
		render('hikedb');
		render('templates/footer');
		break;
	default:
		render('templates/header', array('active' => 'index'));
		render('index');
		render('templates/footer');
		break;
	
}

?>