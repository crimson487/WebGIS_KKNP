<?php

namespace Config;


use CodeIgniter\Config\Routing as BaseRouting;

class Routing extends BaseRouting
{
    // ... (biarkan konfigurasi lainnya tetap sama)
    
    /**
     * Set auto routing to true
     */
    public bool $autoRoute = false;
    
    /**
     * Translate URI dashes to underscores
     */
    public bool $translateURIDashes = false;
    public string $defaultNamespace = 'App\Controllers';
}