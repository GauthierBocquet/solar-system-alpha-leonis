<?php

$container->loadFromExtension('framework', array(
    'workflows' => array(
        'my_workflow' => array(
            'marking_store' => array(
                'type' => 'multiple_state',
            ),
            'places' => array(
                'first',
                'last',
            ),
            'transitions' => array(
                'go' => array(
                    'from' => array(
                        'first',
                    ),
                    'to' => array(
                        'last',
                    ),
                ),
            ),
        ),
    ),
));
