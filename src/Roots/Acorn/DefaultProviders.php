<?php

namespace Roots\Acorn;

use Illuminate\Support\DefaultProviders as DefaultProvidersBase;

class DefaultProviders extends DefaultProvidersBase
{
    /**
     * The Acorn providers.
     *
     * @var array
     */
    protected $acornProviders =[
        \Roots\Acorn\Assets\AssetsServiceProvider::class,
        \Roots\Acorn\Filesystem\FilesystemServiceProvider::class,
        \Roots\Acorn\Providers\AcornServiceProvider::class,
        \Roots\Acorn\Providers\RouteServiceProvider::class,
        \Roots\Acorn\View\ViewServiceProvider::class,
    ];

    /**
     * Create a new default provider collection.
     *
     * @return void
     */
    public function __construct(?array $providers = null)
    {
        parent::__construct($providers);

        $this->providers = array_merge($this->providers, $this->acornProviders);
    }
}
