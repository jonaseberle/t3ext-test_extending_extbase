<?php

declare(strict_types=1);
namespace MyVendor\TestExtendingExtbase\Domain\Model;

use TYPO3\CMS\Extbase\Domain\Model\FrontendUser;

class User extends FrontendUser
{
    /**
     * @var bool
     */
    public $testField;

    /**
     * @var \DateTime
     */
    public $crdate;
}
