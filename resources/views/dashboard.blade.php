@extends('layouts.base')

@section('breadcrumb')
<!-- <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Data Dictionary</a></li> -->
<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
</ol>
<h6 class="font-weight-bolder mb-0">Dashboard</h6>
@stop

@section('content')
<div class="container-fluid py-4">
    <div class="row mb-4">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary"><span id="status1" countto="21">350</span></h1>
                    <h6 class="mb-0 font-weight-bolder">Total Data</h6>
                    <p class="opacity-8 mb-0 text-sm">Since last month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary"><span id="status3" countto="87">87</span></h1>
                    <h6 class="mb-0 font-weight-bolder">Total New Data</h6>
                    <p class="opacity-8 mb-0 text-sm">Since Last Month</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body text-center">
                    <h1 class="text-gradient text-primary"><span id="status4" countto="417">47</span> <span class="text-lg ms-n2">%</span></h1>
                    <h6 class="mb-0 font-weight-bolder">Data</h6>
                    <p class="opacity-8 mb-0 text-sm">Since last month</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card z-index-2">
                <div class="card-header p-3 pb-0">
                    <h6>Line chart</h6>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        <canvas id="line-chart" class="chart-canvas" height="300"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 ms-auto mt-xl-0 mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card z-index-2">
                        <div class="card-header p-3 pb-0">
                            <h6>Line gradient chart </h6>
                        </div>
                        <div class="card-body p-3">
                            <div class="chart">
                                <canvas id="line-chart-gradient" class="chart-canvas" height="300"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        ?? <script>
                            document.write(new Date().getFullYear())
                        </script>,
                        made with <i class="fa fa-heart"></i> by
                        <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                        for a better web.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

@include('components.charts')

@stop
