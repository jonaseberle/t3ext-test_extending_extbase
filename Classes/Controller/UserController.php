<?php

declare(strict_types=1);
namespace MyVendor\TestExtendingExtbase\Controller;

use MyVendor\TestExtendingExtbase\Domain\Model\User;
use MyVendor\TestExtendingExtbase\Domain\Model\UserGroup;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * Class UserController
 */
class UserController extends ActionController
{

    /**
     * @var \MyVendor\TestExtendingExtbase\Domain\Repository\UserRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $userRepository;

    /**
     * @var \MyVendor\TestExtendingExtbase\Domain\Repository\UserGroupRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    protected $userGroupRepository;

    public function listAction(): string
    {
        $q = $this->userRepository->createQuery()
            ->setLimit(5);
        $q->getQuerySettings()->setRespectStoragePage(false);
        $users = $q->execute()->toArray();
        debug($users, 'fe_users of type ' . User::class . ' with the our custom field ‹testfield› and ‹crdate› as DateTime');

        $q = $this->userGroupRepository->createQuery()
            ->setLimit(5);
        $q->getQuerySettings()->setRespectStoragePage(false);
        $userGroups = $q->execute()->toArray();
        debug($userGroups, 'fe_groups of type ' . UserGroup::class);

        return '';
    }
}
