@extends('layouts.app')

@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>Cadastrar </h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>

            <form method="POST" action="{{ route('store.student') }}" class="form-horizontal form-label-left">

                {{ csrf_field() }}

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Idade</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="age" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexo</label>
                    <div class="col-md-2">
                        <select name="sexo" class="form-control col-md-15 col-xs-7">
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome do Pai</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name_dad" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome da Mãe</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="name_mom" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Rua
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="street" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Número
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="number" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Bairro
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="neighborhood" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cidade
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="city" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">CEP
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="cep" class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Descrição
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea id="description" name="description" class="form-control col-md-7 col-xs-12"></textarea>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-primary" type="button">Cancelar</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection