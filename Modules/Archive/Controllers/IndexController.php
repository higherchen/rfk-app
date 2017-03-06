<?php

namespace Archive\Controllers;

use Raichu\Foundation\Controller;

use Archive\Models\ArchiveModel;
use Services\EcodeService;

class IndexController extends Controller
{
    protected $_singleton = [    // `make` it to use
        'archive_model' => ArchiveModel::class,
    ];

    /**
     * Get 用户认证
     *
     * @example /api/archive
     */
    public function index()
    {
        $response = $this->make('response');
        $response->code = EcodeService::OK;
        $response->data = $this->make('archive_model')->getAll();
    }
}
