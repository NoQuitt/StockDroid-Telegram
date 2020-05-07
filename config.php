<?php


$bot->setting([
	'parse_mode' => 'html',
	'disable_web_page_preview' => true,			
	'action' => true,							
	'usa_database' => true,	
	'channel_post' => false,
	'funziona_modificati' => true,	
	'admin' => [
		361065051  //sostituire con il vostro id
	],						
	'develope_mode' => false,
	'nome_tabella' => 'nome',  //sostituire con il nome della tabella


	/* SETTING MYSQL*/
	'host' => 'localhost',
	  "nome_utente" => "", //se non usi altervista inserisci il nome utente del DB
    "password" => "", //se non usi altervista inserisci la password di mysql
    "database" => "",
]); 
