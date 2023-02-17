<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Manami</title>
</head>

<body>
    <main>
        <section id="washNdry">
            <div id="loader" class="loader"></div>
            <div class="wad">
                <div class="wad-item">
                    <div class="wad-item-header">
                        <figure class="wad-item-header-icon">
                            <img src="/img/wash&dry/headericon.png" alt="wash&DryIcon" />
                        </figure>
                        <div class="wad-item-header-title">
                            <p>Wash & Dry</p>
                            <figure>
                                <img src="/img/wash&dry/headerusericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="wad-item-address">
                        <div class="wad-item-address-title">
                            <p>Address drop off and pick up</p>
                        </div>
                        <div class="wad-item-address-distance">
                            <div class="wad-item-address-distance-group">
                                <div class="wad-item-address-distance-group-title">
                                    <p>Pick up</p>
                                </div>
                                <div class="wad-item-address-distance-group-description">
                                    <p>120/34-35 Moo 24 Sila Khonkean Kho...</p>
                                    <figure class="wad-item-address-distance-group-description-icon">
                                        <a href="/map"><img src="/img/wash&dry/addressicon.png"
                                                alt="addressIcon" /></a>
                                    </figure>
                                </div>
                                <div class="wad-item-address-distance-group-input">
                                    <input type="text"
                                        placeholder="More Detail : Lorem ipsum dolor sit amet consectetur. Cond..." />
                                </div>
                                <div class="wad-item-address-distance-group-line"></div>
                            </div>
                            <div class="wad-item-address-distance-group">
                                <div class="wad-item-address-distance-group-title">
                                    <p>Drop off</p>
                                </div>
                                <div class="wad-item-address-distance-group-description">
                                    <p>120/34-35 Moo 24 Sila Khonkean Kho...</p>
                                    <figure class="wad-item-address-distance-group-description-icon">
                                        <a href="/map"><img src="/img/wash&dry/addressicon.png"
                                                alt="addressIcon" /></a>
                                    </figure>
                                </div>
                                <div class="wad-item-address-distance-group-input">
                                    <input type="text"
                                        placeholder="More Detail : Lorem ipsum dolor sit amet consectetur. Cond..." />
                                </div>
                            </div>
                        </div>
                        <div class="wad-item-address-line"></div>
                    </div>
                    <div class="wad-item-phone">
                        <div class="wad-item-phone-title">
                            <p>Your Phone Number</p>
                        </div>
                        <div class="wad-item-phone-input">
                            <input type="text" placeholder="Please enter your phone number : 089-123-4567" />
                        </div>
                        <div class="wad-item-phone-line"></div>
                    </div>
                    <div class="wad-item-detaillist">
                        <div class="wad-item-detaillist-title">
                            <p>*Detail List</p>
                        </div>
                        <div class="wad-item-detaillist-input">
                            <input type="text" placeholder="Please enter your Laundry basket : Red laundry basket" />
                        </div>
                        <div class="wad-item-detaillist-line"></div>
                    </div>
                    <div class="wad-item-branch">
                        <div class="wad-item-branch-title">
                            <p>Choose a Branch</p>
                        </div>
                        <div class="wad-item-branch-list">
                            <div class="wad-item-branch-list-title">
                                <p>a branch</p>
                            </div>
                            <div class="wad-item-branch-list-description">
                                <p>Manami super center</p>
                                <figure onclick="dropDown()" class="wad-item-branch-list-description-dropdown active">
                                    <img src="/img/wash&dry/dropdown.png" alt="dropDownIcon" />
                                </figure>
                            </div>
                        </div>
                        <div class="wad-item-pickup">
                            <div class="wad-item-pickup-title">
                                <p>Pick-up time</p>
                            </div>
                            <div class="wad-item-pickup-button">
                                <button onclick="timeNow()" type="button" class="active">
                                    <figure style="display: flex;">
                                        <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                    </figure>
                                    Now
                                </button>
                                <button onclick="pickUp()" type="button">
                                    <figure>
                                        <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                    </figure>
                                    Pick up
                                </button>
                                <button onclick="dropOff()" type="button">
                                    <figure>
                                        <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                    </figure>
                                    Drop off
                                </button>
                            </div>
                            <div class="wad-item-pickup-calendar flex flex-col w-full justify-center items-center gap-1">
                                <label for="" class="text-base text-white font-medium">Select a date and time :</label>
                                <input id="datetime1" style="pointer-events: none" class="opacity-50 font-medium text-center w-full rounded-full" type="datetime-local">
                                <input id="datetime2" style="display: none" class="font-medium text-center w-full rounded-full" type="datetime-local">
                                <input id="datetime3" style="display: none" class="font-medium text-center w-full rounded-full" type="datetime-local">
                                <p id="formatted-date"></p>
                            </div>
                            {{-- <!-- Import Calendar -->
                            @verbatim
                            <div class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl"
                                ng-cloak>
                                <div date-picker datepicker-title="Select Date" picktime="true" pickdate="true"
                                    pickpast="false" mondayfirst="false" custom-message=""
                                    selecteddate="ctrl.selected_date" updatefn="ctrl.updateDate(newdate)">
                                    <div class="datepicker"
                                        ng-class="{
                                        'am': timeframe == 'am',
                                        'pm': timeframe == 'pm',
                                        'compact': compact
                                    }">
                                        <div class="datepicker-header">
                                            <div class="datepicker-title" ng-if="datepicker_title">
                                                {{ datepickerTitle }}
                                            </div>
                                            <div class="datepicker-subheader">
                                                {{ customMessage }} {{ selectedDay }}
                                                {{ monthNames[localdate . getMonth()] }}
                                                {{ localdate . getDate() }}, {{ localdate . getFullYear() }}
                                            </div>
                                        </div>
                                        <div class="datepicker-calendar">
                                            <div class="calendar-header">
                                                <div class="goback" ng-click="moveBack()" ng-if="pickdate">
                                                    <svg width="30" height="30">
                                                        <path fill="none" stroke="#0DAD83" stroke-width="3"
                                                            d="M19,6 l-9,9 l9,9" />
                                                    </svg>
                                                </div>
                                                <div class="current-month-container">
                                                    {{ currentViewDate . getFullYear() }} {{ currentMonthName() }}
                                                </div>
                                                <div class="goforward" ng-click="moveForward()" ng-if="pickdate">
                                                    <svg width="30" height="30">
                                                        <path fill="none" stroke="#0DAD83" stroke-width="3"
                                                            d="M11,6 l9,9 l-9,9" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="calendar-day-header">
                                                <span ng-repeat="day in days"
                                                    class="day-label">{{ day . short }}</span>
                                            </div>
                                            <div class="calendar-grid" ng-class="{false: 'no-hover'}[pickdate]">
                                                <div ng-class="{'no-hover': !day.showday}" ng-repeat="day in month"
                                                    class="datecontainer"
                                                    ng-style="{'margin-left': calcOffset(day, $index)}" track by
                                                    $index>
                                                    <div class="datenumber" ng-class="{'day-selected': day.selected }"
                                                        ng-click="selectDate(day)">
                                                        {{ day . daydate }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timepicker" ng-if="picktime == 'true'">
                                            <div ng-class="{'am': timeframe == 'am', 'pm': timeframe == 'pm' }">
                                                <div class="timepicker-container-outer" selectedtime="time"
                                                    timetravel>
                                                    <div class="timepicker-container-inner">
                                                        <div class="timeline-container"
                                                            ng-mousedown="timeSelectStart($event)"
                                                            sm-touchstart="timeSelectStart($event)">
                                                            <div class="current-time">
                                                                <div class="actual-time">{{ time }}</div>
                                                            </div>
                                                            <div class="timeline"></div>
                                                            <div class="hours-container">
                                                                <div class="hour-mark"
                                                                    ng-repeat="hour in getHours() track by $index">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="display-time">
                                                            <div class="decrement-time"
                                                                ng-click="adjustTime('decrease')">
                                                                <svg width="24" height="24">
                                                                    <path stroke="white" stroke-width="2"
                                                                        d="M8,12 h8" />
                                                                </svg>
                                                            </div>
                                                            <div class="time"
                                                                ng-class="{'time-active': edittime.active}">
                                                                <input type="text" class="time-input"
                                                                    ng-model="edittime.input"
                                                                    ng-keydown="changeInputTime($event)"
                                                                    ng-focus="edittime.active = true; edittime.digits = [];"
                                                                    ng-blur="edittime.active = false" />
                                                                <div class="formatted-time">{{ edittime . formatted }}
                                                                </div>
                                                            </div>
                                                            <div class="increment-time"
                                                                ng-click="adjustTime('increase')">
                                                                <svg width="24" height="24">
                                                                    <path stroke="white" stroke-width="2"
                                                                        d="M12,7 v10 M7,12 h10" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="am-pm-container">
                                                            <div class="am-pm-button" ng-click="changetime('am');">am
                                                            </div>
                                                            <div class="am-pm-button" ng-click="changetime('pm');">pm
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="buttons-container">
                                            <div class="cancel-button">CANCEL</div>
                                            <div class="save-button">SAVE</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endverbatim --}}
                        </div>
                    </div>
                    <div class="wad-item-type">
                        <div class="wad-item-type-clothing">
                            <div class="wad-item-type-clothing-title">
                                <p>Clothing type</p>
                            </div>
                            <div class="wad-item-type-clothing-content">
                                <div class="wad-item-type-clothing-content-group">
                                    <figure class="wad-item-type-clothing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-clothing-content-group-icon">
                                        <img src="/img/wash&dry/cotton.png" alt="shirtIcon">
                                    </figure>
                                    <p>Mix</p>
                                </div>
                                <div class="wad-item-type-clothing-content-group">
                                    <figure class="wad-item-type-clothing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-clothing-content-group-icon">
                                        <img src="/img/wash&dry/cotton.png" alt="cottonIcon">
                                    </figure>
                                    <p>Cotton</p>
                                </div>
                                <div class="wad-item-type-clothing-content-group">
                                    <figure class="wad-item-type-clothing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-clothing-content-group-icon">
                                        <img src="/img/wash&dry/sport.png" alt="sportWearIcon">
                                    </figure>
                                    <p>Sports Wear</p>
                                </div>
                                <div class="wad-item-type-clothing-content-group">
                                    <figure class="wad-item-type-clothing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-clothing-content-group-icon">
                                        <img src="/img/wash&dry/easy.png" alt="easyCareIcon">
                                    </figure>
                                    <p>Easy Care</p>
                                </div>
                                <div class="wad-item-type-clothing-content-group">
                                    <figure class="wad-item-type-clothing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-clothing-content-group-icon">
                                        <img src="/img/wash&dry/duvet.png" alt="duvetIcon">
                                    </figure>
                                    <p>Duvet</p>
                                </div>
                                <div class="wad-item-type-clothing-content-group">
                                    <figure class="wad-item-type-clothing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-clothing-content-group-icon">
                                        <img src="/img/wash&dry/delicate.png" alt="delicateIcon">
                                    </figure>
                                    <p>Delicate</p>
                                </div>
                            </div>
                        </div>
                        <div class="wad-item-type-washing">
                            <div class="wad-item-type-washing-title">
                                <p>Washing or Drying</p>
                            </div>
                            <div class="wad-item-type-washing-content">
                                <div class="wad-item-type-washing-content-group">
                                    <figure class="wad-item-type-washing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-washing-content-group-icon">
                                        <img src="/img/wash&dry/drying.png" alt="washingIcon">
                                    </figure>
                                    <p>Washing</p>
                                </div>
                                <div class="wad-item-type-washing-content-group">
                                    <figure class="wad-item-type-washing-content-group-pick">
                                        <img src="/img/wash&dry/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="wad-item-type-washing-content-group-icon">
                                        <img src="/img/wash&dry/drying.png" alt="dryingIcon">
                                    </figure>
                                    <p>Drying</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wad-item-button">
                        <button onclick="wadPage()">Next</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js"></script>
    <script src="/js/pages/wash&dry.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/confirmDate/confirmDate.js"></script>
    <script>
        config = {
            enableTime: true,
            dateFormat: "Y-m-d H:i",
            minDate: "today",
            disableMobile: true,
            plugins: [new confirmDatePlugin({
                confirmText: "Close",
                confirmIcon: "",
                showAlways: false
            })],
        }
        flatpickr("input[type=datetime-local]", config);
    </script>
</body>

</html>
