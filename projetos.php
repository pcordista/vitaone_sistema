<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>


<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="breadmenu colorBlue">
    <div class="container">
        <img src="assets/img/icon-arrow-left.png" alt="Back to previous slide" class="breadmenu-back">
        Projetos
    </div>
</div>

<div class="projetos sectionStart">
    <div class="container">
        <div class="projetos-header">
            <div class="row">
                <div class="col-lg-8 col-md-8 bold">
                    STATUS DOS PROJETOS
                </div>
                <div class="col-lg-4 col-md-4 bold flex projetos-header-exports">
                    <div class="colorBlue">
                        GERAR PDF
                        <img src="assets/img/icon-pdf.png" alt="">
                    </div>
                    <div class="colorBlue">
                        EXPORTAR PARA EXCEL
                        <img src="assets/img/icon-excel.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="projetos-container">
            <div class="row sectionStart">
                <div class="col-xs-12 col-sm-5 col-lg-5 col-md-5 margin_2_top" id="canvasContent">
                    <canvas id="projetos"></canvas>
                </div>
                <div class="col-xs-12 col-sm-5 col-lg-5 col-md-4 heightCanvas">
                    <table class="table sectionStart">
                        <thead>
                            <tr>
                                <th scope="col">
                                    PLANNING<br>WPARTS
                                </th>
                                <th scope="col" class="table-head-2">
                                    PREVISÃO <br>INICIAL DE<br>ENTREGA
                                </th>
                                <th scope="col" class="table-head-2">
                                    PREVISÃO <br> ALTERADA <br> DE ENTREGA
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    VITA - XXX
                                    <br>CONTRATO XX
                                </th>
                                <td>22/02/2019</td>
                                <td>22/02/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    VITA - XXX
                                    <br>CONTRATO XX
                                </th>
                                <td>22/02/2019</td>
                                <td>22/02/2019</td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    VITA - XXX
                                    <br>CONTRATO XX
                                </th>
                                <td>22/02/2019</td>
                                <td>22/02/2019</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-2 col-lg-2 col-md-3 sectionStart  heightCanvas">
                    <div class="projetos-satisfacao">
                        Pesquisa de Satisfação
                        <canvas id="satisfacao" class="sectionStart"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="projetos-view">
            <div class='projetos-status-container'>
                <div class='projetos-status'>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                INITIANTING
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                PLANNING
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                PLANNING WPARTS
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                IN PROGRESS
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                CLOSING
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                ON HOLD
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                    <div class='column'>
                        <div class="projeto-status-item">
                            <div class='status-title colorBlue bgBlueLight bold'>
                                COMPLETED
                            </div>
                            <div class="projeto-status-item-content">
                                <div>XXX-XXX</div>
                                <div>Tecnologia - Atividade</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="banner sectionStart">
        <img src="assets/img/banner.jpg" alt="" class="widthfull">
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script>
        var oilCanvas = document.getElementById("projetos");

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var oilData = {
            labels: [
                "INITIANTING",
                "PLANNING",
                "IN PROGRESS",
                "ON HOLD"
            ],
            datasets: [{
                data: [40, 20, 20, 20],
                backgroundColor: [
                    "#a278c4",
                    "#21b573",
                    "#ffff9e",
                    "#70dec0"
                ]
            }]
        };

        var pieChart = new Chart(oilCanvas, {
            type: 'pie',
            data: oilData,
            options: {
                legend: {
                    position: 'right',
                    fullWidth: false
                }
            }
        });

        var ctx = document.getElementById("satisfacao").getContext('2d');

        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ["lorem", "lorem", "lorem"],
                datasets: [{
                    data: [500, 500, 500], // Specify the data values array

                    backgroundColor: [
                        "#c47acc",
                        "#ffff94",
                        "#00e0c0"
                    ], // Add custom color background (Points and Fill)
                }]
            },
            options: {
                responsive: true, // Instruct chart js to respond nicely.
                legend: {
                    display: false
                }
            }
        });
    </script>
    <?php include 'footer.php'; ?>

    <script src="assets/js/projetos.js"></script>