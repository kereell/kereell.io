<?php

namespace User;

use 
	Zend\Router\Http\Literal,
	Zend\Router\Http\Segment;

return [
	"router" => [
		"routes" => [
			"user" => [
				"type" => Segment :: class,
				"options" => [
					"route" => "/user[/:action[/:id]]",
					"constraints" => [
						"action" => "[a-zA-Z][a-z0-9_-]*",
						"id" => "[0-9]+",
					],
					"defaults" => [
						"controller" => "user.controller",
						"action" => "list",
					],
				],
			],
		],
	],
	"view_manager" => [
		"doctype" => "HTML5",
		"display_exceptions" => true,
		"display_not_found_reason" => true,
		"not_found_template" => "error/404",
		"exception_template" => "error/index",
		"template_map" => [
			"user/user/list" => __DIR__ . "/../view/user/user/list.phtml",
			"user/user/add" => __DIR__ . "/../view/user/user/add.phtml",
			"user/user/edit" => __DIR__ . "/../view/user/user/edit.phtml",
			"user/user/delete" => __DIR__ . "/../view/user/user/delete.phtml",
		],
		"template_path_stack" => [
			__DIR__ . "/../view",
		],
	],
];

