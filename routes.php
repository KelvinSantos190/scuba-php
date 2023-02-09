<?php
require_once('controller.php');

load_view(($_GET['page']??'login').'.view');
