@extends('admin.main')

@section('page-title')
    Pedidos de {{ $cliente->nome }}
@endsection

@section('page-caminho')
    Clientes
@endsection

@section('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Sweet Alert css -->
    <link href="{{ asset('template/plugins/sweet-alert/sweetalert2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('template/css/dropzone.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('content')
<div class="col-12">
  <div class="container row" style="justify-content:flex-end">
    <a href="#" data-toggle="modal" data-target="#modal-default-insert" style="margin-bottom: 15px"
       class="btn btn-info waves-effect waves-light pull-right">
        <i class="fa fa-plus m-r-5">
        </i> Adicionar</a></div>

  <div class="card-box">
      <div id="accordion" class="table-segundavia tableVias" >
				@forelse($cliente->pedido as $pedido)

        <div class="card">
					<div class="card-header d-flex justify-content-between align-items-center" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							{{$pedido->titulo}}
							</button>

						</h5>

            <div>
							<a href="../../uploads/NF/{{$pedido->file}}" class="my-1">
								<i class="fas fa-receipt" style="font-size:20px;"></i>
								<span>Baixar Nota Fiscal</span>
							</a>
						</div>
            <div>


              <td width="15%">
                <span class="hint--top" aria-label="Adicionar Boleto">
                    <a href="#" id="{{$pedido->id}}" data-toggle="modal" data-target="#modal-default-boleto" style="border-radius: 50%"
                       class="btn btn-instagram waves-effect insert-boleto">
                        <i class="fa fa-plus m-r-5"></i>
                    </a>
                </span>
                <span class="hint--top" aria-label="Editar Pedido">
                    <a href="{{ route('pedido.edit', $pedido->id) }}"  style="border-radius: 50%"
                       class="btn btn-warning waves-effect">
                        <i class="fa fa-pencil m-r-5"></i>
                    </a>
                </span>
                  <span class="hint--top" aria-label="Deletar pedido">
                      <button type="button" onclick="goswet({{$cliente->id}},{{$pedido->id}},{{$pedido->titulo}})"
                              style="border-radius: 50%"
                              class="btn btn-danger waves-effect">
                          <i class="fa fa-trash m-r-5"></i>
                      </button>
                  </span>
              </td>
						</div>


					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
					<div class="card-body">
						<table class="table table-hover">
							<thead>
								<tr>
								  <th scope="col" width="50%">Vencimento</th>
								  <th scope="col" >Baixar Boleto</th>
                  <th scope="col" >Ações</th>
                  <th scope="col" ></th>
								</tr>
							</thead>
							<tbody>
                @foreach($pedido->boleto as $boleto)

                  <tr>
                      <td width="50%">
                        {{date('d/m/Y',strtotime($boleto->vencimento))}}
                      </td>
                      <td width="30%">
                        <span class="hint--top" aria-label="Mostrar Boletos">

                            <a href="../../uploads/boleto/{{$boleto->file}}" style="border-radius: 50%; background-color:#F40F02; color:#fff" class="btn waves-effect">
                                <i class="fa fa-file-pdf-o m-r-5"></i>
                            </a>
                        </span>
                      </td>
                      <td width="20%">


                        <span class="hint--top" aria-label="Editar cliente">

                            <a href="{{ route('boleto.edit', $boleto->id) }}" style="border-radius: 50%"
                               class="btn btn-warning waves-effect">
                                <i class="fa fa-pencil m-r-5"></i>
                            </a>
                        </span>
                          <span class="hint--top" aria-label="Deletar boleto">
                              <button type="button" onclick="goswet_boleto({{$cliente->id}},{{$boleto->id}})"
                                      style="border-radius: 50%"
                                      class="btn btn-danger waves-effect">
                                  <i class="fa fa-trash m-r-5"></i>
                              </button>
                          </span>
                      </td>
                  </tr>

                @endforeach
							</tbody>
						</table>
					</div>
					</div>
				</div>
        @empty
          <tr>
              <td colspan="4" class="text-center">Nenhum Item cadastrado. <a href="#" data-toggle="modal" data-target="#modal-default-insert">Clique aqui para cadastrar o primeiro pedido</a></td>
          </tr>
        @endforelse
			</div>


</div>
  @forelse($cliente->pedido as $pedido)
  <div class="modal fade" id="modal-default-boleto">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title">Cadastra Boleto</h4>
              </div>
              <form enctype="multipart/form-data"
                    action="{{ route('boleto.store')}}"
                    class="form"
                    method="post">
                  @csrf
                  <div class="modal-body">
                      <div class="row">
                          <div class="form-group col-md-12">
                            <tr>
                              <tr>
                                  <div id="boletos" class="row">
                                    <div class="form-group col-md-4">
                                      <label for="nome">Vencimento do Boleto</label>
                                      <input name="vencimento" id="vencimento"
                                             class="form-control" autofocus required
                                             maxlength="250" type="date">
                                    </div>
                                    <div class="form-group col-md-8">
                                      <label for="nome">Arquivo</label>

                                      <input type="file" name="file" id="file_boleto" class="filestyle" accept="application/pdf"
                                             data-buttonText="Carregar" data-placeholder="Anexe aqui o boleto de cobrança"
                                             data-btnClass="btn-light">
                                    </div>

                                      <input type="hidden" value="{{$pedido->id}}" id="pedido_id" name="pedido_id">
                                      <input type="hidden" value="0" id="total_chq" name="total_chq">

                                </div>
                              </tr>
                        </tr>
                            </div>

                  </div>
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
      <!-- /.modal-dialog -->
  </div>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cadastra Pedido</h4>
                </div>
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
                                           data-btnClass="btn-light" required>
                                </div>
                            </div>




                        <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">

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
        <!-- /.modal-dialog -->
      </div>
    </div>

    @empty
    @endforelse

    </div>
  </div>
</div>



    <div class="modal fade" id="modal-default-insert">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Cadastra Pedido</h4>
                </div>
                <form enctype="multipart/form-data"
                      action="{{ route('pedido.store')}}"
                      class="form"
                      method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="nome">Número do Pedido ou Nota Fiscal:</label>
                                <input  name="titulo" id="titulo"
                                       class="form-control" autofocus required
                                       maxlength="250" type="text">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="cpfcnpj">Anexar Nota Fiscal</label>
                                <div class="form-group col-md-12">
                                    <input type="file" name="file" id="file_nf" class="filestyle" accept="application/pdf"
                                           data-buttonText="Carregar" data-placeholder="Insira a NF do pedido aqui"
                                           data-btnClass="btn-light" required>
                                </div>
                            </div>

                        </div>

                          <input type="hidden" name="cliente_id" value="{{ $cliente->id }}">
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
        <!-- /.modal-dialog -->
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

  $(".insert-boleto").click(function() {
    var teste = $("#pedido_id").attr('value', $(this).attr('id'));
    console.log(teste.val());
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
          url: "{{ url('admin/cliente/pedido') }}/"+id,
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
               window.location = "{{ url('admin/cliente/') }}/"+cliente;
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

  function goswet_boleto(cliente,id){
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
          url: "{{ url('admin/cliente/pedido/boleto') }}/"+id,
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
               window.location = "{{ url('admin/cliente/') }}/"+cliente;
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
