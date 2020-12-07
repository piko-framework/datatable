<?php
/**
 * This file is part of the Piko user module
 *
 * @copyright 2020 Sylvain PHILIP.
 * @license MIT; see LICENSE.txt
 * @link https://github.com/piko-framework/piko-datatable
 */
namespace piko\datatable;

use piko\Piko;
/**
 * Datatable utility class
 *
 * @author Sylvain PHILIP <contact@sphilip.com>
 */
class Datatable
{
    /**
     * Init Datatable assets for the view
     * @param \piko\View $view
     * @param string $tableId DOM ID of the table element
     * @param array $options Datatable options
     */
    public static function init($view, $tableId, $options = [])
    {
        DatatableBootstrapAsset::register($view);

        if (isset($options['language'])) {
            $bundle = DatatableI18nAsset::register($view);
            $langFile = static::getLangFile($options['language']);
            unset($options['language']);
            $content = file_get_contents(Piko::getAlias($bundle->publishedBasePath . '/datatable-i18n/' . $langFile));
            // Remove comments
            $content = preg_replace('/\/\*.*?\*\//Us', '', $content);
            $options['language'] = json_decode($content);
        }

        $options = json_encode($options, JSON_PRETTY_PRINT|JSON_UNESCAPED_SLASHES);

        $script = <<<JS
$(function() {
    $('#{$tableId}').DataTable({$options});
});
JS;
        $view->registerJs($script);
    }

    /**
     * Get the right Datatable language file
     *
     * @param string $lang
     * @return string
     */
    protected static function getLangFile($lang = 'en')
    {
        $langFiles = [
            'en' => 'English.lang',
            'fr' => 'French.lang',
            'es' => 'Spanish.lang',
            'it' => 'Italian.lang',
            'de' => 'German.lang',
            // TODO: Load more languages
        ];

        return isset($langFiles[$lang]) ? $langFiles[$lang] : 'English.lang';
    }
}
