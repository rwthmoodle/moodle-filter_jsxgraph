<?php
    // This file is part of JSXGraph Moodle Filter.
    //
    // Moodle is free software: you can redistribute it and/or modify
    // it under the terms of the GNU General Public License as published by
    // the Free Software Foundation, either version 3 of the License, or
    // (at your option) any later version.
    //
    // Moodle is distributed in the hope that it will be useful,
    // but WITHOUT ANY WARRANTY; without even the implied warranty of
    // MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    // GNU General Public License for more details.
    //
    // You should have received a copy of the GNU General Public License
    // along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

    /**
     * JSXGraph is a cross-browser JavaScript library for interactive geometry,
     * function plotting, charting, and data visualization in the web browser.
     * JSXGraph is implemented in pure JavaScript and does not rely on any other
     * library. Special care has been taken to optimize the performance.
     *
     * This is a plugin for Moodle to enable function plotting and dynamic
     * geometry constructions with JSXGraph within a Moodle platform.
     *
     * @package    jsxgraph filter
     * @copyright  2020 JSXGraph team - Center for Mobile Learning with Digital Technology – Universität Bayreuth
     *             Matthias Ehmann,
     *             Michael Gerhaeuser,
     *             Carsten Miller,
     *             Andreas Walter <andreas.walter@uni-bayreuth.de>,
     *             Alfred Wassermann <alfred.wassermann@uni-bayreuth.de>
     * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
     */

    $string['filtername'] = 'JSXGraph';

    $string['yes'] = 'ja';
    $string['no'] = 'nein';

    $string['error'] = 'FEHLER:';
    $string['error0.99.5'] = 'Leider wird die Core-Version 0.99.5 aufgrund eines CDN-Fehlers vom JSXGraph-Filter nicht unterstützt. Bitte kontaktieren Sie Ihren Administrator.';
    $string['error0.99.6'] = 'Leider wird die Core-Version 0.99.6 vom JSXGraph-Filter nicht unterstützt. Bitte kontaktieren Sie Ihren Administrator.';
    $string['errorNotFound_pre'] = 'Es existiert keine JSXGraph-Version ';
    $string['errorNotFound_post'] = ' auf CDN. Der JSXGraph-Core konnte nicht geladen werden. Bitte kontaktieren Sie Ihren Administrator.';

    $string['settings_header'] = 'Globale Einstellungen';
    $string['docs_header'] = 'Allgemeine Informationen';
    $string['docs'] = 'Vielen Dank, dass sie den JSXGraph-Filter benutzen. Für aktuelle Informationen über JSXGraph besuchen Sie einfach unsere <a href="http://jsxgraph.uni-bayreuth.de/" target="_blank">Homepage</a>.<br>Beachten Sie unsere <a href="https://github.com/jsxgraph/moodle-filter_jsxgraph/blob/master/README.md" target="_blank">detaillierte Filter-Dokumentation auf GitHub</a>.<br>Informationen über die Verwendung von JSXGraph finden sie <a href="http://jsxgraph.uni-bayreuth.de/wp/docs/index.html" target="_blank">in den docs</a>.';

    $string['jsxfromserver'] = 'JSXGraph vom Server';
    $string['jsxfromserver_desc'] = 'Wählen Sie aus, ob für das Plugin die Server-Version des JSXGraph-Cores genutzt wird, oder die lokal vorliegende, die mit dem Plugin installiert wurde. <b>Achtung:</b> Es muss eine gültige Versionsnummer unter "<a href="#admin-serverversion">Serverversion</a>" eingetragen sein!';

    $string['serverversion'] = 'Serverversion';
    $string['serverversion_desc'] = 'Ist "<a href="#admin-jsxfromserver">JSXGraph vom Server</a>" gewählt, wird die hier eingetragene Version vom Server geladen. Unter <a href="http://jsxgraph.uni-bayreuth.de/wp/previousreleases/" target="_blank">http://jsxgraph.uni-bayreuth.de/wp/previousreleases/</a> finden Sie die Versionen, die von CDN geladen werden können. Geben Sie nur die Versionsnummer ein (0.99.5 und 0.99.6 werden leider nicht unterstützt).';

    $string['HTMLentities'] = 'HTMLentities';
    $string['HTMLentities_desc'] = 'Einstellung, ob HTMLentities wie z.B. "&", "<",... innerhalb des JavaScript-Codes für JSXGraph unterstützt werden.';

    $string['convertencoding'] = 'Konvertiere Text-Codierung';
    $string['convertencoding_desc'] = 'Einstellung, ob die Codierung des Texts zwischen den JSXGraph-Tags in UTF-8 konvertiert werden soll oder nicht.';

    $string['globalJS'] = 'Globales JavaScript';
    $string['globalJS_desc'] = 'Definieren Sie hier einen allgemein gültigen JavaScript-Code, der in jedem JSXGraph-Tag vor dem darin enthalteten Code geladen wird. Um Sonderzeichen wie beispielsweise "<" zu nutzen, verwenden Sie die entsprechende HTMLentity.';

    $string['width'] = 'Breite';
    $string['width_desc'] = 'Standardbreite des JSXGraph-Containers.';

    $string['height'] = 'Höhe';
    $string['height_desc'] = 'Standardhöhe des JSXGraph-Containers.';

    $string['divid'] = 'Dynamische Board-ID';
    $string['divid_desc'] =
        '<b>Veraltet! Sie sollten von nun an die Konstante "<code>BOARDID</code>" innerhalb des <jsxgraph\>-Tags benutzen.</b><br>'.
        '<small>Jedes <code><div\></code>, das ein JSXGraph-Board enthält, benötigt eine eindeutige ID auf der Seite. Wird diese ID im JSXGraph-Tag angegeben (siehe <a href="https://github.com/jsxgraph/moodle-filter_jsxgraph/blob/master/README.md#jsxgraph-tag-attributes" target="_blank">Dokumentation</a>), so gilt sie für das komplette enthaltene JavaScript.<br>' .
        'Ist im Tag keine Board-ID angegeben, wird diese automatisch erzeugt. Hierzu wird das hier angegebene Präfix verwendet und um eine fortlaufende Nummer pro Seite ergänzt, z.B. box0, box1,...<br>' .
        'Der Benutzer braucht die ID nicht zu kennen. Sie kann in jedem Fall innerhalb des JavaScript über die Konstante "<code>BOARDID</code>" referenziert werden.</small>';

    $string['privacy'] = 'Dieses Plugin dient lediglich dazu, JSXGraph-Konstruktionen, die mithilfe des jsxgraph-Tags im Editor eingegeben werden, anzuzeigen. Es speichert und übermittelt selbst keine personenbezonenen Daten. Die eventuell extern eingebundene Bibliothek jsxgraphcore.js verarbeitet ebenfalls keinerlei personenbezogene Daten.';