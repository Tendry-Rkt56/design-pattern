<?php

use Singleton\Singleton;

require_once 'Singleton.php';

$instance_1 = Singleton::getInstance();
$instance_2 = Singleton::getInstance();

if ($instance_1 == $instance_2) echo "Les deux objets sont des instances uniques .\n";
else echo "Les deux objets ne sont pas des instances uniques";