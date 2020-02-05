<section id="pricelist" class="section-cards">
  <div class="section-title-bar">
    <h1 class="text-white text-center">cenas</h1>
  </div>
  <div class="pricelist-block d-flex">
    <div class="left">
      <div id="xs" class="section-title-bar pricelist-title-bar">
        <h1 class="text-white text-center">XS zona</h1>
      </div> 

      <div class="container-fluid">
        <div class="row mx-auto justify-content-end">
          <a class="col-md-12 xs-zone pricelist-card" href="#" data-toggle="modal" data-target="#xsOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
          </a>

        </div>
      </div>
    </div>

    <div class="right">
      <div id="azone" class="section-title-bar pricelist-title-bar">
        <h1 class="text-white text-center">A zona</h1>
      </div> 

      <div class="container-fluid">
        <div class="row mx-auto justify-content-start">
          <a class="col-md-12 a-zone pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
          </a>

          <a class="col-md-12 a-zone pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
          </a>
          
          <a class="col-md-12 a-zone pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div id="second-row" class="pricelist-block d-flex">
    <div class="left">
      <div id="party" class="section-title-bar pricelist-title-bar">
        <h1 class="text-white text-center">ballītes</h1>
      </div> 

      <div class="container-fluid">
        <div class="row mx-auto justify-content-end">
          
          <a class="col-md-12 party pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">ballīšu telpa</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
            <h6 class="text-center text-white">2h īre</h6>
          </a>

        </div>
      </div>
    </div>

    <div class="right">
      <div id="membership" class="section-title-bar pricelist-title-bar">
        <h1 class="text-white text-center">abonementi</h1>
      </div> 

      <div class="container-fluid">
        <div class="row mx-auto justify-content-start">
          <a class="col-md-12 membership pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
            <h6 class="text-center text-white">2h apmeklējums</h6>
          </a>

          <a class="col-md-12 membership pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
            <h6 class="text-center text-white">2h apmeklējums</h6>
          </a>
          
          <a class="col-md-12 membership pricelist-card" href="#" data-toggle="modal" data-target="#aOneHour">
            <h4 class="pricelist-title text-center text-white">1 stunda</h4>
            <h3 class="pricelist-price text-center text-white"><span class="price-number">5</span> <i class="fas fa-euro-sign"></i></h3>
            <div class="pricelist-info">
              <i class="fas fa-info text-black"></i>
            </div>
            <h6 class="text-center text-white">2h apmeklējums</h6>
          </a>
        </div>
      </div>
    </div>
  </div>
  @include('inc.pricelist-modal')

  @include('inc.buy-reserve-btn')
</section>