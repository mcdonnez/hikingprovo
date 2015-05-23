<?php
	/*function to render the templates*/
function render($template, $data = array())
{
	$path = '../view/' . $template . '.php';
	if (file_exists($path))
	{
		extract($data);
		require($path);
	} else {
		echo "Error: File does not exist";
	}
}
?>