<?php

namespace Jitamin\Plugin\RandomColorSelector;

use Jitamin\Foundation\Plugin\Base;
use Jitamin\Model\ColorModel;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('controller:task-creation:form:default', function (array $default_values) {
            $colors = $this->colorModel->getList();
            return array('color_id' => array_keys($colors)[rand(0, count($colors) - 1)]);
        });
    }

    public function getPluginDescription()
    {
        return 'Select random color for each new task';
    }

    public function getPluginAuthor()
    {
        return 'jian玄冰';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/Bing-jitamin';
    }
}
