<?php
namespace YusufTogtay\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package YusufTogtay\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
