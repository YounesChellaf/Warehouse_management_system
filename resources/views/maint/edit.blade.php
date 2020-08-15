@extends('layouts.home')

@section('content')

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
    <li class="active">Attribuer Ouvrier</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Attribuer Ouvrier</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/maintenance/update/'.$maintenance->id) }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">
                        

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Nom Ouvrier</label><br>
                            <select class="form-control change_supplier_name" name="ouvrier_id">
                            <option selected="" disabled="" value="">- Select - </option>
                              @foreach($ouvriers as $ouvrier)
                                  <option value="{{ $ouvrier->id }}">{{ $ouvrier->worker_name . ' : ' . $ouvrier->worker_spec}}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="deadline">Deadline:</label><br>
                            <input class="form-control pull-right" type="date" id="deadline" name="deadline">
                          </div>
                        </div>

                        

                      </div>


                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="reset" class="btn btn-danger pull-left">Réinitialiser</button>
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-edit"></i> Attribuer</button>
                    </div>
            </form>
          </div>
          <!-- /.box-body -->
          </div>
        </div>  
      </div>  
    </section>
    <script>
      var today = new Date();
      var dd = today.getDate();
      var mm = today.getMonth()+1; //January is 0!
      var yyyy = today.getFullYear();
      if(dd<10){
              dd='0'+dd
          } 
          if(mm<10){
              mm='0'+mm
          } 

      today = yyyy+'-'+mm+'-'+dd;
      document.getElementById("deadline").setAttribute("min", today);
    </script>
    <!-- /.content -->
@endsection
