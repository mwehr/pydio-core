<?php
/*
 * Copyright 2007-2013 Charles du Jeu - Abstrium SAS <team (at) pyd.io>
 * This file is part of Pydio.
 *
 * Pydio is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pydio is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Pydio.  If not, see <http://www.gnu.org/licenses/>.
 *
 * The latest code can be found at <http://pyd.io/>.
 *
 * Re-run the diagnostic tests
 */

/**
 * If you want to run the tests, first comment this line!
 * It is disabled for security purpose
 */
die("You are not allowed to see this page (comment first line of the file to access it!)");
require_once("base.conf.php");

$outputArray = array();
$testedParams = array();
$passed = true;
$passed = AJXP_Utils::runTests($outputArray, $testedParams);
print(AJXP_Utils::testResultsToTable($outputArray, $testedParams, true));
AJXP_Utils::testResultsToFile($outputArray, $testedParams);
