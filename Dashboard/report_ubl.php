<?php 
include './includes/auth.php';
include './includes/header.inc.php';?>
<link rel="stylesheet" href="css/bootstrap-multiselect/bootstrap-multiselect.css" type="text/css">
<script type="text/javascript" src="js/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col">
                    <label for="" style="">Gender</label>
                    <div class="form-group">
                        <select multiple class="form-control" name="woman[]" id="woman">
                            <option value="2019">Male</option>
                            <option value="2019">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label for="" style="">Select Program</label>
                    <div class="form-group">
                        <select multiple class="form-control" name="prog[]" id="prog">
                            <option value="BTech">BTech</option>
                            <option value="BBA">BBA</option>
                            <option value="B.PLAN">B.PLAN</option>
                            <option value="B.SC">B.SC</option>
                            <option value="BA">BA</option>
                            <option value="B.COM">B.COM</option>
                            <option value="BCA">BCA</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <label for="" style="">Urban Body(Choose States)</label>
                    <div class="form-group">
                    <select id="department" name="department[]" multiple class="form-control"
                                    id="multi-select-demo">
                                    <option value="Urban planning including town planning">Urban planning including town
                                        planning</option>

                                    <option value="Regulation of land use and construction of buildings. ">Regulation of
                                        land use and construction of buildings.</option>

                                    <option value="Planning for economic and social development. ">Planning for economic
                                        and social development. </option>

                                    <option value="Roads and bridges. ">Roads and bridges. </option>

                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>
                                    <option value="Water supply for domestic, industrial and commercial purposes">Water
                                        supply for domestic, industrial and commercial purposes</option>

                                </select>
                    </div>
                </div>
                <div class="col">
                    <label for="" style="">states</label>
                    <div class="form-group">
                        <select multiple class="form-control" name="state[]" id="state">
                            <option value="Uttrakhand">Uttrakhand</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Kerela">Kerela</option>
                            <option value="Karnataka">Karnataka</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="alert alert-danger col-lg-3 col-3" style="margin-left:20px;max-width:20%;">
                    <!-- small box -->
                    <h3>1</h3>
                    <p>Total Internship</p>
                </div>
                <!-- ./col -->
                <div class="alert alert-success col-lg-3 col-3" style="margin-left:20px;max-width:20%;">
                    <!-- small box -->
                    <h3>1</h3>
                    <p>Total Interns</p>
                </div>
                <!-- ./col -->
                <div class="alert alert-danger col-lg-3 col-3" style="margin-left:20px;max-width:20%;">
                    <!-- small box -->
                    <h3>0</h3>
                    <p>Completed Internship</p>
                </div>
                <div class="alert alert-success col-lg-3 col-3" style="margin-left:20px;max-width:20%;">
                    <!-- small box -->
                    <h3>0</h3>
                    <p>Woman Interns</p>
                </div>
            </div>
        </div>
        <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">Bar Chart</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                            class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="chart">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
</div>
</div>
<!-- Main row -->
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script src="./plugins2/chart.js/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Woman', 'Program', 'State', 'Urban Body', 'Department'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
<script>
$(document).ready(function() {
    $('#state').multiselect({
        nonSelectedText: 'Select Reservation',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});

$(document).ready(function() {
    $('#woman').multiselect({
        nonSelectedText: 'Select Reservation',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});

$(document).ready(function() {
    $('#prog').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});

$(document).ready(function() {
    $('#department').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});

$(document).ready(function() {
    $('#ubl').multiselect({
        nonSelectedText: 'Select ',
        enableFiltering: true,
        enableCaseInsensitiveFiltering: true,
        buttonWidth: '250px'
    });
});
</script>