<footer>
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="footer-right d-flex align-items-center">
                <div class="footer-logo">
                    <a href="/">
                        <img class="footer-logo-img" src="/storage/img/logo_white.png" alt="adventures-zone-logo-white">
                    </a>
                </div>
                <div class="footer-address text-white">
                    {{--                    <h5><strong>{{__('adrese')}}:</strong></h5>--}}
                    {{--                    <a target="_blank" href="https://goo.gl/maps/WNHGu5m95zcy9pcq6">--}}
                    {{--                        <p>{{__('alfas-nosaukums')}}</p>--}}
                    {{--                        <p><u>{{__('alfas-iela')}}</u></p>--}}
                    {{--                    </a>--}}
                    <h5><strong><a
                                href="tel:{{ $footer[0]['mobile_phone']}}">{{ $footer[0]['mobile_phone']}}</a></strong>
                    </h5>
                    <h6><strong><a href="mailto:info@adventures.zone">info@adventures.zone</a></strong></h6>
                    <h5 class="mt-2"><strong>@lang('Uz drīzu tikšanos!')</strong></h5>
                    <p class="mt-4"><u><a
                                href="/{{$locale}}/privatuma-politika">@lang('privacy policy')</a></u></p>
                </div>
            </div>
            <div class="footer-soc-icons">
                <div class="icon-bar">
                    <a href="https://api.whatsapp.com/send?phone=37122022333">
                        <img class="img-fluid soc-icon" src="/storage/img/whatsapp.png" alt="">
                    </a>
                    <a href="https://www.tiktok.com/@adventures.zone">
                        <img class="img-fluid soc-icon" src="/storage/img/tiktok.png" alt="">
                    </a>
                    <a href="https://www.facebook.com/ADVENTURES.zone/">
                        <img class="img-fluid soc-icon" src="/storage/img/fb.png" alt="">
                    </a>
                    <a href="https://www.instagram.com/adventures.zone/">
                        <img class="img-fluid soc-icon" src="/storage/img/insta.png" alt="">
                    </a>
                </div>
                {{--                <div class="working-hours mx-auto">--}}
                {{--                    <h5 class="text-white text-uppercase">{{__('darba-laiks')}}</h5>--}}
                {{--                    --}}{{-- <h5 class="text-white">Katru dienu: 10:00 - 22:00</h5> --}}
                {{--                    <h5 class="text-white">--}}
                {{--                        @if ($locale == "en")--}}
                {{--                            {!! $footer[0]['working_hours_eng'] !!}--}}
                {{--                        @elseif ($locale == "ru")--}}
                {{--                            {!! $footer[0]['working_hours_rus'] !!}--}}
                {{--                        @else--}}
                {{--                            {!! $footer[0]['working_hours_lat'] !!}--}}
                {{--                        @endif--}}
                {{--                    </h5>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="footer-bar d-flex">
        <div class="green"></div>
        <div class="blue"></div>
        <div class="red"></div>
    </div>
</footer>
