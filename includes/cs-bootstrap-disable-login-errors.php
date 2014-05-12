<?php

// blendet die Fehlermeldungen beim Anmelden aus
add_filter('login_errors',create_function('$a', "return null;"));
