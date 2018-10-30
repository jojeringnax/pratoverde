<?php
$json = file_get_contents('data.json');
$regions = file_get_contents('regions.json');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://api-maps.yandex.ru/2.1/?apikey=27544797-3131-4759-9f4b-54f17c827eb2&lang=ru_RU" type="text/javascript"></script>

    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="yan/css/style.css">
    <!-- <link rel="stylesheet" href="css/master.css"> -->


</head>
<body>
    <div class="result" style="position:fixed;width: 20%; height: 100%;left:0;">
      <section id="info-company" class="hide section-info">
        <div class="main-item-result">
          <div class="logo">
            <div class="burger-logo">
              <img src="yan/img/burger-menu.svg" alt="">
            </div>
            <div class="img-logo">
              <img src="yan/img/logo.svg" alt="">
            </div>
          </div>
          <div id="company-info">
            <span id="title-company">Компания</span>
            <div class="ts-title">
              <span class="ts-yan/img"><img src="yan/img/delivery-truck.svg" alt="#" class="span-yan/img-h3"></span>
              <span id="tranport-means" class="ts-text h3-main">Транспортные средства</span>
            </div>
            <div id="total" class="item-info">
              <span id="" class="trans-auto">Всего, шт.</span>
              <span id="figure1" class="figures">311</span>
            </div>
            <div class="item-info">
              <p id="on-line" class="trans-auto">На линии, шт.</p>
              <p id="figure2" class="figures">124</p>
            </div>
            <div class="item-info">
              <p id="on-repair" class="trans-auto">На ремонте, шт.</p>
              <p id="figure3" class="figures">3</p>
            </div>
            <div class="item-info">
              <p id="on-to" class="trans-auto">На ТО, шт.</p>
              <p id="figure4" class="figures">4</p>
            </div>
          </div>

            <div id="request" class="">
              <div class="request-title">
                <span class="yan/img"><img src="yan/img/copy.svg" alt="#" class="span-yan/img-h3-2nd"></span>
                <span id="title-request" class="text">Заявки</span>
              </div>
              <div class="item-info">
                <p id="done" class="trans-auto">Выполнено, шт.</p>
                <p id="figure5" class="figures">311</p>
              </div>
              <div class="item-info">
                <p id="canseled" class="trans-auto">Отменено, шт.</p>
                <p id="figure6" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="transfered" class="trans-auto">Переданы на СП, шт.</p>
                <p id="figure7" class="figures">3</p>
              </div>
            </div>

          <div id="indicators" class="indicators-class">
            <div class="indicators-title">
              <span class="yan/img"><img src="yan/img/pie.svg" alt="#" class="span-yan/img-h3-3nd"></span>
              <span id="h3-indicator" class="text">Показатели компании</span>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">60%</p>
                <div id="circle1" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="filed" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">30%</p>
                <div id="circle2" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="processed" class="p-bar-text-str">Обработано ПЛ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">90%</p>
                <div id="circle3" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="dtp" class="p-bar-text">ДТП по вине<br/>компании, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">100%</p>
                <div id="circle4" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="mileage" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="department-info" class="section-info hide ">
        <div class="sidebar">
          <div id="head-filial">
            <div class="logo">
              <div class="burger-logo">
                <img src="yan/img/burger-menu.svg" alt="">
              </div>
              <div class="img-logo">
                <img src="yan/img/logo.svg" alt="">
              </div>
            </div>
            <div class="level-menu">
              <span id="level-menu-company" class="text-level-menu">Компания</span>
              <img src="yan/img/arrow.svg" alt="">
            </div>
            <div class="title-department">
              <!-- <a id="a-back" href="#"><img class="a-back" src="yan/img/back.svg" alt="#"></a> -->
              <span class="title-department-text">Московский филиал</span>
            </div>
            <!-- <h2 id="h2-city" class="h2-city">г. Москва</h2> -->
              <div class="">
                <!-- <span id="title-company">Компания</span> -->
                <div class="ts-title">
                  <span class="ts-yan/img"><img src="yan/img/delivery-truck.svg" alt="#" class="span-yan/img-h3"></span>
                  <span id="tranport-means" class="ts-text h3-main">Транспортные средства</span>
                </div>
                <div id="total-department" class="item-info">
                  <span id="" class="trans-auto">Всего, шт.</span>
                  <span id="figure-department" class="figures">311</span>
                </div>
                <div class="item-info">
                  <p id="on-line-department" class="trans-auto">На линии, шт.</p>
                  <p id="figure-department" class="figures">124</p>
                </div>
                <div class="item-info">
                  <p id="on-repair" class="trans-auto">На ремонте, шт.</p>
                  <p id="figure-department" class="figures">3</p>
                </div>
                <div class="item-info">
                  <p id="on-to" class="trans-auto">На ТО, шт.</p>
                  <p id="figure-department" class="figures">4</p>
                </div>
              </div>

              <div class="div-transport">
                <hr/ class="hr-trans">
                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="yan/img/car-1.svg" alt="#" class="span-yan/img-h3-filial"></span>
                    <p id="passenger-car" class="p-type-transport">Легковые</p>
                  </div>

                  <p id="quantity-passenger" class="p-quantity">40</p>
                </div>
                <hr/ class="hr-trans">

                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="yan/img/car-2.svg" alt="#" class="span-yan/img-h3-filial"></span>
                    <p id="freight" class="p-type-transport">Грузовые</p>
                  </div>
                  <p id="quantity-freight" class="p-quantity">221</p>
                </div>
                <hr/ class="hr-trans">

                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="yan/img/car-3.svg" alt="#" class="span-yan/img-h3-filial"></span>
                    <p id="bus" class="p-type-transport">Автобусы</p>
                  </div>
                  <p id="quantity-bus" class="p-quantity">20</p>
                </div>
                <hr/ class="hr-trans">

                <div class="item-info transort-department">
                  <div class="transport-title">
                    <span class="span-h3-filial"><img src="yan/img/car-4.svg" alt="#" class="span-yan/img-h3-filial"></span>
                    <p id="spec" class="p-type-transport">Спецтехника</p>
                  </div>
                  <p id="quantity-spec" class="p-quantity">12</p>

                </div>
                <hr/ class="hr-trans">
              </div>

          </div>

          <div class="">
            <div id="request-department" class="">
              <div class="request-title">
                <span class="img"><img src="yan/img/copy.svg" alt="#" class="span-yan/img-h3-2nd"></span>
                <span id="title-request" class="text">Заявки</span>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Выполнено, шт.</p>
                <p id="done-request-department" class="figures">311</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Отменено, шт.</p>
                <p id="canseled-request-department" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Переданы на СП, шт.</p>
                <p id="transfered-request-department" class="figures">3</p>
              </div>
            </div>
          </div>
          <div id="indicators-department" class="indicators-class">
            <div class="indicators-title">
              <span class="img"><img src="yan/img/pie.svg" alt="#" class="span-yan/img-h3-3nd"></span>
              <span id="h3-indicator" class="text">Показатели компании</span>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">60%</p>
                <div id="circle1" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="filed" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">30%</p>
                <div id="circle2" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="processed" class="p-bar-text-str">Обработано ПЛ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">90%</p>
                <div id="circle3" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="dtp" class="p-bar-text">ДТП по вине<br/>компании, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p class="p-bar">100%</p>
                <div id="circle4" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="mileage" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
              </div>
            </div>
          </div>
          <div class="indic-bot">
            <div class="div-meanings div-pr25">
              <p id="lmch-2" class="p-meanings-2nd"><span class="span-figures-2nd">5,1</span> л\мч<br/>ТМЧ</p>
            </div>
            <div class="div-meanings">
              <p id="terminals-2" class="p-meanings-2nd"><span class="span-figures-2nd">110</span><br/>Терминалов</p>
            </div>
          </div>
              <!-- <div id="indicators-2" class="indicators-class">
                <div class="d-flex mb15 mt20 align-items-center">
                <span class="span-h3-2nd"><img src="yan/img/pie.svg" alt="#" class="span-yan/img-h3-3nd"></span>
                <h3 id="h3-indicator-2" class="h3-main-2nd">Показатели компании</h3>
                  </div>
              <div class="">
                <div id="circle1-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="filed-2" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
                </div>
                <br/><br/>
              </div>
                <div class="">
                <div id="circle2-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="processed-2" class="p-bar-text-str">Обработано ПЛ, %</p>
                </div>
                <br/><br/>
              </div>
                <div class="">
                <div id="circle3-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="dtp-2" class="p-bar-text">ДТП по вине<br/>компании, %</p>
                </div>
                <br/><br/>
              </div>
                <div class="">
                <div id="circle4-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="mileage-2" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
                </div>
                <br/><br/>
                  </div>
              <div class="">
                <div id="circle5-2" class="circle">
                  <p class="p-bar">bar</p>
                </div>
                <div class="div-bar-text">
                  <p id="sla-2" class="p-bar-text-str">SLA филиала, %</p>
                </div>
              </div>

              <div class="div-meanings div-pr25">
                <p id="lmch-2" class="p-meanings-2nd"><span class="span-figures-2nd">5,1</span> л\мч<br/>ТМЧ</p>
              </div>
              <div class="div-meanings">
                <p id="terminals-2" class="p-meanings-2nd"><span class="span-figures-2nd">110</span><br/>Терминалов</p>
              </div>
            </div> -->
          </div>


      </section>

      <section id="ts-info" class="section-info">
        <div id="head-filial">
          <div class="logo">
            <div class="burger-logo">
              <img src="yan/img/burger-menu.svg" alt="">
            </div>
            <div class="img-logo">
              <img src="yan/img/logo.svg" alt="">
            </div>
          </div>
          <div class="level-menu">
            <span id="level-menu-company" class="text-level-menu">Компания</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Филиал</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Автоколонна</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Участок</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-company" class="text-level-menu">Транспортное средство</span>
          </div>
          <div class="title-ts">
            <span class="title-ts-text">ТС №93 BMW</span>
          </div>
          <div class="">
            <div id="route" class="">
              <div class="route-title">
                <span class="yan/img"><img src="yan/img/route.svg" alt="#" class="span-yan/img-h3-2nd"></span>
                <span id="title-route" class="text">Маршрут</span>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Кол-во пройденного пути, км</p>
                <p id="done-route" class="figures">1300</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Кол-во отработанного t, ч.</p>
                <p id="canseled-request-department" class="figures">10</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Объем потреченного топлива, л.</p>
                <p id="transfered-request-department" class="figures">12</p>
              </div>
            </div>
          </div>
          <div id="oil" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/fuel.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">50 000 км</p>
              <p id="total" class="distance-text">До замены масла</p>
            </div>
            <div id="oilLongbar" class="longlar"></div>
          </div>
          <div id="wheel" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/wheel.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">2 000 км</p>
              <p id="total" class="distance-text">До замены шин</p>
            </div>
            <div id="wheelLongbar" class="longlar"></div>
          </div>
          <div id="wheel" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/battery.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">23 000 часа</p>
              <p id="total" class="distance-text">До замены АКБ</p>
            </div>
            <div id="totalLongbar" class="longlar"></div>
          </div>

          <div id="wheel" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/key.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="total" class="distance-figure">70 000 км</p>
              <p id="total" class="distance-text">До ТО</p>
            </div>
            <div id="repairLongbar" class="longlar"></div>
          </div>
        </div>
      </section>
    </div>
    <div id="map" style="position:fixed;width: 80%; height: 100%;right:0;"></div>

