@extends('layouts.home')

@section('content')

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
    <li class="active">Ajouter Ouvrier</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Ajouter Ouvrier</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form class="form-horizontal create_customer" role="form" method="POST" action="{{ url('/worker/store') }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">

                      <div class="row">
                        
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nom de l'ouvrier</label><br>
                            <input type="text" class="form-control" name="worker_name" placeholder="Nom complet">
                          </div>
                        </div>

                        <div class="col-sm-3">
                          <div class="form-group">
                            <label>Identifiant</label>
                            <input type="text" class="form-control" name="worker_id">
                          </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                              <label>Spécialité</label>
                              <input type="text" class="form-control" name="worker_spec">
                            </div>
                          </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Contact Mobile</label><br>
                            <input type="text" name="worker_contact" class ='form-control' placeholder = '' required="required"/>
                          </div>
                        </div>

                      </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                      <button type="reset" class="btn btn-danger pull-left">Réinitialiser</button>
                      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Ajouter</button>
                    </div>
            </form>
          </div>
          <!-- /.box-body -->
          </div>
        </div>  
      </div>  
    </section>
    <!-- /.content -->
@endsection
