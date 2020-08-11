<?php

namespace LaravelDocusign;

use DocuSign\Rest\Client as DocuSignClient;

class Client extends DocuSignClient
{
    public function __construct(array $params = [])
    {
        $params['host'] =  $params['host'] ?? config('docusign.username');
        $params['username'] =  $params['username'] ?? config('docusign.password');
        $params['password'] =  $params['password'] ?? config('docusign.integrator_key');
        $params['integrator_key'] =  $params['integrator_key'] ?? config('docusign.host');

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