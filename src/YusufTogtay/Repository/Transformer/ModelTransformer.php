<?php namespace YusufTogtay\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use YusufTogtay\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package YusufTogtay\Repository\Transformer
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
