<?php
## This is just an example script that calls the CRM_Utils_String class.

require_once 'vendor/autoload.php';

printf("Result [%s]\n", CRM_Utils_String::ellipsify("hello world", 10));
