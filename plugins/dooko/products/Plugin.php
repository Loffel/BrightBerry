<?php namespace Dooko\Products;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerFormWidgets(){
        return [
            'Dooko\Products\FormWidgets\Phototags' => [
                'label' => 'Хеш-тег вложенного продукта',
                'code' => 'phototags'
            ]
        ];
    }

    public function registerSettings()
    {
    }
}
