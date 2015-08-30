$(document).ready(function () {

    $.post('/cubosweb-test/estadisticas/reporte').done(function (data) {
        var result = $.parseJSON(data);
        var chart;
        var tempName;
        var datosStartup = new Array();
        var basesName = new Array();
        var basesTotal = new Array();

        $.each(result, function (key, startup) {

            $(".container-document-inner").append("<fieldset><legend>" + startup[0]['Startups']['name'] + "</legend></fieldset>");

            var serie = new Array();
            serie = [{name: 'Estadisticas', colorByPoint: true, data: []}];

            $.each(startup[1], function (key, estadistica) {
                serie[0].data.unshift({
                    name: estadistica['Estadisticas']['name'],
                    y: parseInt(estadistica['Estadisticas']['percent'])
                });
            });

            $(".container-document-inner").append("<div id='grafico-pie-" + key + "'></div>");

            $('#grafico-pie-' + key).highcharts({
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'Browser market shares January, 2015 to May, 2015'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: false
                        },
                        showInLegend: true
                    }
                },
                series: serie
            });

        });

/*
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'grafico-barras',
                type: 'column',
                backgroundColor: '#FAFAFA',
            },
            title: {
                text: 'Total de Documentos en Bases'
            },
            subtitle: {
                text: 'Fuente: INFOMED'
            },
            xAxis: {
                title: {
                    text: 'Bases'
                },
                categories: basesName
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total de Documentos'
                }
            },
            legend: {
                layout: 'vertical',
                backgroundColor: '#FFFFFF',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                shadow: true
            },
            tooltip: {
                formatter: function () {
                    return '' + this.x + ': ' + this.y;
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0,
                    colorByPoint: true
                }
            },
            series: [{
                data: basesTotal,
                showInLegend: false
            }]
        });*/
    });

});
