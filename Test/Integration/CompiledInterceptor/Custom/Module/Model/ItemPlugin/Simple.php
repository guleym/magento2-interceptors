<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
// @codingStandardsIgnoreFile

namespace Creatuity\Interception\Test\Integration\CompiledInterceptor\Custom\Module\Model\ItemPlugin;

class Simple
{
    /**
     * @param $subject
     * @param $invocationResult
     * @return string
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function afterGetName($subject, $invocationResult)
    {
        return $invocationResult . '!';
    }
}
