<?php
require_once "controller/template.controller.php";
require_once "controller/feed.controller.php";
require_once "controller/publicidad.controller.php";
require_once "controller/validador.controller.php";
require_once "controller/users.controller.php";

require_once "model/feed.model.php";
require_once "model/publicidad.model.php";
require_once "model/validador.model.php";
require_once "model/users.model.php";

$template = new ControllerTemplate();
$template -> CtrlTemplate();

?>