<?php
/**
 * Copyright © 2015 Digimix. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Digimix\GmailSmtpApp\Model\Config\Source;

class Authtype implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'ssl', 'label' => 'SSL (Gmail / Google Apps)'],
            ['value' => 'tls', 'label' => 'TLS (Gmail / Google Apps)']
        ];
    }
}
