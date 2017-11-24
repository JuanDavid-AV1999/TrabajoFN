<h1 style="text-align: center">Control Incripciones a Cursos</h1>
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
                                <legend style="text-align: center">Consultar Reserva</legend>
                                <br>
                                <form role="form" class="form-inline">

                                    <div class="form-group">
                                        <h4 class="col-md-4" for="fn" style="text-align: right"><b>Curso</b></h4>
                                        <div class="col-md-4">
                                            <input id="fn" name="fn" type="text" class="form-control input-md" required="">

                                        </div>
                                        <button id="submit" name="search" type="search" class="btn btn-primary">Consultar</button>
                                    </div>
                                    <br>
                                    <div class="col-md-4">
                                        <h4 for="exampleInputPassword1" style="text-align: center" ><b>Nombre</b>
                                        </h4>
                                        <input type="text" class="form-control" id="exampleInputEmail1" />
                                    </div>
                                    <div class="col-md-4" id="fdr">

                                        <h4 for="exampleInputPassword1" style="text-align: center" ><b>Documento</b>
                                        </h4>
                                        <input type="text" class="form-control" id="exampleInputPassword1" />
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
    <h2 style="text-align: center">Resultados</h2>
    <br>
    <thead>

    <th><input type="checkbox" id="checkall" /></th>
    <th style="text-align: center">Curso</th>
    <th style="text-align: center">Nombre</th>
    <th style="text-align: center">Documento</th>
    <th style="text-align: center">Cambiar Estado</th>
    <th style="text-align: center">Cancelar</th>
    </thead>
    <tbody>

    <tr>
        <td><input type="checkbox" class="checkthis" /></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><input></td>
        <td style="text-align: center"><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-info btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
        <td style="text-align: center"><p data-placement="top" data-toggle="tooltip" title="Cancelar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
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