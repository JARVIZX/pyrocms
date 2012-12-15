<?php defined('BASEPATH') OR exit('No direct script access allowed');

// The page type Streams
$config['pages:default_page_stream'] = 
	array(
		array(
			'name' 		=> 'Default', 
			'slug' 		=> 'def_page_fields', 
			'namespace' => 'pages', 
			'prefix' 	=> null, 
			'about' 	=> 'A basic page type to get you started adding content.'
		)
	);

// define all custom fields that a new installation should have
$config['pages:default_fields']	= array(
	array(         
		'name'          => 'lang:pages:body_label',
		'slug'          => 'body',
		'namespace'     => 'pages',
		'type'          => 'wysiwyg',
		'extra'			=> array('editor_type' => 'advanced'),
		'assign'        => 'def_page_fields'
	)
);

// and now the content for the pages
$config['pages:default_page_content'] = array(
		/* The home page data. */
		'home' => array(
			'created' => date('Y-m-d H:i:s'),
			'body' => '<p>Welcome to our homepage. We have not quite finished setting up our website yet, but please add us to your bookmarks and come back soon.</p>',
			'created_by' => 1
		),
		/* The contact page data. */
		'contact' => array(
			'created' => date('Y-m-d H:i:s'),
			'body' => '<p>To contact us please fill out the form below.</p>
				{{ contact:form name="text|required" email="text|required|valid_email" subject="dropdown|Support|Sales|Feedback|Other" message="textarea" attachment="file|zip" }}
					<div><label for="name">Name:</label>{{ name }}</div>
					<div><label for="email">Email:</label>{{ email }}</div>
					<div><label for="subject">Subject:</label>{{ subject }}</div>
					<div><label for="message">Message:</label>{{ message }}</div>
					<div><label for="attachment">Attach  a zip file:</label>{{ attachment }}</div>
				{{ /contact:form }}',
			'created_by' => 1
		),
		'fourohfour' => array(
			'created' => date('Y-m-d H:i:s'),
			'body' => '<p>We cannot find the page you are looking for, please click <a title="Home" href="{{ pages:url id=\'1\' }}">here</a> to go to the homepage.</p>',
			'created_by' => 1
		)
);