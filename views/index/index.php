<style type="text/css">
.taxonomy_search {
    margin-top: 3px;
}
</style>
<div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="http://teste.localhost/livedb/public/images/logo_light.png">
                </a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- <a class="navbar-brand" href="#">Brand</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</div>
<div class="container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #4682B4;">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Reino</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="reino" data-placeholder="Reino" data-id_taxonomia="1" data-id_pai="NULL" style="width: 50%;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Filo/Dominio</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="filo_dominio" data-placeholder="Filo/Dominio" data-id_taxonomia="2" data-id_pai="NULL" style="width: 50%; margin-left: 10px;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Classe</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="classe" data-placeholder="Classe" data-id_taxonomia="3" data-id_pai="NULL" style="width: 50%; margin-left: 20px;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Ordem</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="ordem" data-placeholder="Ordem" data-id_taxonomia="4" data-id_pai="NULL" style="width: 50%; margin-left: 30px;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Familia</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="familia" data-placeholder="Familia" data-id_taxonomia="5" data-id_pai="NULL" style="width: 50%; margin-left: 40px;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Genero</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="genero" data-placeholder="Genero" data-id_taxonomia="6" data-id_pai="NULL" style="width: 50%; margin-left: 50px;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Especia</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="especie" data-placeholder="Especie" data-id_taxonomia="7" data-id_pai="NULL" style="width: 50%; margin-left: 60px;">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12">
                        <div class="col-md-2 col-lg-2">
                            <label>Subespecia</label>
                        </div>
                        <div class="col-md-10 col-lg-10">
                            <input class="taxonomy_search" id="subespecie" data-placeholder="Subespecie" data-id_taxonomia="8" data-id_pai="NULL" style="width: 50%; margin-left: 70px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2" style="background: #8FBC8F;">
                <div class="form-group">
                    <label>Checkboxes</label>
                    <div class="checkbox">
                        <label>
                            <input value="" type="checkbox">Checkbox 1
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input value="" type="checkbox">Checkbox 2
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input value="" type="checkbox">Checkbox 3
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10" style="background: #EE82EE;">Lerolero 2</div>
        </div>
        <div class="row marginT10">
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Reino
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="reino" data-placeholder="Reino" data-id_taxonomia="1" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Filo/Dominio
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="filo_dominio" data-placeholder="Filo/Dominio" data-id_taxonomia="2" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Classe
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="classe" data-placeholder="Classe" data-id_taxonomia="3" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Ordem
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="ordem" data-placeholder="Ordem" data-id_taxonomia="4" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Família
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="familia" data-placeholder="Familia" data-id_taxonomia="5" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Género
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="genero" data-placeholder="Genero" data-id_taxonomia="6" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Espécie
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="especie" data-placeholder="Especie" data-id_taxonomia="7" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <div class="col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        Subespécie
                    </div>
                    <div class="panel-body">
                        <input class="taxonomy_search" id="subespecie" data-placeholder="Subespecie" data-id_taxonomia="8" data-id_pai="NULL" style="width: 100%;">
                    </div>
                    <!--  <div class="panel-footer">
            </div> -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
        </div>
        <script type="text/javascript">
        $('.taxonomy_search').select2({
            placeholder: $(this).data('placeholder'),
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca: {
                            nome: term,
                            id_taxonomia: $(this).data("id_taxonomia"),
                            id_pai: $(this).data('id_pai'),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {
                        results: data
                    };
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

        $(document).ready(function() {
            $('.taxonomy_search').on('change', function() {

                console.log($(this).val());
                var id_taxon = $(this).val();
                var id_taxonomia = $(this).data('id_taxonomia');

                $.each($('.taxonomy_search'), function(index, item) {

                    console.log($(this).data('id_taxonomia'));

                    if ($(this).data('id_taxonomia') > id_taxonomia) {
                        $(this).select2('val', '');
                    }
                });



                $.ajax({
                    type: 'POST',
                    url: "<?php echo URL; ?>index/buscar_hierarquia_ajax",
                    data: {
                        id_clado: $(this).val(),
                    },
                    dataType: 'json',
                    async: false,
                    success: function(dados) {
                        console.log(dados);

                        $.each(dados, function(index, item) {
                            $('#' + item['index']).select2(
                                'data', {
                                    id: item['id'],
                                    classificacao_nome: item['classificacao_nome']
                                }
                            );

                        });

                    }
                });
            });

        });
        </script>
        <?php include_once '../' . strtolower(APP_NAME) . '/views/' . $this->modulo['modulo'] . '/login.js.php'; ?>
