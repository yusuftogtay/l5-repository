<?php
namespace YusufTogtay\Repository\Presenter;

use Exception;
use YusufTogtay\Repository\Transformer\ModelTransformer;

/**
 * Class ModelFractalPresenter
 * @package YusufTogtay\Repository\Presenter
 * @author Anderson Andrade <contato@andersonandra.de>
 */
class ModelFractalPresenter extends FractalPresenter
{

    /**
     * Transformer
     *
     * @return ModelTransformer
     * @throws Exception
     */
    public function getTransformer()
    {
        if (!class_exists('League\Fractal\Manager')) {
            throw new Exception("Package required. Please install: 'composer require league/fractal' (0.12.*)");
        }

        return new ModelTransformer();
    }
}
