<?php
//configuration settings for this web application
//these are defined as global constants which will be available in ALL SCRIPTS, CLASSES and FUNCTIONS

define ('__DEBUG',0);  //constants are defined using the define keyword 1=true, 0=false

define ('__USER_ERROR_PAGE', 'VIEWS/view_error.php');  //script to redirect to in case of error



define ('__LOGIN_ATTEMPT_MAX',3);  //limit the number of login attempts

?>