</body>
<script type="text/javascript">
    var pWrap = function(e) {
        return '<p>' + e + '</p>';
    };

    ymaps.ready( function() {
        var regions = JSON.parse('<?= $regions ?>').features;
        var myMap = new ymaps.Map('map', {
            center: [55.751574, 37.573856],
            zoom: 11,
            behaviors: ['default', 'scrollZoom']
        }, {
            searchControlProvider: 'yandex#search'
        });


        /**
         * Variable for determinate current depth-view level
         * @type {number}
         */
        window.currentLevel = 0;

        /**
         * Variable for the choosen element
         * @type {ymaps.Placemark}
         */
        window.currentElement = null;

        var setBoundsForPoints = function(map, array) {
            if(array.length === 1) {
                return map.setCenter(array[0].geometry._coordinates, 11);
            }
            var
                minX = array[0].geometry._coordinates[0],
                minY = array[0].geometry._coordinates[1],
                maxX = array[0].geometry._coordinates[0],
                maxY = array[0].geometry._coordinates[1];
            for(var i=0;i<array.length;i++) {
                minX = array[i].geometry._coordinates[0] < minX ? array[i].geometry._coordinates[0] : minX;
                minY = array[i].geometry._coordinates[1] < minY ? array[i].geometry._coordinates[1] : minY;
                maxX = array[i].geometry._coordinates[0] > maxX ? array[i].geometry._coordinates[0] : maxX;
                maxY = array[i].geometry._coordinates[1] > maxY ? array[i].geometry._coordinates[1] : maxY;
            }
            return map.setBounds([[minX,minY],[maxX,maxY]]);
        },
            actionClickPoint = function(map, target) {
                target.RTOptions.children.forEach(function(el) {
                    map.geoObjects.add(el);
                });
                setBoundsForPoints(map, target.RTOptions.children);
                if(target.RTOptions.master) {
                    target.RTOptions.master.RTOptions.children.forEach(function(el) {
                        map.geoObjects.remove(el);
                    });
                } else {
                    map.geoObjects.remove(target);
                }
                window.currentElement = target;
                if(window.currentLevel !== 0) {
                    map.controls.add(oneLevelLess);
                }
            };
        var d_point, s_point, a_point, c_point, spots, autocolumns, cars;
        for(var i = 0, d_len = regions.length, d_array = [];i < d_len;i++) {
            autocolumns = regions[i].autocolumns;
            d_point = new ymaps.Placemark(regions[i].geometry.coordinates);
            for(var j = 0, a_len = autocolumns.length, a_array = [];j < a_len;j++) {
                spots = autocolumns[j].spots;
                a_point = new ymaps.Placemark(autocolumns[j].geometry.coordinates);
                for (var k = 0, s_len = spots.length, s_array = [];k < s_len;k++) {
                    cars = spots[k].cars;
                    s_point = new ymaps.Placemark(spots[k].geometry.coordinates);
                    for (var l=0, c_len = cars.length, c_array = [];l < c_len;l++) {
                        c_point = new ymaps.Placemark(cars[l].geometry.coordinates);
                        c_point.RTOptions = {
                            id: cars[l].id,
                            master: s_point,
                            status: cars[l].status,
                            brand: cars[l].brand,
                            type: cars[l].type,
                            applications: {done: cars[l].applications.done, canceled: cars[l].applications.canceled, st: cars[l].applications.st},
                            children: false,
                            regionType: 'c'
                        };
                        c_array.push(c_point);
                    }
                    s_point.RTOptions = {
                        id: spots[k].id,
                        master: a_point,
                        children: c_array,
                        regionType: 's'
                    };
                    s_point.events.add('click', function(e) {
                        var target = e.originalEvent.target;
                        window.currentLevel = 3;
                        actionClickPoint(myMap, target);
                    });
                    s_array.push(s_point);
                } // Iteration through the spots  for (var k = 0, s_len = spots.length, s_array = [];k < s_len;k++) {
                a_point.RTOptions = {
                    id: autocolumns[j].id,
                    master: d_point,
                    children: s_array,
                    regionType: 'a'
                };
                a_point.events.add('click', function(e) {
                    var target = e.originalEvent.target;
                    window.currentLevel = 2;
                    actionClickPoint(myMap, target);
                });
                a_array.push(a_point);
            } // Iteration through the autocolumns  for(var j = 0, a_len = autocolumns.length, a_array = [];j < a_len;j++) {
            d_point.RTOptions = {
                id: regions[i].id,
                master: false,
                children: a_array,
                regionType: 'd'
            };
            d_point.events.add('click', function(e) {
                var target = e.originalEvent.target;
                window.currentLevel = 1;
                actionClickPoint(myMap, target);
            });
            d_array.push(d_point);
            myMap.geoObjects.add(d_point);
        } //Iteration through the departments for(var i = 0, d_len = regions.length, d_array = [];i < d_len;i++) {

        var oneLevelLess = new ymaps.control.Button('Вернуться на один уровень назад', {float: 'right'});
        oneLevelLess.events.add('click', function(e) {
            window.currentLevel--;
            if (window.currentLevel === 0) {
                window.currentElement.RTOptions.children.forEach(function(el) {
                    myMap.geoObjects.remove(el);
                });
                d_array.forEach(function(el) {
                   myMap.geoObjects.add(el);
                });
                setBoundsForPoints(myMap, d_array);
                myMap.controls.remove(oneLevelLess);
                return true;
            }
            var
                currentLevelElements = window.currentElement.RTOptions.master.RTOptions.children,
                currentChildren = window.currentElement.RTOptions.children,
                currentElementAfterClick = window.currentElement.RTOptions.master;
            for(i=0;i<currentChildren.length;i++) {
                myMap.geoObjects.remove(currentChildren[i]);
            }
            for(i=0;i<currentLevelElements.length;i++) {
                myMap.geoObjects.add(currentLevelElements[i]);
            }
            setBoundsForPoints(myMap, currentLevelElements);
            window.currentElement = currentElementAfterClick;
        });

    }); // ymaps.ready(function() {
</script>
<script src="js_new/progressbar.min.js"></script>
<script src="js_new/main.js"></script>
</html>
