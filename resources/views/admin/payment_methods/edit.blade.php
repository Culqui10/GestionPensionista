{!! Form::model($paymeth, ['route'=>['admin.payment_methods.update', $paymeth],'method' => 'put']) !!}
@include('admin.payment_methods.forms.form')
<button type="submit" class="btn btn-success"><i class="fas fa-save"> Actualizar</i></button>
<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-window-close"></i> Cancelar</button>
{!! Form::close() !!}