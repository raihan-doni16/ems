@extends('Front.legal-compliance.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('Front.legal-compliance.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/icon_total.png" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder">{{$total}}</h5>
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Total</p>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/icon_enviro.png" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder">{{$enviro}}</h5>
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Environment</p>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4">
                               <img src="img/icon_health.png" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder">{{$health}}</h5>
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Health</p>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/icon_safety.png" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder">{{$safety}}</h5>
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Safety</p>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-4">
                                <img src="img/icon_general.png" alt="">
                            </div>
                            <div class="col-8 text-center">
                                <div class="numbers">
                                    <h5 class="font-weight-bolder">{{$general}}</h5>
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Umum</p>
                                    <p class="mb-0">
                                        <span class="text-success text-sm font-weight-bolder">+55%</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize">AVG</h6>
                        <div class="chart-container" >
                            <canvas id="myChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="card-header pb-0 pt-3 bg-transparent">
                        <h6 class="text-capitalize text-center">Legal Compliance %</h6>
                        </p>
                    </div>

                        <div style="width: 100%;">
                            <canvas id="licenseComplianceChart"></canvas>
                        </div>

                </div>
            </div>
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="card z-index-2 h-100">
                    <div class="row m-3">
                        <div class="col">
                            <h6 class="text-capitalize">Licence Report</h6>
                        </div>
                        <div class="col">
                            <select id="myDropdown" class="form-control d-inline w-100" onchange="showSelected()">
                                <option value="Weekly">Weekly</option>
                                <option value="option2">Option 2</option>
                                <option value="option3">Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="licenseReportChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-7 mb-lg-0 mb-4">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th class="text-center m-2">Branch/Site</th>
                                    <th class="text-center m-2">Comply</th>
                                    <th class="text-center m-2">%</th>
                                    <th class="text-center m-2">Not Comply</th>
                                    <th class="text-center m-2">%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sites as $site )
                                    <tr>
                                        <td class="text-center m-2">{{$site->area}}</td>
                                        <td class="text-center m-2">{{$site->total_comply}}</td>
                                        <td class="text-center m-2">{{$site->persen_comply}}%</td>
                                        <td class="text-center m-2">{{$site->total_not_comply}}</td>
                                        <td class="text-center m-2">{{$site->persen_not_comply}}%</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-start  ms-2 mt-3">
                        {{ $sites->links() }}
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Tipe Izin</th>
                                    <th class="text-center">Comply</th>
                                    <th class="text-center">Not Comply</th>
                                    <th class="text-center">Not Mandatory</th>
                                    <th class="text-center">total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tipe as $tipes)
                                <tr>
                                    <td class="text-center">{{$tipes->tipe_izin}}</td>
                                    <td class="text-center">{{$tipes->total_comply}}</td>
                                    <td class="text-center">{{$tipes->total_not_comply}}</td>
                                    <td class="text-center">{{$tipes->total_not_mandatory}}</td>
                                    <td class="text-center">{{$tipes->total}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-flex justify-content-start  ms-2 mt-3">
                    {{ $tipe->links() }}
                </div>
            </div>
        </div>
        <div class="row  mt-4">
            <div class="col-lg">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th class="text-center">Branch/Site</th>
                                    <th class="text-center">Bar</th>
                                    <th class="text-center">Progress</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_progress as $datas)
                                <tr>
                                    <td class="text-center">{{$datas->area}}</td>
                                    <th class="text-center">
                                        <div class="progress" style="height: 20px;">
                                            <div class="progress-bar {{ $datas->persen >= 75 ? 'bg-success' : ($datas->persen>= 50 ? 'bg-warning' : 'bg-danger') }}" role="progressbar" style="width: {{ $datas->persen }}%;height: 20px;" aria-valuenow="{{ $datas->persen }}" aria-valuemin="0" aria-valuemax="100">
                                                {{ round($datas->persen) }}%
                                            </div>
                                        </div>
                                    </th>
                                    <td class="text-center">{{$datas->progress}}</td>
                                    <td class="text-center">{{$datas->kategori}}</td>
                                    <td class="text-center">{{$datas->keterangan}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
@endsection

@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('licenseComplianceChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Not Mandatory', 'Not Comply', 'Comply'],
                    datasets: [{
                        data: {!! json_encode($pie) !!},
                        backgroundColor: ['yellow', 'blue', 'green'],
                        hoverBackgroundColor: ['yellow', 'blue', 'green']
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                        title: {
                            display: true,

                        }
                    }
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('licenseReportChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Umum', 'Environment', 'Safety', 'Health'],
                    datasets: [
                        {
                            label: 'Not Comply',
                            data: {!! json_encode($notcomply) !!},
                            backgroundColor: 'red',
                        },
                        {
                            label: 'Not Mandatory',
                            data: {!! json_encode($notmandatory) !!},
                            backgroundColor: 'yellow',
                        },
                        {
                            label: 'Comply',
                            data: {!! json_encode($comply) !!},
                            backgroundColor: 'green',
                        }
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        },
                        title: {
                            display: true,
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
        var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Application Details", "Interview", "Information Validation", "Offer Letter", "Final Checks"],
        datasets: [{
            label: '# of Votes',
            data: [16, 41, 12, 20, 10],
            backgroundColor: [
                '#F5f5f5',
                '#d5d5d5',
                '#B2EBF2',
                '#80DEEA',
                '#00bcd4',
            ],
            borderWidth: 0
        }]
    },
    options: {
      legend: {
            display: false
            },
    		cutoutPercentage: 75,
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI
    }
});
    </script>
@endpush
