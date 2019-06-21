<?php
namespace Dooko\Products\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Db;
use System\Models\File;

class PhotoTags extends FormWidgetBase {
    public function widgetDetails(){
        return [
            'name' => 'PhotoTags',
            'description' => 'Поле для добавления вложенных продуктов.'
        ];
    }

    public function render(){
        $this->prepareVars();
        return $this->makePartial('widget');
    }

    public function prepareVars(){
        $this->vars['id'] = $this->model->id;
        $this->vars['tags'] = Db::table('system_files')->where('field', 'photo_gallery_add')->select('id', 'title')->groupBy('title')->get();
        $this->vars['name'] = $this->formField->getName().'[]';
        $this->vars['selectedValues'] = $this->getLoadValue() ?? array();
    }

    public function loadAssets(){
        // $this->addCss('css/select2.min.css');
        // $this->addJs('js/select2.min.js');
    }
}