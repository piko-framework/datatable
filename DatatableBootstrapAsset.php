<?php
/**
 * This file is part of Piko Datatable
 *
 * @copyright 2020 Sylvain PHILIP.
 * @license MIT; see LICENSE.txt
 * @link https://github.com/piko-framework/piko-datatable
 */
namespace piko\datatable;

class DatatableBootstrapAsset extends \piko\AssetBundle
{
    public $name = 'datatable-bs4';

    public $sourcePath = '@app/vendor/bower-asset/datatables.net-bs4';

    public $js = [
        'js/dataTables.bootstrap4.min.js',
    ];

    public $css = [
        'css/dataTables.bootstrap4.min.css'
    ];

    public $dependencies = [
        'piko\ui\BootstrapAsset',
        'piko\datatable\DatatableAsset',
    ];
}