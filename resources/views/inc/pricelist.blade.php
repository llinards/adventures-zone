<section id="pricelist" class="section-cards overflow-hidden">
    <div id="first-row" class="d-flex flex-wrap">
        <div class="left">
            <div id="xs" class="section-title-bar">
                <h1 class="text-white text-center">{{__('xs-zona')}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="text-center">
                    <span class="invisible">{{__('darba-dienas')}}</span>
                    <a class="xs-zone pricelist-card d-flex flex-column" href="#"
                       data-toggle="modal"
                       data-target="#{{$locale}}xsOneHour">
                        <h3 class="pricelist-title text-center text-white">{{__('viena-stunda')}}</h3>
                        @php
                            [$whole, $decimal] = explode('.', $pricelist[0]->price);
                        @endphp
                        <h6 class="pricelist-price text-center text-white my-auto position-relative">
                            <span class="price-number">{{ $whole }}</span>
                            <i class="fas fa-euro-sign euro-decimal"></i>
                            <sup class="price-sup">{{ $decimal }}</sup>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div id="party" class="section-title-bar mt-2 d-none d-md-block">
                <h1 class="text-white text-center text-lowercase">{{__('ballites')}}</h1>
            </div>
            <div class="row d-none d-md-flex justify-content-center">
                <div class="text-center">
                    <span class="weekdays party-color">{{__('darba-dienas')}}</span>
                    <a class="party pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}partyRoom">
                        <h3 class="pricelist-title text-center text-white">{{__('ire-2h')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">{{ $pricelist[4]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <span class="weekends party-color">{{__('brivdienas')}}</span>
                    <a class="party pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}partyRoom">
                        <h3 class="pricelist-title text-center text-white">{{__('ire-2h')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">{{ $pricelist[12]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center d-none d-md-flex">
                <div class="text-center">
                    <a class="party-weekend pricelist-card d-flex flex-column" href="#"
                       data-toggle="modal"
                       data-target="#{{$locale}}partyRoomWeekend">
                        <h3 class="pricelist-title text-center text-white">{{__('katra-nakama-stunda')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">+{{ $pricelist[11]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="right">
            <div id="azone" class="section-title-bar">
                <h1 class="text-white text-center">{{__('a-zona')}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="text-center">
                    <span class="weekdays a-zone-color">{{__('darba-dienas')}}</span>
                    <a class="a-zone pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}aOneHour">
                        <h3 class="pricelist-title text-center text-white">{{__('viena-stunda')}}</h3>
                        @php
                            [$whole, $decimal] = explode('.', $pricelist[1]->price);
                        @endphp
                        <h6 class="pricelist-price text-center text-white my-auto">
                            <span class="price-number">{{ $whole }}</span>
                            <i class="fas fa-euro-sign euro-decimal"></i>
                            <sup class="price-sup">{{ $decimal }}</sup>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <span class="weekends a-zone-color">{{__('brivdienas')}}</span>
                    <a class="a-zone pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}aOneHour">
                        <h3 class="pricelist-title text-center text-white">{{__('viena-stunda')}}</h3>
                        @php
                            [$whole, $decimal] = explode('.', $pricelist[10]->price);
                        @endphp
                        <h6 class="pricelist-price text-center text-white my-auto">
                            <span class="price-number">{{ $whole }}</span>
                            <i class="fas fa-euro-sign euro-decimal"></i>
                            <sup class="price-sup">{{ $decimal }}</sup>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="text-center">
                    <a class="a-zone pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}aOneHour">
                        <h3 class="pricelist-title text-center text-white">{{__('divas-stundas')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">+{{ $pricelist[2]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="text-center">
                    <a class="a-zone pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}aOneHourFullDay">
                        <h3 class="pricelist-title text-center text-white">{{__('visa-diena')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">+{{ $pricelist[3]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="second-row" class="d-flex d-md-none flex-wrap">
        <div class="left">
            <div id="party" class="section-title-bar">
                <h1 class="text-white text-center text-lowercase">{{__('ballites')}}</h1>
            </div>
            <div class="row justify-content-center">
                <div class="text-center">
                    <span class="weekdays party-color">{{__('darba-dienas')}}</span>
                    <a class="party pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}partyRoom">
                        <h3 class="pricelist-title text-center text-white">{{__('ire-2h')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">{{ $pricelist[4]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
                <div class="text-center">
                    <span class="weekends party-color">{{__('brivdienas')}}</span>
                    <a class="party pricelist-card d-flex flex-column" href="#" data-toggle="modal"
                       data-target="#{{$locale}}partyRoom">
                        <h3 class="pricelist-title text-center text-white">{{__('ire-2h')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">{{ $pricelist[12]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="text-center">
                    <a class="party-weekend pricelist-card d-flex flex-column" href="#"
                       data-toggle="modal"
                       data-target="#{{$locale}}partyRoomWeekend">
                        <h3 class="pricelist-title text-center text-white">{{__('katra-nakama-stunda')}}</h3>
                        <h6 class="pricelist-price text-center text-white my-auto"><span
                                class="price-number">+{{ $pricelist[11]->price }}</span> <i
                                class="fas fa-euro-sign"></i>
                        </h6>
                        <div class="pricelist-info">
                            <i class="fas fa-info text-black"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="third-row" class="d-flex flex-wrap">
        <div class="left">
            <div id="membership" class="section-title-bar">
                <h1 class="text-white text-center text-lowercase">{{__('abonementi')}}</h1>
            </div>
            <div class="second-lvl d-flex">
                <div class="left second-lvl">
                    <div id="visit-count" class="section-title-bar">
                        <h4 class="text-white text-center">{{__('apmeklejuma-reizes')}}</h4>
                    </div>
                    <div class="row mx-auto justify-content-start">
                        <a class="col-12 membership pricelist-card small d-flex align-items-center justify-content-around"
                           href="#" data-toggle="modal" data-target="#{{$locale}}membershipThree">
                            <h3 class="pricelist-price text-center text-white"><span
                                    class="price-number">{{ $pricelist[5]->price }}</span> <i
                                    class="fas fa-euro-sign"></i></h3>
                            <h6 class="pricelist-title text-center text-white">{{ $pricelist[5]->amount }}</h6>
                            <div class="pricelist-info-small">
                                <i class="fas fa-info text-black"></i>
                            </div>
                        </a>
                        <a class="col-12 membership pricelist-card small d-flex align-items-center justify-content-around"
                           href="#" data-toggle="modal" data-target="#{{$locale}}membershipFive">
                            <h3 class="pricelist-price text-center text-white"><span
                                    class="price-number">{{ $pricelist[6]->price }}</span> <i
                                    class="fas fa-euro-sign"></i></h3>
                            <h6 class="pricelist-title text-center text-white">{{ $pricelist[6]->amount }}</h6>
                            <div class="pricelist-info-small">
                                <i class="fas fa-info text-black"></i>
                            </div>
                        </a>
                        <a class="col-12 membership pricelist-card small d-flex align-items-center justify-content-around"
                           href="#" data-toggle="modal" data-target="#{{$locale}}membershipTen">
                            <h3 class="pricelist-price text-center text-white"><span
                                    class="price-number">{{ $pricelist[7]->price }}</span> <i
                                    class="fas fa-euro-sign"></i></h3>
                            <h6 class="pricelist-title text-center text-white">{{ $pricelist[7]->amount }}</h6>
                            <div class="pricelist-info-small">
                                <i class="fas fa-info text-black"></i>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="right second-lvl">
                    <div id="thirty-days" class="section-title-bar">
                        <h4 class="text-white text-center">{{__('30-dienam')}}</h4>
                    </div>
                    <div class="row mx-auto justify-content-start">
                        <a class="col-12 membership pricelist-card small d-flex align-items-center justify-content-around"
                           href="#" data-toggle="modal" data-target="#{{$locale}}membershipKlusais">
                            <h3 class="pricelist-price text-center text-white"><span
                                    class="price-number">{{ $pricelist[8]->price }}</span> <i
                                    class="fas fa-euro-sign"></i></h3>
                            <h6 class="pricelist-title text-center text-white">"{{__('klusais-laiks')}}
                                "*</h6>
                            <div class="pricelist-info-small">
                                <i class="fas fa-info text-black"></i>
                            </div>
                        </a>
                        <a class="col-12 membership pricelist-card small d-flex align-items-center justify-content-around"
                           href="#" data-toggle="modal" data-target="#{{$locale}}membershipAktivais">
                            <h3 class="pricelist-price text-center text-white"><span
                                    class="price-number">{{ $pricelist[9]->price }}</span> <i
                                    class="fas fa-euro-sign"></i></h3>
                            <h6 class="pricelist-title text-center text-white">"{{__('aktivais-laiks')}}
                                "**</h6>
                            <div class="pricelist-info-small">
                                <i class="fas fa-info text-black"></i>
                            </div>
                        </a>
                    </div>
                    <div class="disclaimer-section">
                        <p>* {{__('klusais-laiks-atruna')}}</p>
                        <p>** {{__('aktivais-laiks-atruna')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('inc.pricelist-modal', ['pricelist' => $pricelist])

    @include('inc.buy-reserve-btn')
</section>
