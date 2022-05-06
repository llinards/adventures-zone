<div class="modal fade pricelist xsOneHour" id="{{$locale}}xsOneHour" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[0]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[0]->description_eng !!}
        @else
          {!! $pricelist[0]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aOneHour" id="{{$locale}}aOneHour" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[1]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[1]->description_eng !!}
        @else
          {!! $pricelist[1]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aOneHourFullDay" id="{{$locale}}aOneHourFullDay" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[3]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[3]->description_eng !!}
        @else
          {!! $pricelist[3]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aWeekends" id="{{$locale}}aWeekends" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if ($locale == 'ru')
                    {!! $pricelist[10]->description_rus !!}
                @elseif ($locale == 'en')
                    {!! $pricelist[10]->description_eng !!}
                @else
                    {!! $pricelist[10]->description_lat !!}
                @endif
            </div>
        </div>
    </div>
</div>

<div class="modal fade pricelist partyRoom" id="{{$locale}}partyRoom" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[4]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[4]->description_eng !!}
        @else
          {!! $pricelist[4]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipThree" id="{{$locale}}membershipThree" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[5]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[5]->description_eng !!}
        @else
          {!! $pricelist[5]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipFive" id="{{$locale}}membershipFive" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[6]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[6]->description_eng !!}
        @else
          {!! $pricelist[6]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipTen" id="{{$locale}}membershipTen" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[7]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[7]->description_eng !!}
        @else
          {!! $pricelist[7]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipKlusais" id="{{$locale}}membershipKlusais" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[8]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[8]->description_eng !!}
        @else
          {!! $pricelist[8]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipAktivais" id="{{$locale}}membershipAktivais" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @if ($locale == 'ru')
          {!! $pricelist[9]->description_rus !!}
        @elseif ($locale == 'en')
          {!! $pricelist[9]->description_eng !!}
        @else
          {!! $pricelist[9]->description_lat !!}
        @endif
      </div>
    </div>
  </div>
</div>

{{-- EN --}}

{{-- <div class="modal fade pricelist xsOneHour" id="enxsOneHour" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Purchasing an XS zone ticket allows you to visit the XS area ball pool for one hour.</h5>
        <div class="alert alert-danger" role="alert">
          <p>In this area, the parent or the person in charge of the child must supervise the child himself / herself while the child is in the amusement park.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aOneHour" id="enaOneHour" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">The price includes the use of any A zone attraction:</h5>
        <ul>
          <li>Ninja Warrior</li>
          <li>Rock climbing walls</li>
          <li>Net adventure park and Labyrinth of miracles</li>
          <li>Trampolines</li>
          <li>Creativity games</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aOneHourFullDay" id="enaOneHourFullDay" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">The price includes the use of any A zone attraction:</h5>
        <ul>
          <li>Ninja Warrior</li>
          <li>Rock climbing walls</li>
          <li>Net adventure park and Labyrinth of miracles</li>
          <li>Trampolines</li>
          <li>Creativity games</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist partyRoom" id="enpartyRoom" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">The price includes the rent of one party room with equipment for two hours.</h5>
        <p class="pb-2">
          When renting a party room, tickets for ADVENTURES' zone attractions must be purchased separately.</p>
        <p>For a surcharge, we can provide a festive table feast or hire a party animator.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipThree" id="enmembershipThree" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Save and buy three 2h adventure park visits for the price of two! The price includes the use of any A zone attractions:</h5>
        <ul class="pb-2">
          <li>Ninja Warrior</li>
          <li>Rock climbing walls</li>
          <li>Net adventure park and Labyrinth of miracles</li>
          <li>Trampolines</li>
          <li>Creativity games</li>
        </ul>
        <p>The pass is valid for 3 years from the date of purchase and can be used by one person for three separate visits to the park for two hours.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipFive" id="enmembershipFive" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Save and buy five 2h adventure park visits for the price of three! The price includes the use of any A zone attractions:</h5>
        <ul class="pb-2">
          <li>Ninja Warrior</li>
          <li>Rock climbing walls</li>
          <li>Net adventure park and Labyrinth of miracles</li>
          <li>Trampolines</li>
          <li>Creativity games</li>
        </ul>
        <p>The pass is valid for 3 years from the date of purchase and can be used by one person for five separate visits to the park for two hours.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipTen" id="enmembershipTen" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Save and buy ten 2h adventure park visits for the price of five! The price includes the use of any A zone attractions:</h5>
        <ul class="pb-2">
          <li>Ninja Warrior</li>
          <li>Rock climbing walls</li>
          <li>Net adventure park and Labyrinth of miracles</li>
          <li>Trampolines</li>
          <li>Creativity games</li>
        </ul>
        <p>The pass is valid for 3 years from the date of purchase and can be used by one person for ten separate visits to the park for two hours.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipKlusais" id="enmembershipKlusais" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Monthly pass for visits to ZONE A with limited time*. The pass is valid for one month from the date you first visit the park. According to terms of use this pass may be used:</h5>
        <ul class="pb-2">
          <li>*on <strong>working days only.</strong> From 10am to 4pm;</li>
          <li><strong>one<strong> person only;</li>
          <li>an unlimited number of times within its validity period;</li>
          <li>the pass must be used within 3 years of purchase.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipAktivais" id="enmembershipAktivais" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Monthly pass for visits to A ZONE at any time*. The pass is valid for one month from the date you first visit the park. According to terms of use this pass may be used:</h5>
        <ul class="pb-2">
          <li>any day and time during the theme park's working hours;</li>
          <li><strong>one</strong> person only;</li>
          <li>unlimited number of times only during its validity period;</li>
          <li>the pass must be used within 3 years of purchase.</li>
        </ul>
      </div>
    </div>
  </div>
</div> --}}

{{-- RU --}}

{{-- <div class="modal fade pricelist xsOneHour" id="ruxsOneHour" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Покупка билета в XS зону дает Вам право часового посещения бассейна с шариками.</h5>
        <div class="alert alert-danger" role="alert">
          <p>В этой зоне родитель или лицо, ответственное за ребенка, должен сам присматривать за своим чадом, пока он / она находится в аттракционе.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aOneHour" id="ruaOneHour" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">В стоимость входит использование любых аттракционов нашего парка развлечений:</h5>
        <ul>
          <li>полоса препятствий «Нинджа»</li>
          <li>скалодром</li>
          <li>веревочный парк и лабиринт чудес</li>
          <li>батуты</li>
          <li>творческие развивающие игры</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist aOneHourFullDay" id="ruaOneHourFullDay" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">В стоимость входит использование любых аттракционов нашего парка развлечений:</h5>
        <ul>
          <li>полоса препятствий «Нинджа»</li>
          <li>скалодром</li>
          <li>веревочный парк и лабиринт чудес</li>
          <li>батуты</li>
          <li>творческие развивающие игры</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist partyRoom" id="rupartyRoom" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">В стоимость входит аренда одной комнаты для праздников с оборудованием на два часа.</h5>
        <p class="pb-2">
          При аренде комнаты для праздников билеты на аттракционы ADVENTURES’ ZONE необходимо приобретать отдельно, использование аттракционов не входит в стоимость аренды места для праздников.</p>
        <p>За дополнительную плату мы предоставляем праздничное застолье, а также услуги аниматора.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipThree" id="rumembershipThree" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Сэкономьте, купив 3 посещения парка развлечений длительностью 2 часа, заплатив стоимость всего двух визитов!</h5>
        <ul class="pb-2">
          <li>полоса препятствий «Нинджа»</li>
          <li>скалодром</li>
          <li>веревочный парк и лабиринт чудес</li>
          <li>батуты</li>
          <li>творческие развивающие игры</li>
        </ul>
        <p>Абонемент действителен в течение 3 лет с даты покупки и может быть использован одним человеком для трех отдельных посещений парка в течение двух часов.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipFive" id="rumembershipFive" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Сэкономьте, купив 5 посещений парка развлечений длительностью 2 часа, заплатив стоимость всего трех посещений! Сэкономьте, купив 5 посещений парка развлечений длительностью 2 часа, заплатив стоимость всего трех посещений!</h5>
        <ul class="pb-2">
          <li>полоса препятствий «Нинджа»</li>
          <li>скалодром</li>
          <li>веревочный парк и лабиринт чудес</li>
          <li>батуты</li>
          <li>творческие развивающие игры</li>
        </ul>
        <p>Абонемент действителен в течение 3 лет с даты покупки и может быть использован одним человеком для пяти отдельных посещений парка в течение двух часов.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipTen" id="rumembershipTen" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Сэкономьте, купив 10 посещений парка развлечений длительностью 2 часа, заплатив стоимость всего пяти посещений!</h5>
        <ul class="pb-2">
          <li>полоса препятствий «Нинджа»</li>
          <li>скалодром</li>
          <li>веревочный парк и лабиринт чудес</li>
          <li>батуты</li>
          <li>творческие развивающие игры</li>
        </ul>
        <p>Абонемент действителен в течение 3 лет с даты покупки и может быть использован одним человеком для десяти отдельных посещений парка в течение двух часов.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipKlusais" id="rumembershipKlusais" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Ежемесячный абонемент для посещения ADVENTURES’ ZONE в определенное время*. Абонемент действителен в течение одного месяца с даты его первого использования. Условия использования этого абонемента для посещения ADVENTURES’ ZONE:</h5>
        <ul class="pb-2">
          <li class="text-lowercase">*ТОЛЬКО B РАБОЧИЕ ДНИ С 10:00 ДО 16:00;</li>
          <li>только один человек;</li>
          <li>неограниченное количество раз в течение срока действия;</li>
          <li>абонемент должен быть использован в течение 3 лет с момента покупки.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="modal fade pricelist membershipAktivais" id="rumembershipAktivais" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="pb-2">Ежемесячный абонемент на посещения ADVENTURES’ ZONE в любое время. Абонемент действителен в течение одного месяца с даты его первого использования или посещения парка. Условия использования этого абонемента для посещения ADVENTURES’ ZONE:</h5>
        <ul class="pb-2">
          <li>в любой день и время в рабочее время парка развлечений;</li>
          <li>только один человек;</li>
          <li>неограниченное количество раз только в течение срока действия;</li>
          <li>абонемент должен быть использован в течение 3 лет с момента покупки.</li>
        </ul>
      </div>
    </div>
  </div>
</div> --}}
