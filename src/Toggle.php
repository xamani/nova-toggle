<?php

namespace Xamani\NovaToggle;

use Laravel\Nova\Fields\Boolean;

class Toggle extends Boolean
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'nova-toggle';

    public function color($color)
    {
        return $this->withMeta([
            'color' => $color,
        ]);
    }

    public function onColor($on_color)
    {
        return $this->withMeta([
            'on_color' => $on_color,
        ]);
    }

    public function offColor($off_color)
    {
        return $this->withMeta([
            'off_color' => $off_color,
        ]);
    }
}
