@extends('layouts.app')

@section('content')

<main class="app-content">
    <div class="row">
      <div class="col-md-6 col-lg-3">
        <div class="widget-small primary coloured-icon"><i class="icon bi bi-check-circle fs-1"></i>
          <div class="info">
            <h4>Abertos</h4>
            <p><b>5</b></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-small danger coloured-icon"><i class="icon bi bi-x-circle fs-1"></i>
          <div class="info">
            <h4>Fechados</h4>
            <p><b>10</b></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-small warning coloured-icon"><i class="icon bi bi-chat-dots fs-1"></i>
          <div class="info">
            <h4>Respondidos</h4>
            <p><b>10</b></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3">
        <div class="widget-small info coloured-icon"><i class="icon bi bi-list-check fs-1"></i>
          <div class="info">
            <h4>Total</h4>
            <p><b>500</b></p>
          </div>
        </div>
      </div>
    </div>
  </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
