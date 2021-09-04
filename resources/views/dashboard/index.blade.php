@extends('layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="justify-content-left col-12">
        <form method="POST"  enctype="multipart/form-data" class="row g-3" novalidate>
            <div class="col-2">
                <label for="residencia"><small>Elige una residencia para listar:</small></label>
            </div>

            <div class="col-4">
                <select name="residencia"
                        class="form-control @error('residencia') is-invalid  @enderror"
                        id="residencia">

                        <option value="">-- Seleccionar --</option>
                        @foreach($residencias as $residencia)
                            <option value="{{ $residencia->id }}"
                                {{ old('residencia') == $residencia->id ? 'selected' : '' }}
                                >{{ $residencia->nombre }}</option>
                        @endforeach

                </select>

                @error('residencia')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="">
                <input type="submit" class=" form-control btn btn-primary " value="Ver estado" />
            </div>

        </form>
    </div>
    <div class="justify-content-left col-12">

        <h3>Servicio del mes: [Septiembre] </h3>
        <h4><small>Tipo de Ctas : [Cuentas por Pagar] </small></h4>

        <div class="col-12">
            <table class="table table-hover table-scrite">
                <thead>
                    <tr>
                        <td width="10px">Identificador</td>
                        <td>Nombre</td>
                        <td>Telefono para consultas</td>
                        <td>Fecha de pago Servicio</td>
                        <td>Descripcion del Servicio</td>
                        <td>Monto del mes</td>
                        <td>Gestionar cuenta</td>
                        <td>Ver detalle de pagos</td>
                    </tr>
                </thead>
                <tbody class="justify-content-center">
                    <tr>
                        <td width="10px">16</td>
                        <td>Enel</td>
                        <td>(56) 223175869</td>
                        <td>20 de cada mes</td>
                        <td>Servicio de electricidad</td>
                        <td>$ 14.990 </td>
                        <td><a href="#" class="btn btn-dark b-block w-100 mb-2">Gestionar</a></td>
                        <td><a href="#" class="btn btn-success b-block w-100 mb-2">Ir</a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7" class="">Total de mes :</td>
                        <td>$ 200.000</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>



@endsection
