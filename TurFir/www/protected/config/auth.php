<?php
return array(

    '1' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Users',
        'bizRule' => null,
        'data' => null
    ),
    '2' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Administrator',
        'children' => array(
            '1','3','4','5','6',         // позволим админу всё, что позволено модератору
        ),
        'bizRule' => null,
        'data' => null
    ),
    
        '3' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Moderator2',
        'children' => array(
            '0',          // позволим модератору всё, что позволено пользователю
        ),
        'bizRule' => null,
        'data' => null
    ),
    
        '4' => array(
        'type' => CAuthItem::TYPE_ROLE,
        'description' => 'Moderator3',
        'children' => array(
            '0',          // позволим модератору всё, что позволено пользователю
        ),
        'bizRule' => null,
        'data' => null
    ),
        
    
    
);