<?php

namespace SilverStripe\ContentReview\Extensions;

use SilverStripe\Admin\LeftAndMain;
use SilverStripe\Core\Extension;

/**
 * @extends Extension<LeftAndMain>
 */
class ContentReviewLeftAndMainExtension extends Extension
{
    /**
     * Append content review schema configuration
     *
     * @param array &$clientConfig
     */
    protected function updateClientConfig(&$clientConfig)
    {
        $clientConfig['form']['ReviewContentForm'] = [
            'schemaUrl' => $this->owner->Link('schema/ReviewContentForm')
        ];
    }
}
