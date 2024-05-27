<?php

use Core\App;
use Core\Authenticator;

App::resolve(Authenticator::class)->logout();

header("location: /");
exit();