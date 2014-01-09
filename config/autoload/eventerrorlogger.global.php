<?php

return array(
    'eventerrorlogger' => array(
        'log' => true,
        'loggers' => array('errorlogger')
    ),
    'service_manager' => array(
        'factories' => array(
            'errorlogger' => function ($serviceManager)
                                {
                                    $logger = new Zend\Log\Logger();
                                    $logger->addWriter('stream', null, array('stream' => getcwd().'/data/log/'.date('Y-m-d').'-error.log'));
                                    return $logger;
                                },
        )
    )
    
)
;