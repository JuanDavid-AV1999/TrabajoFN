<h1 style="text-align: center">Asistencia a Cursos</h1>
<br>
<br>
<form class="form-horizontal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">

                                <form role="form" class="form-inline">
                                    <div class="col-md-4">
                                        <h4 for="exampleInputPassword1" style="text-align: center" ><b>
                                                Documento</b>
                                        </h4>
                                        <input type="text" class="form-control" id="exampleInputEmail1" />
                                    </div>
                                    <div class="col-md-4" id="fdr">

                                        <h4 for="exampleInputPassword1" style="text-align: center" ><b>
                                                Fecha reserva</b>
                                        </h4>
                                        <input type="date" class="form-control" id="exampleInputPassword1" />
                                    </div>
                                    <br>
                                    <!-- Button -->
                                    <div class="col-md-8" id="fds">
                                        <label class="col-md-4 control-label" for="submit"></label>
                                        <div class="col-md-4">
                                            <button id="fgt" name="search" type="search" class="btn btn-primary">Consultar</button>
                                            <button id="fgt"  name="Listar Todo" type="search" class="btn btn-default">Listar Todo</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>

<table id="mytable" class="table table-bordred table-striped">
    <h2 style="text-align: center">Lista Asistencia</h2>
    <br>
    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th style="text-align: center">Curso</th>
    <th style="text-align: center">Nombre</th>
    <th style="text-align: center">Documento</th>
    <th style="text-align: center">Asistió</th>
    <th style="text-align: center">No Asistió</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-info btn-xs" data-title="OK" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-ok"></span></button></p></td>
        <td style="text-align: center"><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Remove" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-remove"></span></button></p></td>
    </tr>

    </tbody>
</table>
<script>
    $(document).ready(function(){
        $("#mytable #checkall").click(function () {
            if ($("#mytable #checkall").is(':checked')) {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", true);
                });

            } else {
                $("#mytable input[type=checkbox]").each(function () {
                    $(this).prop("checked", false);
                });
            }
        });

        $("[data-toggle=tooltip]").tooltip();
    });
</script>