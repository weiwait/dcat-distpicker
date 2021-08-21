<?php

namespace Weiwait\Distpicker\Form;

use Dcat\Admin\Form\Field;
use Weiwait\Distpicker\Models\ChinaArea;

class Distpicker extends Field
{
    protected $view = 'weiwait.distpicker::index';

    public function __construct($column, $arguments = [])
    {
        if (!is_array($column))
            throw new \Exception('column must be an array');

        if (3 != count($column))
            throw new \Exception('column length must be 3');

        $provinces = ChinaArea::provinces();
        $cities = ChinaArea::cities();
        $districts = ChinaArea::districts();

        $areaId = 'id' . md5(join('', $column));

        $this->addVariables(compact('areaId', 'provinces', 'cities', 'districts'));

        $this->addVariables(['initDetail' => false, 'initCoordinate' => false]);

        $column = array_merge($column, ['longitude', 'latitude', 'detail']);

        parent::__construct($column, $arguments);
    }

    public function coordinate(array $lngLat): Distpicker
    {
        $this->addVariables(['initCoordinate' => true, 'longitude' => $lngLat[0], 'latitude' => $lngLat[1]]);

        return $this;
    }

    public function detail(string $detail): Distpicker
    {
        $this->addVariables(['initDetail' => true, 'detail' => $detail]);

        return $this;
    }

    public function height(int $height): Distpicker
    {
        $this->addVariables(['height' => $height]);

        return $this;
    }
}
