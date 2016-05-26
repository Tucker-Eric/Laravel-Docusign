<?php

namespace LaravelDocusign;

use DocuSign\Rest\Client as DocuSignClient;

class Client extends DocuSignClient
{
    public function __construct(array $params = [])
    {
        $this->username = config('docusign.username');
        $this->password = config('docusign.password');
        $this->integrator_key = config('docusign.integrator_key');
        $this->host = config('docusign.host');

        parent::__construct($params);
    }
    
    public function get($endpoint)
    {
        return $this->{$endpoint};
    }

    public function create()
    {
        return $this;
    }
}