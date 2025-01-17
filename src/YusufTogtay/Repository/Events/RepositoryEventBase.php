<?php
namespace YusufTogtay\Repository\Events;

use Illuminate\Database\Eloquent\Model;
use YusufTogtay\Repository\Contracts\RepositoryInterface;

/**
 * Class RepositoryEventBase
 * @package YusufTogtay\Repository\Events
 * @author Anderson Andrade <contato@andersonandra.de>
 */
abstract class RepositoryEventBase
{
    /**
     * @var Model
     */
    protected $model;

    /**
     * @var RepositoryInterface
     */
    protected $repository;

    /**
     * @var string
     */
    protected $action;

    /**
     * @param RepositoryInterface $repository
     * @param Model               $model
     */
    public function __construct(RepositoryInterface $repository, Model $model = null)
    {
        $this->repository = $repository;
        $this->model = $model;
    }

    /**
     * @return Model|array
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return RepositoryInterface
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }
}
