<?php
/**
 * This file is part of Piko Datatable
 *
 * @copyright 2020 Sylvain PHILIP.
 * @license MIT; see LICENSE.txt
 * @link https://github.com/piko-framework/piko-datatable
 */
namespace piko\datatable;

class DatatablePluginsAsset extends \piko\AssetBundle
{
    public $name = 'datatable-plugins';

    public $sourcePath = '@app/vendor/bower-asset/datatables.net-plugins';

    public $js = [];

    public $css = [];

    public $dependencies = [
        'piko\datatable\DatatableAsset',
    ];
}