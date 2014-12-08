<?php
    $this->widget('ext.yandexmap.YandexMap',array(
        'id'=>'map',
        'width'=>600,
        'height'=>400,
        'center'=>array(44.5950169, 33.47584337),
        'controls' => array(
            'zoomControl' => true,
            'typeSelector' => true,
            'mapTools' => true,
            //'smallZoomControl' => true,
            //'miniMap' => true,
            //'scaleLine' => true,
            //'searchControl' => true,
            //'trafficControl' => true
        ),
        'placemark' => array(
            array(
                'lat'=>44.5950169,
                'lon'=>33.47584337,
                'properties'=>array(
                    'balloonContentHeader'=>'header',
                    'balloonContent'=>'1',
                    'balloonContentFooter'=>'footer',
                ),
                'options'=>array(
                    'draggable'=>true
                )
            )
        ),

    ));
?>    
