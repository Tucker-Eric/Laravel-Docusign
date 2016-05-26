<?php

namespace LaravelDocusign\Facades;

use Illuminate\Support\Facades\Facade;

class DocuSign extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'docusign';
    }
}