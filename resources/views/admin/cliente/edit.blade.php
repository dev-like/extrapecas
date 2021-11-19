@extends('admin.main')

@section('page-title')
    Editar cliente {{ $cliente->id }}
@endsection

@section('page-caminho')
    Cliente
@endsection

@section('styles')
    <!-- Sweet Alert css -->
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .mce-notification.mce-in {
            display: none;!important;
        }
    </style>
@endsection
@section('content')
    <div class="col-12">
        <div class="card-box">
            <form enctype="multipart/form-data"
                  action="{{ route('cliente.update',['cliente' => $cliente->id])}}"
                  class="form"
                  method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="modal-body">
                    <div class="row">

                                      <div class="modal-body">
                                          <div class="row">
                                              <div class="form-group col-md-6">
                                                  <label for="nome">Nome do Cliente:</label>
                                                  <input placeholder="{{$cliente->nome}}" value="{{$cliente->nome}}" name="nome" id="nome"
                                                         class="form-control" autofocus required
                                                         maxlength="250" type="text">
                                              </div>
                                              <div class="form-group col-md-6">
                                                  <label for="cpfcnpj">CPF | CNPJ</label>
                                                  <input placeholder="{{$cliente->cpfcnpj}}" value="{{$cliente->cpfcnpj}}" name="cpfcnpj" id="cpfcnpj"
                                                         class="form-control" autofocus
                                                         maxlength="250" type="text">
                                              </div>

                                          </div>
                                      </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="row" style="margin-top: 20px">
                        <div class="col-12">
                            <div class="text-center">
                                <button class="btn btn-success" type="submit" value="Salvar">
                                    <i class="fa fa-save m-r-5"></i>
                                    Salvar
                                </button>
                                <button class="btn btn-danger" data-dismiss="modal">
                                    <i class="fa fa-window-close m-r-5"></i>
                                    Cancelar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>



@endsection

@section('scripts')
    <script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>

    <script type="text/javascript">
      function cnpj(v){
        v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
        v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
        v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
        v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
        return v
      }

      function cpf(v){
        v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
        v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                                 //de novo (para o segundo bloco de números)
        v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
        return v
      }
      $(function() {
      $("#cpfcnpj").focusout(function(){
      try {
          $("#cpfcnpj").unmask();
      } catch (e) {}

      var tamanho = $("#cpfcnpj").val().length;
      var valor = $("#cpfcnpj").val();
      if(tamanho <= 11){
          $("#cpfcnpj").val(cpf(valor));
      } else {
          $("#cpfcnpj").val(cnpj(valor));
      }
      });
      });
    </script>
@endsection
