<?php

namespace NovaAjaxSelect;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\SupportsDependentFields;

class AjaxSelect extends Field
{
    use SupportsDependentFields;
    public $showOnIndex = false;

    public $showOnDetail = false;

    public $component = 'nova-ajax-select';

    public function get($endpoint)
    {
        $this->withMeta(['endpoint' => $endpoint]);

        return $this;
    }

    public function parent($attribute)
    {
        $this->withMeta(['parent_attribute' => $attribute]);

        return $this;
    }
}
