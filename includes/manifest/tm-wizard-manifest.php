<?php
/**
 * Plugins configuration example.
 *
 * @var array
 */
$plugins = array(
	'cherry-services-list' => array(
		'name'   => esc_html__( 'Cherry Services List', 'tm-wizard' ),
		'sourse' => 'wordpress', // 'git', 'local', 'remote', 'wordpress' (default).
		'path'   => false, // git repository, remote URL or local path.
		'access' => 'skins',
	),
	'cherry-data-importer' => array(
		'name'   => esc_html__( 'Cherry Data Importer', 'tm-wizard' ),
		'sourse' => 'git', // 'git', 'local', 'remote', 'wordpress' (default).
		'path'   => false, // git repository, remote URL or local path.
		'access' => 'base',
	),
);

/**
 * Skins configuration example
 *
 * @var array
 */
$skins = array(
	'base' => array(
		'cherry-data-importer',
	),
	'skins' => array(
		'default' => array(
			'full'  => array(
				'cherry-services-list',
			),
			'lite'  => false,
			'demo'  => false,
			'thumb' => false,
			'name'  => esc_html__( 'Default', 'tm-wizard' ),
		),
	),
);

/**
 * Default plugin texts
 *
 * @var array
 */
$texts = array(
	'theme-name' => 'Monstroid&sup2;'
);
