<?php
/**
 * This file is part of Piko Datatable
 *
 * @copyright 2020 Sylvain PHILIP.
 * @license MIT; see LICENSE.txt
 * @link https://github.com/piko-framework/piko-datatable
 */
namespace piko\datatable;

use piko\AssetBundle;

class DatatableAsset extends AssetBundle
{
    public $name = 'datatable';

    public $sourcePath = '@app/vendor/bower-asset/datatables.net/js';

    public $js = [
        'jquery.dataTables.min.js',
    ];

    public $dependencies = [
        'piko\ui\JQueryAsset'
    ];
}