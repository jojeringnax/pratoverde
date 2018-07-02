<?php
$params = [
    'adminEmail' => 'admin@example.com',
    'roomTypes' => [
        'Normal',
        'Terrace',
        'Terrace/Buthtub',
        'Buthtub/Two Room'
    ],
    'problemStatuses' => [
        'New Problem',
        'In progress',
        'Solved'
    ],
    'problemPlaces' => [
        'Room',
        'Toilet'
    ],
    'problemCategories' => [
        'Doors/Windows',
        'Floor/Walls/Roof',
        'Furniture',
        'Sanitary'
    ]
];
$array = [];
foreach ($params as $param => $value) {
    $array[] = $param;
    if(is_array($value)) {
        foreach ($value as $message) {
            if(is_string($message))
            $array[$param][] = Yii::t('app', $message);
        }
    }
}
return $params;
