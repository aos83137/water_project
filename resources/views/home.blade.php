@extends('layouts.app', [
    'namePage' => '月 달성률 차트',
    'class' => 'sidebar-mini',
    'activePage' => 'home',
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
                      <button type="button" onclick="deleteWaterData()" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="modal" data-target="#myModal">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                      </button>
                    </div>
                    </div>
                    <div class="card-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 35.6%;" aria-valuenow="35.6" aria-valuemin="0" aria-valuemax="100">1000 / 2805ml</div>
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
                <p>마신 물의 양을 입력합시다.</p>
                <div class="form-group">
                  <label for="waterData" class="col-form-label" id="waterData">얼마나 마셨나요?</label>
                  <input type="text" class="form-control" id="waterData">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="addDataWater()" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
  });
  function deleteWaterData(){
    $('#deleteWaterData').val('222');
  }
  function addDataWater(){
    waterData = $('#waterData').val();
    if(waterData!=''){
      $.ajax({        
        type:'DELETE',
        url:'/comments/'+id ,
        dataType:"html",
        contentType: false,
        processData: false,
      }).then(function(data){
          console.log(data);
      });
    }
  }
</script>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.yearChart();
    });
  </script>
@endpush

@