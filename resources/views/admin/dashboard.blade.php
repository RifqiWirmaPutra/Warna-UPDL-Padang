@extends('layouts.admin')

@section('content')
    <div class="container d-flex">
        <h2>PLN CORPU BERTRANSFORMASI</h2>
        <p></p>
    </div>

    <div class="row">
        
        <div class="col-md-4 col-md-offset-4">
            <hr />
        </div>
        <div class="clearfix"></div>
        <div class="col-md-6">
            <div id="chart_div1" class="chart"></div>
        </div>
        <div class="col-md-6">
            <div id="chart_div2" class="chart"></div>
        </div>
        
        <!-- Tambahkan diagram lingkaran di bawah dua diagram kolom sebelumnya -->
        <div class="col-md-12 mt-4 p-4" style="background-color: white;">
            <div id="chart_div3" class="chart"></div>
        </div>
    </div>

    <!-- Ensure jQuery is loaded before your Google Charts code -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            drawChart1();
            drawChart2();
            drawChart3(); // Panggil fungsi untuk menggambar diagram lingkaran
        }

        function drawChart1() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2020',  1000, 400],
                ['2021',  1170, 460],
                ['2022',  660, 1120],
                ['2023',  1030, 540]
            ]);

            var options = {
                title: 'Peningkatan Siswa',
                hAxis: {title: 'Bulan', titleTextStyle: {color: 'red'}}
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
            chart.draw(data, options);
        }

        function drawChart2() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Sales', 'Expenses'],
                ['2020',  1000, 400],
                ['2021',  1170, 460],
                ['2022',  660, 1120],
                ['2023',  1030, 540]
            ]);

            var options = {
                title: 'Jumlah Pengunjung',
                hAxis: {title: 'Bulan', titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0}
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
            chart.draw(data, options);
        }

        function drawChart3() {
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Percentage'],
                ['Hadir', 30],
                ['Tidak Hadir', 20],
                ['Ragu', 50]
            ]);

            var options = {
                title: 'Kehadiran Siswa',
                pieHole: 0.4,
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div3'));
            chart.draw(data, options);
        }

        $(window).resize(function(){
            drawCharts();
        });
    </script>
@endsection
