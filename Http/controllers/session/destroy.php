<?php

use Core\App;
use Core\Authenticator;

(new Authenticator)->logout();

header("location: /");
exit();