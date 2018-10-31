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
      <section id="info-company" class="section-info">
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
            <span id="nameCompany">Компания</span>
            <div class="ts-title">
              <span class="img"><img src="yan/img/delivery-truck.svg" alt="#" class="span-yan/img-h3"></span>
              <span id="tranport-means" class="ts-text h3-main">Транспортные средства</span>
            </div>
            <div id="total" class="item-info">
              <span id="" class="trans-auto">Всего, шт.</span>
              <span id="compAmOfTs" class="figures">311</span>
            </div>
            <div class="item-info">
              <p id="on-line" class="trans-auto">На линии, шт.</p>
              <p id="compOnLine" class="figures">124</p>
            </div>
            <div class="item-info">
              <p id="on-repair" class="trans-auto">На ремонте, шт.</p>
              <p id="compOnRep" class="figures">3</p>
            </div>
            <div class="item-info">
              <p id="on-to" class="trans-auto">На ТО, шт.</p>
              <p id="compOnTo" class="figures">4</p>
            </div>
          </div>

            <div id="request" class="">
              <div class="request-title">
                <span class="img"><img src="yan/img/copy.svg" alt="#" class="span-yan/img-h3-2nd"></span>
                <span id="title-request" class="text">Заявки</span>
              </div>
              <div class="item-info">
                <p id="done" class="trans-auto">Выполнено, шт.</p>
                <p id="compReqDone" class="figures">311</p>
              </div>
              <div class="item-info">
                <p id="canseled" class="trans-auto">Отменено, шт.</p>
                <p id="compReqCans" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="transfered" class="trans-auto">Переданы на СП, шт.</p>
                <p id="compReqTransf" class="figures">3</p>
              </div>
            </div>

          <div id="indicators" class="indicators-class">
            <div class="indicators-title">
              <span class="img"><img src="yan/img/pie.svg" alt="#" class="span-yan/img-h3-3nd"></span>
              <span id="h3-indicator" class="text">Показатели компании</span>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p id="cpb_per1" class="p-bar">60%</p>
                <div id="circle1" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="filed" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p id="cpb_per2" class="p-bar">30%</p>
                <div id="circle2" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="processed" class="p-bar-text-str">Обработано ПЛ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p id="cpb_per3" class="p-bar">90%</p>
                <div id="circle3" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="dtp" class="p-bar-text">ДТП по вине<br/>компании, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p id="cpb_per4" class="p-bar">100%</p>
                <div id="circle4" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="mileage" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="" style="display:flex; justify-content:center; align-items:center; position:relative; margin-left: 15px;">
                <p id="cpb_per5" class="p-bar">100%</p>
                <div id="circle5" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="sla" class="p-bar-text">Принятый пробег<br/>SLA Филиала, %</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="info-department" class="hide section-info">
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
            <div id="department" class="level-menu">
              <span id="level-menu-company" class="text-level-menu">Компания</span>
              <img src="yan/img/arrow.svg" alt="">
              <span id="level-menu-department" class="text-level-menu">Филиал</span>
            </div>
            <div class="title-department">
              <span id="nameofDST" class="title-department-text">Московский филиал</span>
            </div>
            <div class="">
              <div class="ts-title">
                <span class="img"><img src="yan/img/delivery-truck.svg" alt="#" class="span-yan/img-h3"></span>
                <span id="tranport-means" class="ts-text h3-main">Транспортные средства</span>
              </div>
              <div id="" class="item-info">
                <span id="" class="trans-auto">Всего, шт.</span>
                <span id="totTs" class="figures">311</span>
              </div>
              <div class="item-info">
                <p id="on-line-department" class="trans-auto">На линии, шт.</p>
                <p id="OnLine" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="on-repair" class="trans-auto">На ремонте, шт.</p>
                <p id="OnRep" class="figures">3</p>
              </div>
              <div class="item-info">
                <p id="on-to" class="trans-auto">На ТО, шт.</p>
                <p id="onTo" class="figures">4</p>
              </div>
            </div>

            <div class="div-transport">
              <hr/ class="hr-trans">
              <div class="item-info transort-department">
                <div class="transport-title">
                  <span class="span-h3-filial"><img src="yan/img/car-1.svg" alt="#" class="span-yan/img-h3-filial"></span>
                  <p id="passenger-car" class="p-type-transport">Легковые</p>
                </div>
                 <p id="passCar" class="p-quantity">40</p>
              </div>
              <hr/ class="hr-trans">
              <div class="item-info transort-department">
                <div class="transport-title">
                  <span class="span-h3-filial"><img src="yan/img/car-2.svg" alt="#" class="span-yan/img-h3-filial"></span>
                  <p id="freight" class="p-type-transport">Грузовые</p>
                </div>
                <p id="freightCar" class="p-quantity">221</p>
              </div>
              <hr/ class="hr-trans">
              <div class="item-info transort-department">
                <div class="transport-title">
                  <span class="span-h3-filial"><img src="yan/img/car-3.svg" alt="#" class="span-yan/img-h3-filial"></span>
                  <p id="bus" class="p-type-transport">Автобусы</p>
                </div>
                <p id="busCar" class="p-quantity">20</p>
              </div>
              <hr/ class="hr-trans">
              <div class="item-info transort-department">
                <div class="transport-title">
                  <span class="span-h3-filial"><img src="yan/img/car-4.svg" alt="#" class="span-yan/img-h3-filial"></span>
                  <p id="spec" class="p-type-transport">Спецтехника</p>
                </div>
                <p id="specCar" class="p-quantity">12</p>
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
                <p id="ReqDone" class="figures">311</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Отменено, шт.</p>
                <p id="ReqCans" class="figures">124</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Переданы на СП, шт.</p>
                <p id="ReqTransf" class="figures">3</p>
              </div>
            </div>
          </div>
          <div id="indicators-department" class="indicators-class">
            <div class="indicators-title">
              <span class="img"><img src="yan/img/pie.svg" alt="#" class="span-yan/img-h3-3nd"></span>
              <span id="h3-indicator" class="text">Показатели компании</span>
            </div>
            <div class="item-bar">
              <div class="ilia" style="display:flex; justify-content:center; align-items:center; position:relative;">
                <p id="bps_per1" class="p-bar">60%</p>
                <div id="spb1" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="filed" class="p-bar-text">Поданы через АС<br/>"Авто-Контроль", %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="ilia" style="display:flex; justify-content:center; align-items:center; position:relative;">
                <p id="bps_per2" class="p-bar">30%</p>
                <div id="spb2" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="processed" class="p-bar-text-str">Обработано ПЛ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="ilia" style="display:flex; justify-content:center; align-items:center; position:relative;">
                <p id="bps_per2" class="p-bar">90%</p>
                <div id="spb3" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="dtp" class="p-bar-text">ДТП по вине<br/>компании, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="ilia" style="display:flex; justify-content:center; align-items:center; position:relative;">
                <p id="bps_per4" class="p-bar">100%</p>
                <div id="spb4" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="mileage" class="p-bar-text">Принятый пробег<br/>по БСМТ, %</p>
              </div>
            </div>
            <div class="item-bar">
              <div class="ilia" style="display:flex; justify-content:center; align-items:center; position:relative;">
                <p id="bps_per5" lass="p-bar">100%</p>
                <div id="spb5" class="circle"></div>
              </div>
              <div class="div-bar-text">
                <p id="sla" class="p-bar-text">Принятый пробег<br/>SLA Филиала, %</p>
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
          </div>
      </section>

      <section id="ts-info" class="section-info hide">
        <div id="head-filial">
          <div class="logo">
            <div class="burger-logo">
              <img src="yan/img/burger-menu.svg" alt="">
            </div>
            <div class="img-logo">
              <img src="yan/img/logo.svg" alt="">
            </div>
          </div>
          <div id="ts" class="level-menu">
            <span id="level-menu-company" class="text-level-menu">Компания</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-department" class="text-level-menu">Филиал</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-autocolumn" class="text-level-menu">Автоколонна</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-spot" class="text-level-menu">Участок</span>
            <img src="yan/img/arrow.svg" alt="">
            <span id="level-menu-ts" class="text-level-menu">Транспортное средство</span>
          </div>
          <div class="title-ts">
            <span id="nameTS" class="title-ts-text">ТС №93 BMW</span>
          </div>
          <div class="">
            <div id="route" class="">
              <div class="route-title">
                <span class="yan/img"><img src="yan/img/route.svg" alt="#" class="span-yan/img-h3-2nd"></span>
                <span id="title-route" class="text">Маршрут</span>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Кол-во пройденного пути, км</p>
                <p id="doneRoute" class="figures">1300</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Кол-во отработанного t, ч.</p>
                <p id="" class="figures">10</p>
              </div>
              <div class="item-info">
                <p id="" class="trans-auto">Объем потреченного топлива, л.</p>
                <p id="AmOfFuel" class="figures">12</p>
              </div>
            </div>
          </div>
          <div id="oil" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/fuel.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="oilChangeDist" class="distance-figure">50 000 км</p>
              <p id="total" class="distance-text">До замены масла</p>
            </div>
            <div id="lb1" class="longlar"></div>
          </div>
          <div id="wheel" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/wheel.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="tireChangeDist" class="distance-figure">2 000 км</p>
              <p id="total" class="distance-text">До замены шин</p>
            </div>
            <div id="lb2" class="longlar"></div>
          </div>
          <div id="wheel" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/battery.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="accChangeDist" class="distance-figure">23 000 часа</p>
              <p id="total" class="distance-text">До замены АКБ</p>
            </div>
            <div id="lb3" class="longlar"></div>
          </div>

          <div id="wheel" class="item-distance">
            <div class="plr-yan/img-distance my-auto">
              <img class="yan/img-distance" src="yan/img/key.svg" alt="">
            </div>
            <div class="plr-col-distance">
              <p id="toChangeDist" class="distance-figure">70 000 км</p>
              <p id="total" class="distance-text">До ТО</p>
            </div>
            <div id="lb4" class="longlar"></div>
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
        let sectionCompany = $('section#info-company'), sectionDepartment = $('section#info-department'), sectionTS = $('section#ts-info'),
      MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
          '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
      );
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

        /**
         * Bread Crumbs
         * @type {*|jQuery|HTMLElement}
         */
        var levelMenuTs = $('div.level-menu#ts'),
            levelMenuTsDepartment = $('div.level-menu#ts > span#level-menu-department'),
            levelMenuTsAutocolumn = $('div.level-menu#ts > span#level-menu-autocolumn'),
            levelMenuTsSpot = $('div.level-menu#ts > span#level-menu-spot'),
            levelMenuTsTs = $('div.level-menu#ts > span#level-menu-ts'),
            levelMenuDepartment = $('div.level-menu#department'),
                addLevelInBreadCrumbs = function(level, text) {
                  levelMenuDepartment.innerHTML += '<img src="yan/img/arrow.svg" alt=""><span id="level-menu-'+level+'" class="text-level-menu">'+text+'</span>';
                };
            levelMenuDepDepartment = $('div.level-menu#department > span#level-menu-department');

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
            d_point = new ymaps.Placemark(regions[i].geometry.coordinates,{
                iconContent: '43'
                },{
                iconLayout: 'default#imageWithContent',
                iconImageHref: 'yan/img/union.png',
                iconImageSize: [42, 47.5],
                iconImageOffset: [-24, -24],
                iconContentOffset: [15, 15],
                iconContentLayout: MyIconContentLayout
            });
            for(var j = 0, a_len = autocolumns.length, a_array = [];j < a_len;j++) {
                spots = autocolumns[j].spots;
                a_point = new ymaps.Placemark(autocolumns[j].geometry.coordinates,{
                  iconContent: '12'
                  },{
                    iconLayout: 'default#imageWithContent',
                    iconContentOffset: [15, 15],
                    iconImageHref: 'yan/img/union.png',
                    iconImageSize: [42, 47.5],
                    iconImageOffset: [-24, -24],
                    iconContentLayout: MyIconContentLayout
                });
                for (var k = 0, s_len = spots.length, s_array = [];k < s_len;k++) {
                    cars = spots[k].cars;
                    s_point = new ymaps.Placemark(spots[k].geometry.coordinates,{
                      iconContent: '1123'
                      },{
                      iconLayout: 'default#imageWithContent',
                      iconImageHref: 'yan/img/union.png',
                      iconImageSize: [42, 47.5],
                      iconContentOffset: [9, 13],
                      iconImageOffset: [-24, -24],
                      iconContentLayout: MyIconContentLayout
                    });
                    for (var l=0, c_len = cars.length, c_array = [], c_dep, c_autocolumn, c_spot;l < c_len;l++) {
                        c_point = new ymaps.Placemark(cars[l].geometry.coordinates,{
                          iconContent: ''
                          },{
                          iconLayout: 'default#imageWithContent',
                          iconImageHref: 'yan/img/point_'+cars[l].type+'.png',
                          iconImageSize: [42, 47.5],
                          iconContentOffset: [9, 13],
                          iconImageOffset: [-24, -24],
                          iconContentLayout: MyIconContentLayout});
                        c_point.RTOptions = {
                            id: cars[l].id,
                            master: s_point,
                            status: cars[l].status,
                            type: cars[l].type,
                            applications: {done: cars[l].application.done, canceled: cars[l].application.canceled, st: cars[l].application.st},
                            children: false,
                            regionType: 'c'
                        };
                        c_point.RTInfo = {
                            nameTS: cars[l].brand,
                            oilChangeDist: accounting.formatNumber(cars[l].oilChangeDist, 0, ' ') + ' км',
                            tireChangeDist: accounting.formatNumber(cars[l].tireChangeDist, 0, ' ') + ' км',
                            accChangeDist: accounting.formatNumber(cars[l].accChangeDist, 0, ' ') + ' ч',
                            toChangeDist: accounting.formatNumber(cars[l].toChangeDist, 0, ' ') + ' км',
                            lb1: cars[l].lbs.lb1,
                            lb2: cars[l].lbs.lb2,
                            lb3: cars[l].lbs.lb3,
                            lb4: cars[l].lbs.lb4
                        };
                        c_dep = regions[i];
                        c_autocolumn = autocolumns[j];
                        c_spot = spots[k];
                        c_point.events.add('click', function(e) {
                            var target = e.originalEvent.target;
                            sectionDepartment.classList.add('hide');
                            sectionCompany.classList.add('hide');
                            sectionTS.classList.remove('hide');
                            newInfoTs(target.RTInfo);
                            levelMenuTsDepartment.innerText = c_dep.regionName;
                            levelMenuTsAutocolumn.innerText = c_autocolumn.regionName;
                            levelMenuTsSpot.innerText = c_spot.regionName;
                            levelMenuTsTs.innerText = target.RTInfo.nameTS + ' ТС №' + target.RTOptions.id;
                        });
                        c_array.push(c_point);
                    }
                    s_point.RTOptions = {
                        id: spots[k].id,
                        master: a_point,
                        children: c_array,
                        regionType: 's',
                        regionName: spots[k].regionName
                    };
                    s_point.events.add('click', function(e) {
                        var target = e.originalEvent.target;
                        window.currentLevel = 3;
                        actionClickPoint(myMap, target);
                        addLevelInBreadCrumbs('spot',target.RTOptions.regionName);
                    });
                    s_array.push(s_point);
                } // Iteration through the spots  for (var k = 0, s_len = spots.length, s_array = [];k < s_len;k++) {
                a_point.RTOptions = {
                    id: autocolumns[j].id,
                    master: d_point,
                    children: s_array,
                    regionType: 'a',
                    regionName: autocolumns[j].regionName
                };
                a_point.events.add('click', function(e) {
                    var target = e.originalEvent.target;
                    window.currentLevel = 2;
                    actionClickPoint(myMap, target);
                    addLevelInBreadCrumbs('autocolumn',target.RTOptions.regionName);
                });
                a_array.push(a_point);
            } // Iteration through the autocolumns  for(var j = 0, a_len = autocolumns.length, a_array = [];j < a_len;j++) {
            d_point.RTOptions = {
                id: regions[i].id,
                master: false,
                children: a_array,
                regionType: 'd',
                regionName: regions[i].regionName
            };
            d_point.RTInfo = {
              'spb': {
                'spb1':0.2,
                'spb2':0.5,
                'spb3':1.0,
                'spb4':0.6,
                'spb5':0.9
              }
            };
            d_point.events.add('click', function(e) {
                var target = e.originalEvent.target;
                window.currentLevel = 1;
                actionClickPoint(myMap, target);
                sectionCompany.classList.add('hide');
                sectionTS.classList.add('hide');
                sectionDepartment.classList.remove('hide');
                console.log(levelMenuDepDepartment);
                levelMenuDepDepartment.innerText = target.RTOptions.regionName;
                newInfoDASTs(d_point.RTInfo);
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
                a_array.forEach(function(el) {
                   myMap.geoObjects.remove(el);
                });
                setBoundsForPoints(myMap, d_array);
                myMap.controls.remove(oneLevelLess);
                sectionDepartment.classList.add('hide');
                sectionCompany.classList.remove('hide');
                return true;
            } else if (window.currentLevel === 2) {
                sectionTS.classList.add('hide');
                sectionDepartment.classList.remove('hide');
            }
            levelMenuDepartment.lastElementChild.remove();
            levelMenuDepartment.lastElementChild.remove();
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
        myMap.events.add('boundschange', function(e) {
            if (e.get('newZoom') >= 12) {
                if(window.currentElement === null) {
                    d_array.forEach(function(el) {
                        myMap.geoObjects.remove(el);
                    });
                } else {
                    window.currentElement.RTOptions.children.forEach(function (el) {
                        myMap.geoObjects.remove(el);
                    });
                }
                c_array.forEach(function(el) {
                    myMap.geoObjects.add(el);
                });
            } else {
                c_array.forEach(function(el) {
                    myMap.geoObjects.remove(el);
                });

                if(window.currentElement === null) {
                    d_array.forEach(function(el) {
                        myMap.geoObjects.add(el);
                    });
                } else {
                    window.currentElement.RTOptions.children.forEach(function (el) {
                        myMap.geoObjects.add(el);
                    });
                }
            }
        });
    }); // ymaps.ready(function() {
</script>
<script src="js_new/accounting.min.js"></script>
<script src="js_new/progressbar.min.js"></script>
<script src="js_new/main.js"></script>
</html>
