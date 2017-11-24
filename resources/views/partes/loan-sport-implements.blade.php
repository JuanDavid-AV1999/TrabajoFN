<h1 style="text-align: center">Préstamo de Implementos Deportivos</h1>
<br>
<br>
<form class="form-vertical">


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <legend style="text-align: center">Consultar Reserva</legend>
                                <form role="form" class="form-inline">
                                    <div class="col-md-4">
                                        <h4 for="exampleInputPassword1" style="text-align: center" ><b>Documento</b>
                                        </h4>
                                        <input type="text" class="form-control" id="exampleInputEmail1" />
                                    </div>
                                    <div class="col-md-4" id="fdr">

                                        <h4 for="exampleInputPassword1" style="text-align: center" ><b>Fecha reserva</b>
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
<br>
<br>

<table id="mytable" class="table table-bordred table-striped">

    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th>Codigo Reserva</th>
    <th>Documento</th>
    <th>Implementos a Prestar</th>
    <th>Cambiar Estado</th>
    <th>Asociar Sanción</th>
    <th>Cancelar</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Asociar Sanción"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-exclamation-sign"></span></button></p></td>
        <td><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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