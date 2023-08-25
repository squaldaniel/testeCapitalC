@extends('bootstrap.model')
@section('headscrits')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

@endsection
@section('head')
    @include('bootstrap.online.onheader')
@endsection
@section("body")

<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center justify-content-center">
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-normal">Mini Dashboard</h4>
        </div>
        <div class="card-body">
            <!-- charts -->
            <div id="piechart" style="width: 400px; height: 300px;"></div>
            <!-- charts -->
          <button type="button" class="w-100 btn btn-lg btn-outline-primary"><span class="fa fa-user"> </span>+Novo</button>
        </div>
      </div>


    <div class="dropdown-menu position-static d-flex flex-column flex-lg-row align-items-stretch justify-content-start p-3 rounded-3 shadow-lg" data-bs-theme="dark">
      <nav class="col-lg-8">
        <ul class="list-unstyled d-flex flex-column gap-2">
          <li>
            <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
              <svg class="bi" width="24" height="24"><use xlink:href="#image-fill"></use></svg>
              <div>
                <strong class="d-block">Main product</strong>
                <small>Take a tour through the product</small>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
              <svg class="bi" width="24" height="24"><use xlink:href="#music-note-beamed"></use></svg>
              <div>
                <strong class="d-block">Another product</strong>
                <small>Explore this other product we offer</small>
              </div>
            </a>
          </li>
          <li>
            <a href="#" class="btn btn-hover-light rounded-2 d-flex align-items-start gap-2 py-2 px-3 lh-sm text-start">
              <svg class="bi" width="24" height="24"><use xlink:href="#question-circle"></use></svg>
              <div>
                <strong class="d-block">Support</strong>
                <small>Get help from our support crew</small>
              </div>
            </a>
          </li>
        </ul>
      </nav>
      <div class="d-none d-lg-block vr mx-4 opacity-10">&nbsp;</div>
      <hr class="d-lg-none">
      <div class="col-lg-auto pe-3">
        <nav>
          <ul class="d-flex flex-column gap-2 list-unstyled small">
            <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Documentation</a></li>
            <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Use cases</a></li>
            <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">API status</a></li>
            <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Partners</a></li>
            <li><a href="#" class="link-offset-2 link-underline link-underline-opacity-25 link-underline-opacity-75-hover">Resources</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
@endsection
@section("footer")
    @include('bootstrap.footer')
@endsection
@section('footerscripts')
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['gender', 'quant'],
        ['Homens', {{$man}}],
        ['Mulheres', {{$woman}}]
      ]);
      var options = {
        title: 'Gênero Clientes'
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  </script>
@endsection

