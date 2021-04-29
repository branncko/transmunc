<?php

require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();

$sql = "SELECT * FROM vacinometro ORDER BY vac_data_vacinacao DESC";
$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prefeitura de Jaguaruana">
    <meta name="description" content="Pagina do vacinômetro" />
    <meta name="keywords"
        content=" Transparência, Notícias, Municípios, Leis, Publicações, LRF, Lei de responsabilidade fiscal, Diário, Portarias, Decretos, Matérias, Vereadores, Comissões, Sessões, Diárias, Receitas, Despesas, Prefeitura Municipal de Jaguaruana, Prefeitura  " />
    <meta property="og:image" itemprop="image" content="https://jaguaruana.ce.gov.br/imagens/icone_vacinometro.png" />
    <title>Prefeitura de Jaguaruana</title>

    <!-- core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="../../css/prettyPhoto.css" rel="stylesheet">
    <link href="../../css/animate.min.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <link href="../../css/responsive.css" rel="stylesheet">
    <link href="../../css/style.php" rel="stylesheet">
    <link href="../../css/iconestelas.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    <link rel="shortcut icon" href="imagens/icone_vacinometro.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head>

<body href="#" id="ancora" class="bg-gradient-primary">
    <link href="css/satisfacao/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">

    <header id="header" class=" navbar navbar-fixed-top wet-asphalt">


        <div class="container-fluid" style="background-color: #F79420; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-6"><a href="index.php"
                                style="display: block;color: #fff;line-height: 35px; text-transform: uppercase;">
                                <strong>Prefeitura Municipal de Jaguaruana</strong><span class='nomefora'> </span> </a>
                        </div>
                        <div class="col-md-6">



                            <a id="EsOv" href="#/ouvidoria.php" class='btn btn-primary pull-right' target='_blank'><img
                                    src="imagens/social/Ouvidoria.png" width="18" /> <span
                                    class="nomefora">OUVIDORIA</span></a>
                            <a id="EsOv" href="#/sic.php" class='btn btn-primary pull-right' target='_blank'><img
                                    src="imagens/social/LAI.png" width="18" /> <span class="nomefora">E-SIC</span></a>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-toggle" data-toggle="collapse"
                        style="padding-top: 4px; padding-bottom: 4px; padding-left: 14px; padding-right: 14px; cursor: pointer; color:#fff; "
                        data-target=".navbar-collapse-toglee">
                        <span class="fa fa-bars" style="font-size: 16px"></span>
                    </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-collapse-toglee" style="border:0px;">
                    <ul class="nav navbar-nav" style="margin-top:0px;">
                        <li class="active"><a href="vacinometro.php"><i class="fa fa-home fa-lg"
                                    aria-hidden="true"></i></a></li>
                        <li><a href="secretaria.php?sec=4">
                                SOBRE A SECRETARIA
                            </a>
                        </li>

                        <li><a href="vacinometro_lista_beneficiarios.php">TRANSPARÊNCIA DA VACINA</a></li>
                        <li><a href="vacinometro_unidade.php">UNIDADE DE SAÚDE</a></li>
                        <li><a href="vacinometro_perguntas_respostas.php">PERGUNTAS E RESPOSTAS</a></li>
                        <li><a href="vacinometro_pre_cadastro.php">PRÉ-CADASTRO DA VACINA</a></li>

                        
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


                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <div id="espaco-header" style="   height:85px;">&nbsp;</div>
    <section style="margin-top: 60px; background: #F8F8F8 !important;">
        <div class="container">
            <div class="public_index" style="margin-top: -40px;">
                <center>
                    <h4 style="text-align: center; text-transform: uppercase;"><strong>Transparência da
                            vacinação</strong></h4>
                </center>
                <div class="row">
                    <div class="col-md-12">




                        <table id="vacinas" style="padding: 2px; margin-bottom: 5px; width: 98;"
                            class='table table-responsive table-condensed table-bordered'>
                            <tbody>
                                <thead style='background-color:#F7F7F7;'>
                                    <tr>
                                        <td style="width: 25%; vertical-align: top;">
                                            <strong>Nome<br>
                                                Idade</strong>
                                        </td>
                                        <td style="vertical-align: top;"><strong>Categoria<br>Sub categoria</strong>
                                        </td>
                                        <td style="vertical-align: top;"><strong>1ª dose<br>Vacina/Data</strong></td>
                                        <td style="vertical-align: top;"><strong>2ª dose<br>Vacina/Data</strong></td>
                                        <td style="vertical-align: top; text-align: center;"><strong>Mais</strong></td>
                                    </tr>
                                </thead>

                                <?php while ($mostrar = mysqli_fetch_row($result)) {?>
                                <tr>
                                    <td style="line-height: 1.500;" data-title='Nome'>
                                        <strong><?php echo $mostrar[1]; ?></strong>
                                        <br>
                                        IDADE: <?php echo date('d/m/Y', strtotime($mostrar[2])); ?>
                                    </td>

                                    <td style="line-height: 1.500;" data-title='Categoria'>
                                        <strong><?php echo $mostrar[4]; ?></strong>
                                        <br>
                                        <i class='fa fa-square' style='color:#e67e22;'></i> <?php echo $mostrar[5]; ?>.
                                    </td>

                                    <td style="line-height: 1.500;" data-title='1ª dose'>
                                        <strong><?php echo $mostrar[7]; ?></strong>
                                        <br>
                                        <?php echo date('d/m/Y', strtotime($mostrar[6])); ?>
                                    </td>

                                    <td style="line-height: 1.500;" data-title='2ª dose'>
                                        <strong>Aguardando</strong>
                                    </td>

                                    <td style="line-height: 1.500; text-align: center; vertical-align: top;"
                                        data-title=''>
                                        <a class='btn btn-primary btn-sm'
                                            href="vacinometro_lista_beneficiarios.php?id=755">
                                            <i class='fa fa-eye' aria-hidden='true'
                                                title='Clique aqui para ver mais informações'></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php }?>

                            </tbody>
                        </table>





                    </div>
                </div>
    </section>
    <script type="text/javascript" src="../../js/shortcuts.js"></script>







    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    <section style="background: #F8F8F8 !important;">
        <div class="container">
            <div class='public_paginas'>

                <div class="col-md-12">
                    <h1 style="text-align: center; margin-bottom: 40px;">Qual o seu nível de satisfação com essa página?
                    </h1>
                </div>
                <div class="col-md-12">
                    <fieldset class="radio-image">
                        <div class="col-md-1"></div>
                        <div class="col-md-2">

                            <label for="2" class="radio-satisfacao" id="nota2">
                                <i class="iconota-nota2" style="color: #c0392b;"></i>
                            </label>
                            </br>Muito insatisfeito
                        </div>
                        <div class="col-md-2">
                            <label for="4" class="radio-satisfacao" id="nota4">
                                <i class="iconota-nota4" style="color: #e74c3c;"></i>
                            </label>
                            </br>Um pouco insatisfeito
                        </div>
                        <div class="col-md-2">
                            <label for="6" class="radio-satisfacao" id="nota6">
                                <i class="iconota-nota6" style="color: #d35400;"></i>
                            </label>
                            </br>Neutro
                        </div>
                        <div class="col-md-2">
                            <label for="8" class="radio-satisfacao" id="nota8">
                                <i class="iconota-nota8" style="color: #2ecc71;"></i>
                            </label>
                            </br>Um pouco satisfeito
                        </div>
                        <div class="col-md-2">

                            <label for="10" class="radio-satisfacao" id="nota10">
                                <i class="iconota-nota10" style="color: #27ae60;"></i>
                            </label>
                            </br>Muito satisfeito
                        </div>
                        <div class="col-md-1"></div>
                    </fieldset>
                </div>

                <div class="col-md-12"></div>

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form id="FormSatisfacao" method="post" action="data_satisfacao.php" style="display: none;">
                        <div class="form-group">
                            <label> Name </label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite seu nome">
                            <input type="hidden" name="nota" id="nota" required />
                            <input type="hidden" name="VPagina" value="vacinometro_lista_beneficiarios.php" />
                            <input type="hidden" name="NRegistro" value="0" />
                        </div>
                        <div class="form-group">
                            <label> Email </label>
                            <input type="email" class="form-control" name="email" placeholder="Digite aqui seu email" />
                        </div>
                        <div class="form-group">
                            <label> Mensagem </label>
                            <textarea name="mensagem" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LfJDxMTAAAAABbj-qCIMGsMLA-xW4qzwZe6fm9m"
                                style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"
                                data-sitekey="6LfJDxMTAAAAABbj-qCIMGsMLA-xW4qzwZe6fm9m"></div>
                        </div>
                        <div class="form-group">
                            <button type="button" id="CancelSatisfacao" class="btn btn-primary"
                                required="required">Cancelar</button>
                            <button type="submit" name="submit" id="btnSend" class="btn btn-primary"
                                required="required">Enviar</button>
                            <i class="fa fa-2x fa-spinner fa-spin load" style="display: none;"></i>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
                <div id="Return" class="col-md-12"> </div>

            </div>
        </div>
    </section>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div id="scroll"><span></span></div>

    <section id="bottom" style="padding-bottom: 0px; margin-top: 0px;">
        <div class="gmaps" style="height: 150px;">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1987.803188814736!2d-37.78353310097763!3d-4.837453390064737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b997a40d4f105d%3A0xa4c918f526fc4d02!2sSecretaria+de+Assist%C3%AAncia+Social+de+Jaguaruana!5e0!3m2!1spt-BR!2sbr!4v1544009895621"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <section style="margin-bottom:0px; border-top: 7px solid #F79420;"></section>


        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">

            <div class="col-md-12" style="text-align: center; margin-bottom: 23px;">

                <h1 style="text-align: center; margin-bottom: 0px; color: #FFFFFF; font-size: 20px">
                    SECRETARIA MUNICIPAL DA SAÚDE </h1>

            </div>

        </div>



    </section>

    <footer id="footer" class="midnight-blue">
        <div class="container" style="padding-top: 10px;">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <strong>
                            <p style="letter-spacing: 1px">
                                INSTITUCIONAL<br></p>
                        </strong>

                        <p class="PBottom"><i class='fa fa-user'></i> SECRETÁRIO(A): REGINALDO ARAUJO DA SILVA</p>

                        <p class="PBottom"><i class='fa fa-credit-card'></i> CNPJ: 07.615.750/0001-17</p>
                    </div>

                    <div class="col-md-4">
                        <strong>
                            <p style="letter-spacing: 1px">CONTATOS<br></p>
                        </strong>
                        <p><i class='fa fa-phone'></i> (88) 3418-2444</p>
                        <p><i class='fa fa-envelope'></i> saudjaguaruana2017@gmail.com</p>

                    </div>

                    <div class="col-md-4 ">
                        <strong>
                            <p style="letter-spacing: 1px">
                                ENDEREÇO E HORÁRIO<br></p>
                        </strong>
                        <p>
                            <i class='fa fa-map-marker' aria-hidden='true'></i>
                            AV. SIMÃO DE GOIS,
                            Nº 1734 - CENTRO
                            - CEP: 62.823-000

                        </p>
                        <p>
                            <i class='fa fa-clock-o' aria-hidden='true'></i>
                            DE SEGUNDA A SEXTA - DAS 07:00 AS 13:00H
                        </p>
                    </div>





                </div>
            </div>
        </div>
    </footer>

    <footer style="background: #27632F;">
        <div class="container">
            <div class="row" style="text-align: center;">

                <a href='https://webmail.jaguaruana.ce.gov.br/' class='redesocial1' title='E-mail' target='_blank'><i
                        class='fa fa-envelope'></i></a> <a href='https://www.facebook.com/prefeiturajaguaruana'
                    class='redesocial1' title='Facebook' target='_blank'><i class='fa fa-facebook'></i></a> <a
                    href='https://www.instagram.com/prefeiturajaguaruana/' class='redesocial1' title='Instagram'
                    target='_blank'><i class='fa fa-instagram'></i></a>
            </div>
        </div>
    </footer>

    <footer class="slider-principal" style="background: #27632F; ">
        <div class="container">
            <div class="row">
                <p style="text-align: center; flex-basis: auto; padding-right:0px; color: #fff; margin-top: 1em;">
                    &copy; 2021 <a target='_blank' href='http://www.assesi.com.br/' title=''>Assesi</a>.
                    Todos os Direitos Reservados.</p>

            </div>
        </div>
    </footer>
    <script src='https://www.google.com/recaptcha/api.js?hl=pt-BR'></script>
    <script src="../../js/jquery-1.11.3.js"></script>
    <script src="../../js/tableExport.min.js"></script>
    <script src="../../js/FileSaver.min.js"></script>
    <script src="../../js/jquery.base64.js"></script>
    <script src="../../js/html2canvas.min.js"></script>
    <script src="../../js/sprintf.js"></script>
    <script src="../../js/jspdf.min.js"></script>
    <script src="../../js/jspdf.plugin.autotable.js"></script>
    <script src="../../js/base64.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/jquery.prettyPhoto.js"></script>
    <script src="../../js/jquery.isotope.min.js"></script>
    <script src="../../js/main.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src=" https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>







    <script>
    $(document).ready(function() {
        $('#vacinas').DataTable({
            "bLengthChange": false,
            "bInfo": false,
            "ordering": false,
            "language": {
                "searchPlaceholder": "Pesquisar vacinados...",
                "sEmptyTable": "Nenhuma informação encontrada",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ vacinas",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 vacinas",
                "sInfoFiltered": "(Filtrados de _MAX_ vacinas)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhuma informação encontrada",
                "sSearch": "",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }
            }
        });
    });
    </script>
</body>

</html>