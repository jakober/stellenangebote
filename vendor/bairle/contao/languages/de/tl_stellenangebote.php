<?php

declare(strict_types=1);

/*
 * This file is part of Stellenangebote.
 *
 * (c) Mathis Jakober <jakober@bairle.de>
 * @license GPL-3.0-or-later
 */

/**
 * Legends (Legenden für die Eingabemasken-Abschnitte)
 */
$GLOBALS['TL_LANG']['tl_stellenangebote']['title_legend']   = 'Basis-Einstellungen';
$GLOBALS['TL_LANG']['tl_stellenangebote']['media_legend']   = 'Bildeinstellungen';
$GLOBALS['TL_LANG']['tl_stellenangebote']['details_legend'] = 'Stellendetails';
$GLOBALS['TL_LANG']['tl_stellenangebote']['form_legend']    = 'Formular-Verknüpfung';

/**
 * Global operations
 */
$GLOBALS['TL_LANG']['tl_stellenangebote']['new'] = ['Neu', 'Ein neues Stellenangebot anlegen'];

/**
 * Fields (Eingabefelder)
 */
$GLOBALS['TL_LANG']['tl_stellenangebote']['title']           = ['Job-Titel', 'Geben Sie den Namen der Stelle ein (z.B. Landschaftsgärtner).'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['alias']           = ['Alias', 'Der Alias wird für die URL verwendet. Wenn Sie das Feld leer lassen, wird der Alias automatisch aus dem Titel generiert.'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['singleSRC']       = ['Bild', 'Wählen Sie ein passendes Bild für das Stellenangebot aus.'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['employment_type'] = ['Anstellungsart', 'Wählen Sie, ob es sich um eine Vollzeit- oder Teilzeitstelle handelt.'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['description']     = ['Stellenbeschreibung', 'Was ist die Hauptaufgabe? Beschreiben Sie die Stelle.'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['requirements']    = ['Das bringst du mit', 'Welche Qualifikationen und Eigenschaften werden erwartet?'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['benefits']        = ['Das bieten wir dir', 'Welche Vorteile und Mitarbeiter-Benefits bietet Ihr Unternehmen?'];
$GLOBALS['TL_LANG']['tl_stellenangebote']['form_id']         = ['Bewerbungsformular', 'Wählen Sie das Contao-Formular aus, das unter dem Stellenangebot eingebunden werden soll.'];

/**
 * References (Dropdown-Optionen)
 */
$GLOBALS['TL_LANG']['tl_stellenangebote']['employment_label'] = [
    'fulltime' => 'Vollzeit',
    'parttime' => 'Teilzeit',
];