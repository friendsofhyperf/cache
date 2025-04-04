<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/main/README.md
 * @contact  huangdijia@gmail.com
 */

namespace FriendsOfHyperf\Cache\Contract;

class_alias(Repository::class, CacheInterface::class);

if (false) { // @phpstan-ignore-line
    /**
     * @deprecated since v3.1, use `\FriendsOfHyperf\Cache\Contract\Repository` instead, will removed in v3.2
     */
    interface CacheInterface extends Repository
    {
    }
}
