<?php

namespace Digitalion\LaravelSimpleUserSettings\Traits;

trait HasSettings
{
    public function initializeHasSettings()
    {
        $this->casts = array_merge($this->casts, ['settings' => 'array']);
    }
}
