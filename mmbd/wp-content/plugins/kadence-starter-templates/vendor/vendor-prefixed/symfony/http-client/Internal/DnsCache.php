<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Modified by kadencewp on 01-April-2024 using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace KadenceWP\KadenceStarterTemplates\Symfony\Component\HttpClient\Internal;

/**
 * Cache for resolved DNS queries.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @internal
 */
final class DnsCache
{
    /**
     * Resolved hostnames (hostname => IP address).
     *
     * @var string[]
     */
    public $hostnames = [];

    /**
     * @var string[]
     */
    public $removals = [];

    /**
     * @var string[]
     */
    public $evictions = [];
}
