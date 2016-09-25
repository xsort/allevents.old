    <header class="container" ng-controller="headerCtrl" >        <div class="headerWrapper container" layout="row" ng-cloak>            <div flex class="div-20 hidden-sm hidden-xs">                <a href="/index" class="brand"></a>            </div>             <div class="menuWrapper div-75 div-offset-5" layout="column" layout-align="space-between stretch">                <div layout="row" class="stickyHide">                    <div flex=33 class="xs-div-33">                        <a href="/" class="hidden-lg hidden-md top-sm-logo"></a>                    </div>                    <div flex=66 layout="row" class="xs-div-66">                        <div class="headerBtnModal hidden-xs" flex=80 layout="row" layout-align="space-around center">                            <md-button hidden-xs ng-click="showEvent($event)" md-ink-ripple="false" class="btnEvent">{{ trans('common.h-event')}} </md-button>                            <md-button hidden-xs ng-click="showAuth($event)" md-ink-ripple="false" class="btnAuth">Войти/Регистрация</md-button>                        </div>                        <div flex=20 class="headerLg xs-div-20" layout="row" layout-align="end center">                            <md-button>                                RU                            </md-button>                        </div>                    </div>                </div>                                    <div layout="row" class="h40" layout-align="space-between none" >                    <div class="div-75 ">                        <md-button  class="md-icon-button visible-xs" aria-label="mobile menu">                            <md-icon md-svg-icon="images/icons/menu.svg"></md-icon>                        </md-button>                        <ul class="headerMenu hidden-xs" layout="row" layout-align="center stretch">                            <li class="green" flex=20>                                <a href="/news" layout-align="center center">{{ trans('common.m-news') }}</a>                            </li>                            <li class="red" flex=20>                                <a href="/reports" layout-align="center center">{{ trans('common.m-reports') }}</a>                            </li>                            <li class="yellow" flex=20>                                <a href="/promo" layout-align="center center">{{ trans('common.m-promo') }}</a>                            </li>                            <li class="brown" flex=20>                                <a href="exclusive" layout-align="center center">{{ trans('common.m-exclusiv') }}</a>                            </li>                            <li class="blue" flex=20>                                <a href="/about" layout-align="center center" >{{ trans('common.m-about') }}</a>                            </li>                        </ul>                    </div>                    <div class="search" layout="row" layout-align="end none" class="div-25">                        <md-button class="headSearch" aria-label="search">                             <md-icon md-svg-src="images/icons/search.svg"></md-icon>                         </md-button>                        <md-button ng-href="/card" class="headCart" aria-label="cart" layout="row" layout-align="space-around center">                            <md-icon md-svg-src="images/icons/shopping-cart.svg"></md-icon>                             <span><ngcart-summary></ngcart-summary> лей</span>                        </md-button>                    </div>                              </div>            </div>       </div>    </header>    <script type="text/ng-template" id="template/ngCart/summary.html">        @{{ ngCart.totalCost() }}    </script>