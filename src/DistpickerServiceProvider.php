<?php

namespace Weiwait\Distpicker;

use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;
use Dcat\Admin\Form;
use Weiwait\Distpicker\Form\Distpicker;

class DistpickerServiceProvider extends ServiceProvider
{
	protected $js = [
        'js/index.js',
    ];
	protected $css = [
		'css/index.css',
	];

	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();

		Form::extend('distpicker', Distpicker::class);

        $this->publishable();
	}

	public function settingForm()
	{
		return new Setting($this);
	}
}
