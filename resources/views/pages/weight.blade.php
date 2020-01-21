@extends('layouts.app', [
    'namePage' => '체중 보고서',
    'class' => 'sidebar-mini',
    'activePage' => 'weight',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
          <div class="col-md-9">
              <div class="card card-chart">
                <div class="card-header">
                  <h5 class="card-category">{{ auth()->user()->name }}님</h5>
                  <h4 class="card-title">1월 체중 그래프.</h4>
                  <div class="dropdown">
                    <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                      <i class="now-ui-icons ui-1_simple-add"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item text-danger" href="#">Remove Data</a>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <canvas id="weightChart"></canvas>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="now-ui-icons arrows-1_refresh-69"></i> 마지막으로 확인한 날짜: 오늘, 오전 9:22
                  </div>
                </div>
          </div>
        </div>
          <div class="col-md-3">
            <div class="card card-user">
              <div class="image">
                <img src="{{asset('assets')}}/img/bg5.jpg" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{asset('assets')}}/img/default-avatar.png" alt="...">
                    <h5 class="title">{{ auth()->user()->name }}</h5>
                  </a>
                  <p>현재 몸무게 : 85</p>
                  <p>최고치 : 88</p>
                  <p>최저치 : 80</p>
                  <p>평균 : 85</p>
                </div>
              </div>
              <hr>
              <div class="button-container">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-facebook-square"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                  <i class="fab fa-google-plus-square"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        
      </div>
@endsection
@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDocChart();
    });
  </script>
@endpush