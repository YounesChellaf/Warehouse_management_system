@extends('layouts.home')

@section('content')

<script type="text/javascript" src="/js/moment.min.js"></script>

<script type="text/javascript">

  function createdFormatter(value, row, index) {

      return [ moment(row['created_at']).format('Do MMM YYYY, h:mm A') ];
      
  }

  function actionFormatter(value, row, index) {

      // <a href="/residant/show/'+row['id']+'" data-toggle="tooltip" title="View"> <i class="fa fa-eye"></i> </a> &nbsp;&nbsp;
      
      return [ '<a href="/maintenance/edit/'+row['id']+'" data-toggle="tooltip" title="Assign"> <i class="fa fa-user-plus"></i> </a> &nbsp;&nbsp;<a href="/worker/destroy/'+row['id']+'" data-toggle="tooltip" title="Archive"><i class="fa fa-file-archive-o"></i></a>' ];

  }

</script>

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
    <li class="active">Consulter Maintenances</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

    @if(Session::has('message'))
    <div class="row">'
    <div class="col-xs-12">
      <div class="alert @if(Session::get('messageType') == 1) alert-success @else alert-danger @endif">
        {{ Session::get('message') }}
      </div>
    </div>
    </div>
    @endif

      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
          <div class="box-header with-bresidant">
            <h3 class="box-title">Consulter Maintenances</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">

            <div class="row" style="width:99%;margin-left:5px">
                      <div class="col-xs-12">
                        <table id="table" class="table table-responsive" 
                               data-toggle="table"
                               data-url="{{ url('/maintenance/index') }}"
                               data-pagination="true"
                               data-side-pagination="server"
                               data-page-list="[10, 20, 30 , 40 , 50, 100, 200]"
                               data-search="true"
                               data-show-refresh="true"
                               data-show-toggle="true"
                               data-sort-name="id"
                               data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-field="id" data-align="center" data-sortable="true">ID</th>
                                <th data-field="resident_name" data-align="center" data-sortable="true">Nom Résident</th>
                                <th data-field="resident_contact" data-align="center" data-sortable="true">Contact Résident</th>
                                <th data-field="resident_block" data-align="center" data-sortable="true">Block</th>
                                <th data-field="resident_room" data-align="center" data-sortable="true">Chambre</th>
                                <th data-field="category" data-align="center" data-sortable="true">Catégorie</th>
                                <th data-field="description" data-align="center" data-sortable="true">Description</th>
                                <th data-field="worker_name" data-align="center" data-sortable="true">Nom Ouvrier</th>
                                <th data-field="worker_contact" data-align="center" data-sortable="true">Contact Ouvrier</th>
                                <th data-field="progress" data-align="center" data-sortable="true">Le progrès</th>
                                <th data-align="center" data-formatter="actionFormatter" data-events="actionEvents" width="200px"> Action </th>
                            </tr>
                            </thead>
                        </table>
                      </div>
            </div>

          </div> 
          </div>
          <!-- /.box-body -->
          </div>
        </div>  
      </div>  
    </section>
    <!-- /.content -->
@endsection
