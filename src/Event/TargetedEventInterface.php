<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-irc-bot-react for the canonical source repository
 * @copyright Copyright (c) 2008-2013 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Event
 */

namespace Phergie\Event;

/**
 * Interface for the TargetedEvent
 */
interface TargetedEventInterface
{
    public function getTargets();
    public function setTargets(array $targets);
}
