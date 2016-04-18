<?php
/**
 * Phossa Project
 *
 * PHP version 5.4
 *
 * @category  Library
 * @package   Phossa\Phossa
 * @copyright 2015 phossa.com
 * @license   http://mit-license.org/ MIT License
 * @link      http://www.phossa.com/
 */
/*# declare(strict_types=1); */

/********************************************************************
 * system-wide bootstrap file
 ********************************************************************/

/*
 * define system-wide constants
 */
define('PHOSSA_ROOT', dirname(__DIR__));
define('PHOSSA_SYSTEM', PHOSSA_ROOT . '/system');
define('PHOSSA_PUBLIC', PHOSSA_ROOT . '/public');
define('PHOSSA_DOMAIN', PHOSSA_ROOT . '/domain');

/*
 * load system-wide configures
 */
include __DIR__ . '/config/system.conf.php';

/*
 * load domain mapping file
 */
define('PHOSSA_APPDIR', PHOSSA_DOMAIN . '/' . 'example.com');

/*
 * load domain specific bootstrap file
 */
include PHOSSA_APPDIR . '/bootstrap.php';
