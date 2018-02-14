<?php 

	// Controllers
	include_once 'controllers/template.controller.php';

	// Models
	include_once 'models/routes.model.php';

	$template = new TemplateController();
	$template->Template();