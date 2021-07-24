@extends('layouts.base')

@section('breadcrumb')
<li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Data Catalogue</a></li>
<li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Dictionary</li>
</ol>
<h6 class="font-weight-bolder mb-0">Internal</h6>
@stop

@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Add Data Catalogue</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="/katalogs" class="">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <!-- <label>File Name </label>
                                    <input class="form-control mb-3" type="text" name="filename"> -->
                                    <label>Owner </label>
                                    <input class="form-control mb-3" type="text" name="owner">
                                    <label>Tags </label>
                                    <input class="form-control mb-3" type="text" name="tags">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label>Type </label>
                                    <input class="form-control mb-3" type="text" name="type">
                                    <label>Date Added </label>
                                    <input class="form-control mb-3" type="date" name="date">
                                    <input type="hidden" name="fail_id" value=1>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-right">
                                <button class="btn btn-primary text-right" type="submit">Add Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h5 class="mb-0">Data Catalogue</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-flush" id="datatable-basic">
                        <thead class="thead-light">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Filename</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Owner</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tags</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date Added</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($katalogs as $katalog)
                            <tr>
                                <td></td>
                                <td class="text-sm font-weight-normal">{{$katalog->owner}}</td>
                                <td class="text-sm font-weight-normal">{{$katalog->owner}}</td>
                                <td class="text-sm font-weight-normal">{{$katalog->tags}}</td>
                                <td class="text-sm font-weight-normal">{{$katalog->date}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <hr class="horizontal dark my-5">
    <footer class="footer pt-3  ">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                        © <script>
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
<script>
    const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
        searchable: false,
        fixedHeight: true
    });

    const dataTableSearch = new simpleDatatables.DataTable("#datatable-search", {
        searchable: true,
        fixedHeight: true
    });
</script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

@include('components.charts')

@stop
