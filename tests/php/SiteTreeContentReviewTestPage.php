<?php

namespace SilverStripe\ContentReview\Tests;

use Page;
use SilverStripe\Dev\TestOnly;
use SilverStripe\ORM\ArrayList;

/**
 * Mock Page class with canReviewContent method to return false on first call
 * and true on second call
 */
class SiteTreeContentReviewTestPage extends Page implements TestOnly
{
    public $ContentReviewType = 'Custom';

    private $i = 0;

    private $reviewer;

    public function setReviewer($reviewer)
    {
        $this->reviewer = $reviewer;
    }

    public function canReviewContent()
    {
        $this->i++;
        return $this->i === 1 ? false : true;
    }

    public function NextReviewDate()
    {
        return '2020-02-20 12:00:00';
    }

    public function OwnerUsers()
    {
        return ArrayList::create([$this->reviewer]);
    }
}
