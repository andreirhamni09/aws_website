<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b></b>
    </div>
    <strong><a href="#">MobilePro</a>.</strong> 2020
</footer>
</div>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="layout/plugins/jquery/jquery.min.js"></script>
<script src="layout/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="layout/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="layout/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="layout/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="layout/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="layout/plugins/chart.js/Chart.min.js"></script>
<script src="layout/dist/js/adminlte.min.js"></script>
<script src="layout/dist/js/demo.js"></script>
<script src="layout/dist/js/jquery.fancybox.min.js"></script>
<script src="data/ripeness-chart.js"></script>
<script src="data/standar-chart.js"></script>
<script src="data/jenis-chart.js"></script>
<script src="data/attendance-chart.js"></script>
<script>
    google.charts.load('current', {
        'packages': ['gauge']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Label', 'Value'],
            ['Rotasi', 2.46]
        ]);

        var options = {
            width: 250,
            height: 250,
            redFrom: 0,
            redTo: 23 / 7 / 4,
            greenFrom: 23 / 7 * 3 / 4,
            greenTo: 23 / 7,
            yellowFrom: 23 / 7 / 4,
            yellowTo: 23 / 7 / 2,
            minorTicks: 4,
            max: (31 / 7).toFixed(2)
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

    }
</script>
<script>
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawVisualization);

    function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable([
            ['Month', 'Siap Kirim', 'Backlog', 'Evacuated'],
            ['Januari', 165, 21, 140],
            ['Februari', 155, 40, 110],
            ['Maret', 135, 20, 100],
            ['April', 157, 7, 143],
            ['Mei', 139, 27, 67]
        ]);

        var options = {
            startup: true,
            title: '',
            vAxis: {
                title: 'Janjang'
            },
            hAxis: {
                title: 'Bulan'
            },
            seriesType: 'bars',
            series: {
                0: {
                    color: '#90EE90'
                },
                1: {
                    type: 'line',
                    pointsVisible: true,
                    pointShape: 'square',
                    lineWidth: 4,
                    pointSize: 15
                },
                2: {
                    type: 'line',
                    pointsVisible: true,
                    color: 'green',
                    lineWidth: 4,
                    pointSize: 15
                }
            }
        };

        var chart = new google.visualization.ComboChart(document.getElementById('baclog_chart'));
        chart.draw(data, options);
    }
</script>
<script>
    google.charts.load("current", {
        packages: ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ["Afdeling", "Ripeness", {
                role: "style"
            }],
            ["OA", 97.43, "red"],
            ["OB", 94.33, "green"],
            ["OC", 98.40, "blue"],
            ["OD", 96.10, "purple"]
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
            {
                calc: "stringify",
                sourceColumn: 1,
                type: "string",
                role: "annotation"
            },
            2
        ]);

        var options = {
            title: "",
            bar: {
                groupWidth: "75%"
            },
            legend: {
                position: "none"
            },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
</script>
<script>
    $(function () {
        $("#example1").DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>
</body>

</html>