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
        <section id="vendingNcafe">
            <div id="loader" class="loader"></div>
            <div class="vac">
                <div class="vac-item">
                    <div class="vac-item-header">
                        <figure class="vac-item-header-icon">
                            <img src="/img/vending&cafe/headericon.png" alt="vending&cafeIcon" />
                        </figure>
                        <div class="vac-item-header-title">
                            <p>Vending & Cafe’</p>
                            <figure>
                                <img src="/img/vending&cafe/usericon.png" alt="userIcon" />
                            </figure>
                        </div>
                    </div>
                    <div class="vac-item-address">
                        <div class="vac-item-address-title">
                            <p>Delivery Address</p>
                        </div>
                        <div class="vac-item-address-distance">
                            <div class="vac-item-address-distance-title">
                                <p>Address</p>
                            </div>
                            <div class="vac-item-address-distance-description">
                                <p>120/34-35 Moo 24 Sila Khonkean Kho...</p>
                                <figure class="vac-item-address-distance-description-icon">
                                    <a href="/map"><img src="/img/wash&dry/addressicon.png"
                                            alt="addressIcon" /></a>
                                </figure>
                            </div>
                            <div class="vac-item-address-distance-input">
                                <input type="text"
                                    placeholder="More Detail : Lorem ipsum dolor sit amet consectetur. Cond..." />
                            </div>
                        </div>
                        <div class="vac-item-address-line"></div>
                    </div>
                    <div class="vac-item-phone">
                        <div class="vac-item-phone-title">
                            <p>Your Phone Number</p>
                        </div>
                        <div class="vac-item-phone-input">
                            <input type="text" placeholder="Please enter your phone number : 089-123-4567" />
                        </div>
                        <div class="vac-item-phone-line"></div>
                    </div>
                    <div class="vac-item-branch">
                        <div class="vac-item-branch-title">
                            <p>Choose a Branch</p>
                        </div>
                        <div class="vac-item-branch-list">
                            <div class="vac-item-branch-list-title">
                                <p>a branch</p>
                            </div>
                            <div class="vac-item-branch-list-description">
                                <p>Manami super center</p>
                                <figure onclick="dropDown()" class="vac-item-branch-list-description-dropdown active">
                                    <img src="/img/wash&dry/dropdown.png" alt="dropDownIcon" />
                                </figure>
                            </div>
                        </div>
                        <div class="vac-item-pickup">
                            <div class="vac-item-pickup-title">
                                <p>Shipping Time</p>
                            </div>
                            <div class="vac-item-pickup-button">
                                <button onclick="timeNow()" type="button" class="active">
                                    <figure>
                                        <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                    </figure>
                                    Now
                                </button>
                                <button onclick="shipTime()" type="button">
                                    <figure style="display: none">
                                        <img src="/img/wash&dry/btnunactive.png" alt="buttonActiveIcon" />
                                    </figure>
                                    Ship Time
                                </button>
                            </div>
                            <div class="vac-item-pickup-calendar flex flex-col w-full justify-center items-center gap-1">
                                <label for="" class="text-base text-white font-medium">Select a date and time :</label>
                                <input id="datetime1" style="pointer-events: none" class="opacity-50 font-medium text-center w-full rounded-full" type="datetime-local">
                                <input id="datetime2" style="display: none" class="font-medium text-center w-full rounded-full" type="datetime-local">
                                <p id="formatted-date"></p>
                            </div>
                            {{-- <!-- Import Calendar -->
                            @verbatim
                            <div class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl"
                                ng-cloak>
                                <div date-picker datepicker-title="Shipping Time" picktime="true" pickdate="true"
                                    pickpast="false" mondayfirst="false" custom-message="You have selected"
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
                                        </div>
                                        <div class="timepicker" ng-if="picktime == 'true'">
                                            <div ng-class="{'am': timeframe == 'am', 'pm': timeframe == 'pm' }">
                                                <div class="timepicker-container-outer" selectedtime="time" timetravel>
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
                            {{-- <div class="vac-item-pickup-line"></div>
                            <div class="vac-item-pickup-submit">
                                <div class="vac-item-pickup-submit-checkbox">
                                    <input type="checkbox" />Pick up Now
                                </div>
                                <div class="vac-item-pickup-submit-button">
                                    <button type="button">Confirm</button>
                                </div>
                            </div> --}}
                        </div>
                        {{-- <div class="vac-item-type">
                            <div class="vac-item-type-title">
                                <p>Food or Drink</p>
                            </div>
                            <div class="vac-item-type-content">
                                <div class="vac-item-type-content-group">
                                    <figure class="vac-item-type-content-group-pick">
                                        <img src="/img/vending&cafe/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="vac-item-type-content-group-icon">
                                        <img src="/img/vending&cafe/drink.png" alt="foodIcon">
                                    </figure>
                                    <p>Food</p>
                                </div>
                                <div class="vac-item-type-content-group">
                                    <figure class="vac-item-type-content-group-pick">
                                        <img src="/img/vending&cafe/pick.png" alt="pickIcon">
                                    </figure>
                                    <figure class="vac-item-type-content-group-icon">
                                        <img src="/img/vending&cafe/drink.png" alt="drinkIcon">
                                    </figure>
                                    <p>Drink</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="vac-item-button">
                            <button onclick="vacPage()">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js"></script>
    <script src="/js/pages/vending&cafe.js"></script>
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
