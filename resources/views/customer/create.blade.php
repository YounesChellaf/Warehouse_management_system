@extends('layouts.home')

@section('content')

<section class="content-header">
  <h1>
    <small></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
    <li class="active">Ajouter Client</li>
  </ol>
</section>

<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
          <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Ajouter Client</h3>

            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
            <form class="form-horizontal create_customer" role="form" method="POST" action="{{ url('/customer/store') }}">
      
                    {{ csrf_field() }}

                    <div class="box-body">

                      <div class="row">
                        
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Nom du Client</label><br>
                            <input type="text" class="form-control" name="customer_name" placeholder="Nom complet">
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="customer_email" placeholder="abc@xyz.com">
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Adresse</label><br>
                            <textarea class="form-control" placeholder="" name="customer_address"></textarea>
                          </div>
                        </div>

                      </div>

                      <div class="row">
                        
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Contact Mobile</label><br>
                            <input type="text" name="customer_contact1" class ='form-control' placeholder = '' required="required" maxlength="11" minlength="10"/>
                          </div>
                        </div>

                        <div class="col-sm-6">
                          <div class="form-group">
                            <label>Alternative Mobile</label><br>
                            <input type="text" name="customer_contact2" class ='form-control' placeholder = '' maxlength="11" minlength="10"/>
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
