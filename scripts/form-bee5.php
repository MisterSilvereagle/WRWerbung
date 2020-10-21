<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Neue Kontaktanfrage',
    'email_message' => 'Du hast eine neue Kontaktanfrage über die W+R-Werbungsseite',
    'success_redirect' => '',
    'email' => array(
    'from' => 'test@wrwerbung.de',
    'to' => 'christian.scheuerer@gmx.net'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Name',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Name\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'Email',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email\' is required.'
    )
    ),
    'message' => array(
    'order' => 3,
    'type' => 'string',
    'label' => 'Message',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Message\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>