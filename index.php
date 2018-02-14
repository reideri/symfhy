<?php 

	// Controllers
	include_once 'controllers/template.controller.php';
	include_once 'controllers/body.controller.php';

	// Models
	include_once 'models/routes.model.php';
	include_once 'models/body.model.php';

	$template = new TemplateController();
	$template->Template();