.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: /Includes.rst.txt


What does it do?
================

This extension provides German translations for the country, country subdivision, currency, language and territory records of static_info_tables. 
For this purpose, it adds one or two fields to those tables and fills them with German data, if available. 
The data is based on `World countries in JSON, CSV, XML and YAML (mledoze/countries) https://github.com/mledoze/countries#world-countries-in-json-csv-xml-and-yaml`,
`Debian ISO Codes https://salsa.debian.org/iso-codes-team/iso-codes` and the "LÄNDERVERZEICHNIS für den amtlichen Gebrauch in der Bundesrepublik Deutschland" 
available at `Auswärtiges Amt https://www.auswaertiges-amt.de` .

See also: `TYPO3 12: List of countries in the world and their localized names https://docs.typo3.org/c/typo3/cms-core/main/en-us/Changelog/12.2/Feature-99618-ListOfCountriesInTheWorldAndTheirLocalizedNames.html`  

.. figure:: /Images/RecordView.png
	:width: 700px
	:alt: Record view of a language records

	Record view of the "German" language record with new field "Name (DE)" filled with the German translation.
