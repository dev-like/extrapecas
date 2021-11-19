@extends('admin.main')

@section('page-title')
 Boleto de {{$boleto->nome}}
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
                    <div class="form-group row">
                      <div class="col-12">
                    <h4 class="modal-title">Cadastro de Boletos</h4>
                  </div>
                  </div>

                <form enctype="multipart/form-data" action="{{ route('boleto.update',['boleto' => $boleto->id])}}"

                      class="form"
                      method="post">
                      {{ csrf_field() }}
                      {{ method_field('PUT') }}
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-12">
                              <tr id="{{$boleto->id}}">
                                <tr>
                                    <div id="boletos" class="row">
                                      <div class="form-group col-md-4">
                                        <label for="nome">Vencimento do Boleto</label>
                                        <input value="{{$boleto->vencimento}}" name="vencimento" id="vencimento"
                                               class="form-control" autofocus required
                                               maxlength="250" type="date">
                                      </div>
                                      <div class="form-group col-md-8">
                                        <label for="nome">Arquivo</label>

                                        <input type="file" name="file" id="file" class="filestyle" accept="application/pdf"
                                               data-buttonText="Carregar" data-placeholder="{!!$boleto->file!!}" value="{!!$boleto->file!!}"
                                               data-btnClass="btn-light">
                                      </div>

                                        <input type="hidden" value="{{$boleto->pedido_id}}" id="pedido_id" name="pedido_id">
                                        <input type="hidden" value="{{$boleto->cliente_id}}" id="cliente_id" name="cliente_id">
                                        <input type="hidden" value="0" id="total_chq" name="total_chq">

                                  </div>
                                </tr>
                          </tr>
                              </div>

                    </div>
                  </div>
                  <div class="row" style="margin-top: 20px">
                    <div class="col-12">
                      <div class="text-center">
                        <button class="btn btn-success" type="submit" value="Salvar">
                          <i class="fa fa-save m-r-5"></i> Salvar
                        </button>
                        <button class="btn btn-danger">
                          <i class="fa fa-window-close m-r-5"></i>
                          Cancelar
                        </button>
                      </div>
                    </div>
                  </div>

                </form>




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
    // function add(){
    //   var new_chq_no = parseInt($('#total_chq').val()) + 1;
    //   var new_input='<div class="form-group col-md-4"><label for="nome">Vencimento do Boleto</label><input value="" name="vencimento[]" id="vencimento-'+new_chq_no+'" class="form-control" autofocus required maxlength="250" type="date"> </div>';
    //   var new_input=new_input+'<div class="form-group col-md-7"><label for="nome">Arquivo</label><input type="file" name="file[]" id="file-'+new_chq_no+'" class="filestyle" accept="application/pdf"data-buttonText="Carregar" data-placeholder="Insira o boleto de cobrança aqui"data-btnClass="btn-light" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" required> <div class="bootstrap-filestyle input-group"><input type="text" class="form-control file-placeholder-'+new_chq_no+'" placeholder="Insira o boleto de cobrança aqui" disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="file-'+new_chq_no+'" style="margin-bottom: 0;" class="btn btn-light "><span class="buttonText">Escolher arquivo</span></label></span></div></div>';
    //   // new_chq_no = new_chq_no+1;
    //
    //   $('#boletos').append(new_input);
    //   $('#total_chq').val(new_chq_no);
    //
    //     $('#file-'+new_chq_no).change(function(e) {
    //       var filename = $(this).val().split('\\').pop();
    //       $('.file-placeholder-'+new_chq_no).attr("placeholder", filename);
    //
    //
    //     });
    //
    // }


    </script>
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
