<nav class="nav fixed-top">
  <div class="navbar-inner">
    <div class="logo-container">
      <img src="{{ asset('img/lambo-logo.png') }}">
    </div>
    <div class="right-nav">
      <div class="request">
        <button class="btn-brand" href="#form">REQUEST INFO</button>
      </div>
      <div class="lang-container">
        <!-- Button trigger modal -->
        <button type="button" class="btn-lang" data-toggle="modal" data-target="#lang-modal">EN</button>

        <!-- Modal -->
        <div class="modal fade" id="lang-modal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                <span class="icon-close">&#10005;</span>
              </button>
              <h5 class="modal-title text-center"><span class="light">CHOOSE</span> <strong>YOUR LANGUAGE</strong></h5>
              <div class="full"><div></div></div>
              <div class="modal-body row  text-center">
                <div class="col-6"><a href="#">Russian</a></div>
                <div class="col-6"><a href="#">German</a></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</nav>
