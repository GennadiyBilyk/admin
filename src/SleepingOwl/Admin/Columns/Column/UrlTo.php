<?php
/**
 * Created by PhpStorm.
 * User: bilyk
 * Date: 25.05.2016
 * Time: 21:37
 */



namespace SleepingOwl\Admin\Columns\Column;

use AdminTemplate;
use Illuminate\View\View;

class UrlTo extends NamedColumn
{

    /**
     * @return View
     */
    public function render()
    {
        $instance = $this->getValue($this->instance, $this->name());

        $attributes = isset($instance['attributes']) ? $instance['attributes'] : [];

        return  view(AdminTemplate::view('column.urlto'), ['instance'=>$instance,'attributes'=>$attributes]);
    }

}