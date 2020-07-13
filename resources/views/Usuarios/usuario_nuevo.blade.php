@extends('layout')

@section('content')

<div class="breadcomb-area" >
    <div class="container" >
        <div class="row" >
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-form"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Registro de usuario</h2>
                                    <p>Ingrese la información del usuario</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Form Element area Start-->
<div class="form-element-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-element-list">
                    <div class="basic-tb-hd">
                        <h2>Usuario</h2>
                        <p>Complete los campos del formulario</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-example-wrap">
                                
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label><strong>Nombre</strong></label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Nombre completo del usuario">
                                        </div>
                                    </div>
                                </div>
                              
                                <div class="form-example-int mg-t-15">
                                    <div class="form-group">
                                        <label><strong>Correo electrónico</strong></label>
                                        <div class="nk-int-st">
                                            <input type="text" class="form-control input-sm" placeholder="Correo electrónico del usuario">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-example-int mg-t-15">
                                    <button class="btn btn-success notika-btn-success">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                
                 
            </div>
        </div>
   
    
    </div>
</div>
<br><br><br><br><br><br>

@endsection