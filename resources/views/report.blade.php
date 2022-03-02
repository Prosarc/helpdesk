@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="">
                        <div class="form-group">
                            <label><input type="checkbox" id="cbox1" value="sispro" class="form-control">SisPro</label>
                            <label><input type="checkbox" id="cbox2" value="internet" class="form-control">Internet</label>
                            <label><input type="checkbox" id="cbox3" value="office" class="form-control">Office</label>
                            <label><input type="checkbox" id="cbox4" value="impresoras" class="form-control">Impresoras</label>
                            <label><input type="checkbox" id="cbox5" value="correo" class="form-control">Correo</label>
                            <label><input type="checkbox" id="cbox6" value="compras" class="form-control">Compras</label>
                            <label><input type="checkbox" id="cbox6" value="equipo" class="form-control">Equipo</label>
                        </div>
                        <div class="form-group">
                            <label for="priority">Prioridad:</label>
                            <select name="priority" class="form-control">
                                <option value="B">Baja</option>
                                <option value="M">Media</option>
                                <option value="A">Alta</option>  
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Titulo: </label>
                            <input type="text" value="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
