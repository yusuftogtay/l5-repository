<?php
namespace YusufTogtay\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package YusufTogtay\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityDeleting extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleting";
}
