<?php

declare(strict_types=1);

use Contao\DataContainer;
use Contao\DC_Table;

$GLOBALS['TL_DCA']['tl_stellenangebote'] = array(
    'config' => array(
        'dataContainer'    => DC_Table::class,
        'enableVersioning' => true,
        'sql'              => array(
            'keys' => array(
                'id'    => 'primary',
                'alias' => 'index'
            )
        ),
    ),
    'list' => array(
        'sorting' => array(
            'mode'        => DataContainer::MODE_SORTABLE,
            'fields'      => array('title'),
            'flag'        => DataContainer::SORT_INITIAL_LETTER_ASC,
            'panelLayout' => 'filter;sort,search,limit'
        ),
        'label' => array(
            'fields' => array('title'),
            'format' => '%s',
        ),
        'operations' => array(
            'edit'   => array('href' => 'act=edit', 'icon' => 'edit.svg'),
            'copy'   => array('href' => 'act=copy', 'icon' => 'copy.svg'),
            'delete' => array('href' => 'act=delete', 'icon' => 'delete.svg', 'attributes' => 'onclick="if(!confirm(\'' . ($GLOBALS['TL_LANG']['MSC']['deleteConfirm'] ?? '') . '\'))return false;getBackendScrollOffset()"'),
            'show'   => array('href' => 'act=show', 'icon' => 'show.svg'),
        )
    ),
    'palettes' => array(
        'default' => '{title_legend},title,alias;{media_legend},singleSRC;{details_legend},employment_type,description,requirements,benefits;{form_legend},form_id'
    ),
    'fields' => array(
        'id'     => array('sql' => "int(10) unsigned NOT NULL auto_increment"),
        'tstamp' => array('sql' => "int(10) unsigned NOT NULL default '0'"),
        'title'  => array(
            'inputType' => 'text',
            'exclude'   => true,
            'search'    => true,
            'eval'      => array('mandatory' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'alias' => array(
            'inputType' => 'text',
            'exclude'   => true,
            'search'    => true,
            'eval'      => array('rgxp' => 'alias', 'doNotCopy' => true, 'unique' => true, 'maxlength' => 255, 'tl_class' => 'w50'),
            'save_callback' => array(array('tl_stellenangebote', 'generateAlias')), // Methode muss in der Klasse unten definiert sein
            'sql'       => "varchar(255) BINARY NOT NULL default ''"
        ),
        'singleSRC' => [
            'inputType' => 'fileTree',
            'eval' => ['filesOnly' => true, 'extensions' => '%contao.image.valid_extensions%', 'fieldType' => 'radio', 'tl_class' => 'clr'],
            'sql' => "binary(16) NULL",
        ],
        'employment_type' => array(
            'inputType' => 'select',
            'options'   => array('Vollzeit', 'Teilzeit'),
            'reference' => &$GLOBALS['TL_LANG']['tl_stellenangebote']['employment_options'],
            'eval'      => array('includeBlankOption' => true, 'tl_class' => 'w50'),
            'sql'       => "varchar(32) NOT NULL default ''"
        ),
        'description' => array(
            'inputType' => 'textarea',
            'eval'      => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'sql'       => "text NULL"
        ),
        'requirements' => array(
            'inputType' => 'textarea',
            'eval'      => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'sql'       => "text NULL"
        ),
        'benefits' => array(
            'inputType' => 'textarea',
            'eval'      => array('rte' => 'tinyMCE', 'tl_class' => 'clr'),
            'sql'       => "text NULL"
        ),
        'form_id' => array(
            'inputType' => 'select',
            'options_callback' => array('tl_stellenangebote', 'getForms'),
            'eval'      => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'w50'),
            'sql'       => "int(10) unsigned NOT NULL default '0'"
        )
    )
);

// Callback-Klasse für Alias-Generierung und Formular-Liste
class tl_stellenangebote extends \Contao\Backend {
    public function generateAlias($varValue, \Contao\DataContainer $dc) {
        if ($varValue == '') {
            $varValue = \Contao\StringUtil::generateAlias($dc->activeRecord->title);
        }
        return $varValue;
    }
    public function getForms() {
        $forms = array();
        $objForms = \Contao\FormModel::findAll();
        if ($objForms !== null) {
            while ($objForms->next()) {
                $forms[$objForms->id] = $objForms->title;
            }
        }
        return $forms;
    }
}