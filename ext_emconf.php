<?php

$EM_CONF['static_info_tables_de'] = array(
    'title' => 'Static Info Tables (de)',
    'description' => 'German (de) language pack for the Static Info Tables providing localized names for countries, currencies and so on.',
    'category' => 'misc',
    'version' => '6.7.8',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => array (
        'depends' => array(
            'typo3' => '8.7.0-10.4.99',
            'static_info_tables' => '6.7.3-6.99.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
