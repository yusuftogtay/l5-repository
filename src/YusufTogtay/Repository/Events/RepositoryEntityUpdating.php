<?php
namespace YusufTogtay\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package YusufTogtay\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityUpdating extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updating";
}
