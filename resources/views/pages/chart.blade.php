@extends('layouts.app', [
    'namePage' => '月 달성률 차트',
    'class' => 'sidebar-mini',
    'activePage' => 'chart',
])
@section('content')
<div class="panel-header panel-header-lg">
    <canvas id="bigDashboardMonthChart"></canvas>
  </div>
    <div class="content">
        <div class="row">
          <div class="col-md-9">
              <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">{{ auth()->user()->name }}님</h5>
                    <h4 class="card-title">하루 섭취량.</h4>
                    <div class="dropdown">
                      <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="modal" data-target="#myModal">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                      </button>
                    </div>
                    </div>
                    <div class="card-body">
                        <div class="chart-area">
                        <canvas id="dayChart"></canvas>
                        </div>
                    </div>
              </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-chart">
                  <div class="card-header">
                      <h5 class="card-category">{{ auth()->user()->name }}님</h5>
                      <h4 class="card-title">年 달성률 차트.</h4>
                      <div class="dropdown">
                        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="modal" data-target="#myModal">
                          <i class="now-ui-icons ui-1_simple-add"></i>
                        </button>
                      </div>
                      </div>
                      <div class="card-body">
                          <div class="chart-area">
                          <canvas id="yearChart"></canvas>
                          </div>
                      </div>
                </div>
            </div>
          </div>
    </div>

    {{-- modal --}}
    <div class="modal fade" id="myModal" role="dialog"> <!-- 사용자 지정 부분① : id명 -->
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.yearChart();
    });
  </script>
@endpush