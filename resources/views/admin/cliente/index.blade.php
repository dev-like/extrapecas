@extends('admin.main')

@section('page-title')
    Eventos Cadastrados
@endsection

@section('page-caminho')
    Eventos
@endsection

@section('styles')
    <!-- Sweet Alert css -->
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .mce-notification.mce-in {
            display: none;!important;
        }
    </style>
@endsection
@section('content')
    <div class="col-12">
        <div class="card-box">
            <a data-toggle="modal" data-target="#modal-default" style="margin-bottom: 15px"
               class="btn btn-info waves-effect waves-light pull-right">
                <i class="fa fa-plus m-r-5">
                </i> Adicionar</a>
            <table class="table table-striped" id="tabela">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto principal</th>
                    <th>Título</th>
                    <th>Subtítulo</th>
                    <th>Descrição</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
                </thead>
                <tbody id="banner">
                @forelse($clientes as $cliente)
                    <tr id={{$cliente->id}}>
                        <td>
                            {{ $cliente->titulo }}
                        </td>
                        <td width="15%">
                            <span class="hint--top" aria-label="Editar cliente">
                                <a href="{{ route('clientes.edit', $cliente->id) }}" style="border-radius: 50%"
                                   class="btn btn-warning waves-effect">
                                    <i class="fa fa-pencil m-r-5"></i>
                                </a>
                            </span>
                            <span class="hint--top" aria-label="Mostrar cliente">
                                <a href="{{ route('clientes.show', $cliente->id) }}" style="border-radius: 50%"
                                   class="btn btn-instagram waves-effect">
                                    <i class="fa fa-eye m-r-5"></i>
                                </a>
                            </span>
                            <span class="hint--top" aria-label="Deletar cliente">
                                <button type="button" onclick="goswet({{$cliente->id}})"
                                        style="border-radius: 50%"
                                        class="btn btn-danger waves-effect">
                                    <i class="fa fa-trash m-r-5"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">Nenhum Item cadastrado</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cadastrar clientes</h4>
                </div>
                <form enctype="multipart/form-data"
                      action="{{ route('boletos-nf.store') }}"
                      class="form"
                      method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome do Cliente:</label>
                                <input placeholder="Preencha este campo" name="nome" id="nome"
                                       class="form-control" autofocus required
                                       maxlength="250" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpfcnpj">CPF | CNPJ</label>
                                <input placeholder="Preencha este campo" name="cpfcnpj" id="cpfcnpj"
                                       class="form-control" autofocus
                                       maxlength="250" type="text">
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
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

@endsection

@section('scripts')
    <script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}" type="text/javascript"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script> -->





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

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  function goswet(id){
    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir cliente?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "{{ url('admin/clientes') }}/"+id,
          data: {
             'id': id,
             _token: $("[name='_token']").val(),
          },
          success: function(data){
            swal({
             title: "Evento deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
            function(){
             },
             function(){
               window.location = "{{ route('boletos-nf.index') }}";
             }
           );
          },
          error: function(xhr,status, data) {
            swal("Não foi possível deletar item");
          }

        });
      }
    );
  }
    </script>
@endsection
