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

namespace Phossa\Phossa\Message;

use Phossa\Shared\Message\MessageAbstract;

/**
 * Message class for Phossa\Phossa
 *
 * @package Phossa\Phossa
 * @author  Hong Zhang <phossa@126.com>
 * @see     MessageAbstract
 * @version 1.0.0
 * @since   1.0.0 added
 */
class Message extends MessageAbstract
{
    /**#@+
     * @var   int
     */

    /**
     * Environment file "%s" not found
     */
    const ENVFILE_NOT_FOUND     = 1606071049;

    /**#@-*/

    /**
     * {@inheritDoc}
     */
    protected static $messages = [
        self::ENVFILE_NOT_FOUND => 'Environment file "%s" not found',
    ];
}
