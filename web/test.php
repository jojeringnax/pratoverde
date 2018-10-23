<?php
$mysqli = new Mysqli('localhost','jojer','U7YcV9Hd','pratoverde','3306');
$result = $mysqli->query('select * from cars');

$cities = array(
    'moscow' => '55.753215, 37.622504',
    'krasnoyarsk' => '56.010563, 92.852572'
);


$lol = file_get_contents('data.json');
$json = $lol;
$lol = json_decode($lol);
foreach($lol->features as $item) {
    $arrayText[] = '['.$item->geometry->coordinates[0].','.$item->geometry->coordinates[1].']';
}
if (isset($arrayText))
    $text = implode(',',$arrayText);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=27544797-3131-4759-9f4b-54f17c827eb2&lang=ru_RU" type="text/javascript"></script>
    <script>
        function $(e) {return document.querySelector(e);}
    </script>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div style="display: flex;">
    <div class="result" style="width: 20%; height: 800px;"></div>
    <div id="map" style="width: 80%; height: 800px"></div>
</div>
</body>
<script type="text/javascript">
    var pWrap = function(e) {
        return '<p>' + e + '</p>';
    };

    ymaps.ready(function () {
        var
            cars = JSON.parse('<?= $json ?>').features,
            geoObjects = [],
            coordinates,
            properties,
            balloonContent,
            pointData,
            pointOption,
            point
        ;
        for(var i = 0, len = cars.length, points = [];i < len;i++) {
            points.push(cars[i].geometry.coordinates);
            coordinates = cars[i].geometry.coordinates;
            properties = cars[i].properties;
            balloonContent = properties.balloonContent;
            pointData = {
                balloonContentHeader: pWrap('Car with ID:' + cars[i].id + ' ' + balloonContent.brand) + pWrap('Litres = ' + balloonContent.litr),
                balloonContentBody: '<p></p>',
                balloonContentFooter: '<font size=1>Information provided by: placemark </font> balloon <strong>',
                clusterCaption: 'placemark <strong>',
                brand: balloonContent.brand
            };
            pointOption = {
                preset: 'islands#violetIcon'
            };
            point = new ymaps.Placemark(coordinates, pointData, pointOption);
            point.events.add('click', function(){
                console.log(point.geometry.getCoordinates());
                $('div.result').innerHTML = point.geometry.getCoordinates();
            });
            geoObjects[i] = point;
        }
        var myMap = new ymaps.Map('map', {
                center: [55.751574, 37.573856],
                zoom: 20,
                behaviors: ['default', 'scrollZoom']
            }, {
                searchControlProvider: 'yandex#search'
            }),
            /**
             * Creating a clusterer by calling a constructor function.
             * A list of all options is available in the documentation.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Clusterer.xml#constructor-summary
             */
            clusterer = new ymaps.Clusterer({
                /**
                 * The size of cluster cells, in pixels.
                 * The value must be equal 2^n (an area of 256 by 256 pixels should fit an even number of cells).
                 */
                gridSize: 64,
                /**
                 * Key for the clusterer's preset options.
                 * A list of keys available in the package.clusters package can be found in the description of option.presetStorage.
                 * @see https://tech.yandex.com/maps/doc/jsapi/2.1/ref/reference/option.presetStorage-docpage/
                 */
                preset: 'islands#invertedVioletClusterIcons',
                /**
                 * Setting to "true" if we want to cluster only points with the same coordinates.
                 */
                groupByCoordinates: false,
                /**
                 * Flag whether the clusterer has the .balloon field.
                 * If a balloon doesn't need to be opened when clicking the cluster,
                 * we recommend setting this option to the "false" value to avoid unnecessary initializations.
                 */
                hasBalloon: true,
                /**
                 * Flag whether the clusterer has the .hint field.
                 * If a popup hint doesn't need to be displayed when the cluster is pointed at,
                 * we recommend setting this option to the "false" value to avoid unnecessary initializations.
                 */
                hasHint: true,
                /**
                 * Number or array of numbers that set the offset for the cluster center relative to the
                 * clusterization cells.
                 * If a single number is set, it is applied to each side.
                 * If two numbers are set, they are the vertical and horizontal offsets, respectively.
                 * If an array of four numbers is set, they are the top, right, bottom, and left margins.
                 */
                margin: 30,
                /**
                 * The maximum map zoom that object clusterization occurs at.
                 * Even if clusterization is disabled, only objects in the visible map area will be shown.
                 */
                maxZoom: Infinity,
                /**
                 * Minimum number of objects to make up a cluster.
                 */
                minClusterSize: 2,
                /**
                 * Show placemarks in the balloon in alphabetical order when the cluster is clicked on.
                 * The cluster's geo objects are sorted by special fields in the data of these geo objects -
                 * clusterCaption (or balloonContentHeader, if the previous field is not defined).
                 * By default, geo objects are shown in the order in which they were added to the clusterer.
                 */
                showInAlphabeticalOrder: false,
                /**
                 * Whether to account for map margins map.margin.Manager when zooming the map in after a click on a
                 * cluster.
                 * @see https://tech.yandex.com/maps/doc/jsapi/2.1/ref/reference/map.margin.Manager-docpage/
                 */
                useMapMargin: true,
                /**
                 * The offset of the area in which you are clustering.
                 * Clustering is performed for the visible area of the map.
                 * Use this option to expand the area of clustering relative to the visible area of the map.
                 */
                viewportMargin: 128,
                /**
                 * Offset from the map viewport borders to observe when zooming in the map after a cluster is clicked.
                 * Recommended to set this option's value to match the size of the cluster icons and placemarks.
                 * For example, if only the bottom half of a placemark falls on the visible area of the map,
                 * a nonzero "top" offset should be set, so the placemark remains completely visible after the cluster
                 * is broken up. If a single number is set, it is applied to each side. If two numbers are set,
                 * they are the horizontal and vertical margins, respectively. If an array of four numbers is set,
                 * they are the top, right, bottom, and left margins.
                 */
                zoomMargin: 0,
                /**
                 * Setting cluster options in the clusterer with the "cluster" prefix.
                 * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/ClusterPlacemark.xml
                 */
                clusterDisableClickZoom: false,
                clusterHideIconOnBalloonOpen: false,
                geoObjectHideIconOnBalloonOpen: false
            }),
            /**
             * The function returns an object containing the placemark data.
             * The clusterCaption data field will appear in the list of geo objects in the cluster balloon.
             * The balloonContentBody field is the data source for the balloon content.
             * Both fields support HTML markup.
             * For a list of data fields that are used by the standard content layouts for
             * geo objects' placemark icons and balloons, see the documentation.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/GeoObject.xml
             */
            getPointData = function (index) {
                return {
                    balloonContentHeader: '<font size=3><b><a target="_blank" href="https://yandex.ru">Your link can be here</a></b></font>',
                    balloonContentBody: '<p>Your name: <input name="login"></p><p>The phone in the format 2xxx-xxx:  <input></p><p><input type="submit" value="Send"></p>',
                    balloonContentFooter: '<font size=1>Information provided by: placemark </font> balloon <strong> ' + index + '</strong>',
                    clusterCaption: 'placemark <strong>' + index + '</strong>'
                };
            },
            /**
             * The function returns an object containing the placemark options.
             * All options that are supported by the geo objects can be found in the documentation.
             * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/GeoObject.xml
             */
            getPointOptions = function () {
                return {
                    preset: 'islands#violetIcon'
                };
            }

        /**
         * Data is passed to the placemark constructor as the second parameter, and options are third.
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Placemark.xml#constructor-summary
         */
        /*for(i = 0, len = points.length; i < len; i++) {
            geoObjects[i] = new ymaps.Placemark(points[i], getPointData(i), getPointOptions());
        }*/

        /**
         * You can add a JavaScript array of placemarks (not a geo collection) or a single placemark to the clusterer.
         * @see https://api.yandex.ru/maps/doc/jsapi/2.1/ref/reference/Clusterer.xml#add
         */
        clusterer.add(geoObjects);
        myMap.geoObjects.add(clusterer);

        /**
         * Positioning the map so that all objects become visible.
         */

        myMap.setBounds(clusterer.getBounds(), {
            checkZoomRange: true
        });

        console.log(clusterer.getClusters());
    });
</script>
</html>