<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link https://github.com/phergie/phergie-irc-event for the canonical source repository
 * @copyright Copyright (c) 2008-2013 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Event
 */

namespace Phergie\Event;

/**
 * TargetedEvent
 *
 * @category Phergie
 * @package Phergie\Event
 */
class TargetedEvent extends Event implements TargetedEventInterface
{
    use TargetedEventTrait;
}
