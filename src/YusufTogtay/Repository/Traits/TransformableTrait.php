<?php

namespace YusufTogtay\Repository\Traits;

/**
 * Class TransformableTrait
 * @package YusufTogtay\Repository\Traits
 * @author Anderson Andrade <contato@andersonandra.de>
 */
trait TransformableTrait
{
    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
