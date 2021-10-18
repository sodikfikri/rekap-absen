@extends('template._master')

<!-- Title App -->
@section('title', 'Export')

@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Number of Transaction (n)</h4>
                    </div>
                    <h3 class="font-weight-medium mb-0">2.122</h3>
                    <p class="mb-0 mt-2 detail-card-sales-kpi"><span class="font-weight-semibold text-success"><i class="fa fa-caret-up"></i> 0.57%</span> <small></small></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Sales (Rp)</h4>
                    </div>
                    <h3 class="font-weight-medium mb-0">49.102.615</h3>
                    <p class="mb-0 mtt-2 detail-card-sales-kpi"><span class="font-weight-semibold text-danger"><i class="fa fa-caret-down"></i> -1.79%</span> <small></small></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Cost (Rp)</h4>
                    </div>
                    <h3 class="font-weight-medium mb-0">33.563.761</h3>
                    <p class="mb-0 mt-2 detail-card-sales-kpi"><span class="font-weight-semibold text-success"><i class="fa fa-caret-up"></i> 12.72%</span> <small></small></p>
                </div>
            </div>
        </div>
        <div class="col-sm-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Margin (Rp)</h4>
                    </div>
                    <h3 class="font-weight-medium mb-0">15.538.854</h3>
                    <p class="mb-0 mt-2 detail-card-sales-kpi"><span class="font-weight-semibold text-danger"><i class="fa fa-caret-down"></i> -2.87%</span> <small></small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Sales KPI breakdown</h4>
                    </div>
                    <div class="table-responsive mt-3">
                        <table class="table">
                            <thead>
                                <th class="text-left w-25 pl-0">Service</th>
                                <th class="text-center">Transaction</th>
                                <th class="text-center">Sales (Rp)</th>
                                <th class="text-center">Cost (Rp)</th>
                                <th class="text-center pr-0 pl-0">Margin (Rp)</th>
                            </thead>
                            <tboddy>
                                <tr>
                                    <td class="text-left pl-0">Dashboard 1</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right pr-0">0</td>
                                </tr>
                                <tr>
                                    <td class="text-left pl-0">Dashboard 2</td>
                                    <td class="text-right">2.122</td>
                                    <td class="text-right">49.102.615</td>
                                    <td class="text-right text-danger">-33.563.761</td>
                                    <td class="text-right pr-0 text-success">15.538.854</td>
                                </tr>
                                <tr>
                                    <td class="text-left pl-0">Dashboard 3</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right">0</td>
                                    <td class="text-right pr-0">0</td>
                                </tr>
                            </tboddy>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mb-0">Cost breakdown</h4>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 mb-4">
                            <div class="mt-4">
                                <p class="mb-0">Withdrawal (Rp)</p>
                                <div class="align-items-baseline d-flex row">
                                    <div class="col-auto">
                                        <h3 class="font-weight-medium mb-0">14.329.342</h3>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 mtt-2 detail-card-sales-kpi"><span class="font-weight-semibold text-danger"><i class="fa fa-caret-down"></i> -1.79%</span> <small></small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <p class="mb-0">Settlement (Rp)</p>
                                <div class="align-items-baseline d-flex row">
                                    <div class="col-auto">
                                        <h3 class="font-weight-medium mb-0">19.234.419</h3>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 mtt-2 detail-card-sales-kpi"><span class="font-weight-semibold text-success"><i class="fa fa-caret-up"></i> +1.79%</span> <small></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="my-auto" id="costBreakdownChart" style="height: 200px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

