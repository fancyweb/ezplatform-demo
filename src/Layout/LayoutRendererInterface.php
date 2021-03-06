<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
declare(strict_types=1);

namespace App\Layout;

interface LayoutRendererInterface
{
    /**
     * @param int|null $contentId
     *
     * @return string
     */
    public function render(?int $contentId = null): string;
}
