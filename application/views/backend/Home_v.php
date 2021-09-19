<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>
<script src="https://code.highcharts.com/modules/cylinder.js"></script>
<script src="https://code.highcharts.com/modules/funnel3d.js"></script>
<script src="https://code.highcharts.com/modules/pyramid3d.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<!--  <script src="<?php echo base_url();?>assets/highcharts/theme/grid.js"></script>   
 -->
 <style>
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 400px;
    margin: 1em auto;
}
.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #EBEBEB;
    margin: 10px auto;
    text-align: center;
    width: 80%;
    max-width: 80%;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>

 <style type="text/css">
.highcharts-title {
  fill: black;
  font-size: 26px;
  font-weight: bold;
}
.highcharts-figure, .highcharts-data-table table {
    min-width: 310px; 
    max-width: 800px;
    margin: 1em auto;
}
.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 300px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</style>
              <br> 
<!-- <script src="<?php echo base_url();?>assets/highcharts/theme/dark-blue.js"></script>   -->

                   

                            <!--    <div class="col-md-6">
                        <div class="panel panel-primary" id="demo">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-users"></i></span> Grafik Pengunjung Article</h3>
                                <div class="panel-toolbar text-right">
                                </div>
                            </div>
                                <div id="article"><br><br><br><br><br><br><br><br><br><br><br><br>
                            </div></div></div>
                            <div> <div></div></div>
 -->


                            <div class="col-md-12">
                        <div class="panel panel-primary" id="demo">
                            <div class="panel-heading">
                                <h3 class="panel-title"><span class="panel-icon mr5"><i class="ico-users"></i></span> Grafik Pengunjung Berdasarkan Unit Room</h3>
                                <div class="panel-toolbar text-right">
                                </div>
                            </div>
                                <div id="gallery"><br><br><br><br><br><br><br><br><br><br><br>
                            </div></div></div>
                            <div> <div><div>
                                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<script type="text/javascript">
 $(document).ready(function() {
                         Math.easeOutBounce = function (pos) {
                        if ((pos) < (1 / 2.75)) {
                            return (7.5625 * pos * pos);
                        }
                        if (pos < (2 / 2.75)) {
                            return (7.5625 * (pos -= (1.5 / 2.75)) * pos + 0.75);
                        }
                        if (pos < (2.5 / 2.75)) {
                            return (7.5625 * (pos -= (2.25 / 2.75)) * pos + 0.9375);
                        }
                        return (7.5625 * (pos -= (2.625 / 2.75)) * pos + 0.984375);
                    };

    $('#article').highcharts({
         colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
             '#FF9655', '#FFF263', '#6AF9C4'],
              chart: {
                type: 'column',
         options3d: {
                    enabled: true,
                    depth: 50,
                     alpha: 45,
                    beta: 0,
                    viewDistance: 50
                },
               },
            title: {
                text: 'Data Article'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
        },
        exporting: { 
            enabled: false 
        },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pengunjung '
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{point.key} </td>' +
                    '<td style="padding:0"><b>{point.y} x viewed </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
           plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },  
        series: [{
             name: ' Jumlah ',
            data: [<?php
            foreach($master_article as $data){
                        echo "{name: '".$data->title."', y:".$data->jumlah."},";
            }   
            ?>],
             shadow : true,
            dataLabels: {
                enabled: true,
               
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Courier, sans-serif'
                }
            }
        }]
    });
});
</script>

<script type="text/javascript">
 $(document).ready(function() {
                         Math.easeOutBounce = function (pos) {
                        if ((pos) < (1 / 2.75)) {
                            return (7.5625 * pos * pos);
                        }
                        if (pos < (2 / 2.75)) {
                            return (7.5625 * (pos -= (1.5 / 2.75)) * pos + 0.75);
                        }
                        if (pos < (2.5 / 2.75)) {
                            return (7.5625 * (pos -= (2.25 / 2.75)) * pos + 0.9375);
                        }
                        return (7.5625 * (pos -= (2.625 / 2.75)) * pos + 0.984375);
                    };

    $('#gallery').highcharts({
         colors: ['#058DC7', '#50B432', '#ED561B', '#DDDF00', '#24CBE5', '#64E572',
             '#FF9655', '#FFF263', '#6AF9C4'],
              chart: {
                type: 'column',
         options3d: {
                    enabled: true,
                    depth: 50,
                     alpha: 45,
                    beta: 0,
                    viewDistance: 50
                },
               },
            title: {
                text: 'Data Unit'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
        },
        exporting: { 
            enabled: false 
        },
            yAxis: {
                min: 0,
                title: {
                    text: 'Jumlah Pengunjung '
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{point.key} </td>' +
                    '<td style="padding:0"><b>{point.y} x viewed </b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
           plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    depth: 35,
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }
            },  
        series: [{
             name: ' Statistik Pengunjung Unit Versi Bahasa Indonesia',
            data: [<?php
            foreach($master_gallery as $data){
                        echo "{name: '".$data->title."', y:".$data->jumlah."},";
            }   
            ?>],
             shadow : true,
            dataLabels: {
                enabled: true,
               
                formatter: function() {
                     return Highcharts.numberFormat(this.y, 0);
                }, // one decimal
                y: 0, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Courier, sans-serif'
                }
            }
        }]
    });
});
</script>
