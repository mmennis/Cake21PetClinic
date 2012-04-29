CakePHP 2.1 PetClinic
=====================

CakePHP MVC development framework.  Test applicaiton for verification.

Setup Instructions
==================

* Clone this repository to in the htdocs directory of the apahe server.  This can be directly under thehtdocs directory or anywhere with a symbolic link.
* Create a cake2_petclinic database in MySQL.  Check settings in app/Config/database.php
* Use the PetClinic_Tables.sql dumpfile to initialize the database.
* Verify that the php command line interpreter is available and on the executable PATH.
* change directory to the app directory and run `./Console/cake populate`
* Start the webserver and verify that the `pages/home` url works from the application direcory.
* The populate script can be run multiple times.

