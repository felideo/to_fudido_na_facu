

 <div class="row marginT10">
    <div class="col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                Reino
            </div>
            <div class="panel-body">
                <input id="reino" data-id_taxonomia="1" style="width: 100%;">
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
                <input id="filo_dominio" data-id_taxonomia="2" style="width: 100%;">
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
                <input id="classe" data-id_taxonomia="3" style="width: 100%;">
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
                <input id="ordem" data-id_taxonomia="4" style="width: 100%;">
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
                <input id="familia" data-id_taxonomia="5" style="width: 100%;">
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
                <input id="genero" data-id_taxonomia="6" style="width: 100%;">
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
                <input id="especie" data-id_taxonomia="7" style="width: 100%;">
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
                <input id="subespecie" data-id_taxonomia="8" style="width: 100%;">
            </div>
           <!--  <div class="panel-footer">
            </div> -->
        </div>
        <!-- /.col-lg-4 -->
    </div>

<!-- Level 0 => Reino -->
<!-- Level 3 => Filo/Dominio -->








</div>

<script type="text/javascript">

        $('#reino').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

        $('#filo_dominio').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

        $('#classe').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

         $('#ordem').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

          $('#familia').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

           $('#genero').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

            $('#especie').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });

             $('#subespecie').select2({
            placeholder: "Selecione um Reino",
            multiple: false,
            minimumInputLength: 2,
            ajax: {
                type: 'POST',
                url: "<?php echo URL; ?>index/buscar_taxonomia_select2",
                dataType: 'json',
                data: function(term) {
                    return {
                        busca : {
                            nome: term,
                            id_taxonomia : $(this).data("id_taxonomia"),
                            page_limit: 10
                        }
                    };
                },
                results: function(data) {
                    console.log(data);
                    return {results: data};
                }
            },
            formatResult: function(object) {
                return object.classificacao_nome
            },
            formatSelection: function(object) {
                return object.classificacao_nome
            }
        });


</script>

<?php include_once '../' . strtolower(APP_NAME) . '/views/' . $this->modulo['modulo'] . '/login.js.php'; ?>
