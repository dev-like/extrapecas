@extends('admin.main')

@section('page-title')
 Pedido de {{$pedido->nome}}
@endsection

@section('page-caminho')
    Boleto
@endsection

@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Sweet Alert css -->
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/css/dropzone.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="col-12">
    <div class="card-box">
      <div class="" id="modal-default">

                  <form enctype="multipart/form-data"
                        action="{{ route('pedido.update', ['pedido' => $pedido->id])}}"
                        class="form"
                        method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                      <div class="modal-body">
                          <div class="row">
                              <div class="form-group col-md-6">
                                  <label for="nome">Número do Pedido ou Nota Fiscal:</label>
                                  <input value="{{$pedido->titulo}}" name="titulo" id="titulo"
                                         class="form-control" autofocus required
                                         maxlength="250" type="text">
                              </div>
                              <div class="form-group col-md-6">
                                  <label for="cpfcnpj">Anexar Nota Fiscal</label>
                                  <div class="form-group col-md-12">
                                      <input type="file" name="file" id="file" class="filestyle" accept="application/pdf"
                                             data-buttonText="Carregar" value="{{$pedido->file}}" data-placeholder="{{$pedido->file}}"
                                             data-btnClass="btn-light">
                                  </div>
                              </div>




                          <input type="hidden" name="cliente_id" value="{{ $pedido->cliente_id }}">

                      </div>
                      <div class="modal-footer">
                          <div class="row" style="margin-top: 20px">
                              <div class="col-12">
                                  <div class="text-center">
                                      <button class="btn btn-success" type="submit" value="Salvar">
                                          <i class="fa fa-save m-r-5"></i> Salvar
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
    </div>
</div>




@endsection

@section('scripts')
    <script src="{{ asset('template/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"
            type="text/javascript"></script>
    <script src="{{ asset('template/plugins/switchery/switchery.min.js') }}" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ asset('template/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>


    <script src="{{ asset('template/js/dropzone.js') }}"></script>

    <script type="text/javascript">
  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  function goswet(cliente,id,nome){
    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir o pedido "+nome+"?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "{{ url('admin/clientes/pedido') }}/"+id,
          data: {
             'id': id,
             _token: $("[name='_token']").val(),
          },
          success: function(data){
            swal({
             title: "Pedido deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
            function(){
             },
             function(){
               back();
               window.location = "{{ url('admin/clientes/') }}/"+cliente;
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

  function goswet_boleto(id,cliente){
    swal.setDefaults({
      reverseButtons: true
    })
    swal({
        title: "Deseja excluir o boleto?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Deletar"
    }).then(
      function(){
        $.ajax({
          type: "DELETE",
          url: "{{ url('admin/boleto') }}/"+id,
          data: {
             'id': id,
             _token: $("[name='_token']").val(),
          },
          success: function(data){
            swal({
             title: "Boleto deletado!",
             type: "success",
             timer: 2000,
             showConfirmButton: false
           }).then(
            function(){
             },
             function(){
               // back();
               window.location = "{{ url('admin/clientes/') }}/"+cliente;
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
