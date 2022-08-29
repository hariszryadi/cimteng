@extends('layouts.frontend.master')

@section('content')
<style>
    .card {
        padding: 36px;
    }
</style>
<!-- ========== Breadcramb Start ========== -->
<section class="breadcramb-content breadcramb-v2 pt50 pb50 parallax-bg color-overlay" style="background-image:url({{ asset('images/cimteng.jpeg') }})">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul>
					<li><a href="{{ route('home') }}">Beranda</a></li>
					<li><a href="{{ route('skm') }}">SKM</a></li>
					<li>Hasil Poling SKM</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- ========== Breadcramb End ========== -->
<!-- SKM Result Start -->
<section class="section-padding white-bg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="section-title text-center mb70">
					<h2>Hasil Poling SKM SKM</h2>
					<div class="section-divider divider-traingle"></div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12" style="padding-bottom: 18px;">
                @foreach ($skm as $key => $item)
                    <div class="card">
                        <div class="card-body">
                            <h4>{{ $item->question }}</h4>
                            <canvas id="chart{{$key}}" height="100"></canvas>
                        </div>
                    </div>
                @endforeach
			</div>
		</div>
	</div>
</section>
<!-- SKM Result End -->
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var skm = {!! json_encode($skm) !!};
    
    if ($(window).width() <= 600) {
        $("canvas").attr('width', '100%');
    }

    $.each(skm, function(i, v) {
        var labels = ['Sangat Baik', 'Baik', 'Cukup Baik', 'Kurang Baik'];
        var count = [v.very_good, v.good, v.enough, v.not_good];
        var color = ['#5cb85c', '#337ab7', '#f0ad4e', '#d9534f'];

        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Vote',
                data: count,
                backgroundColor: color,
                borderWidth: 1
            }]
        };
    
        // config 
        const config = {
            type: 'bar',
            data,
            options: {
                plugins: {
                    legend: {
                        onClick: (evt, legendItem, legend) => {
                            const index = legend.chart.data.labels.indexOf(legendItem.text);
                            legend.chart.toggleDataVisibility(index);
                            legend.chart.update();
                        },
                        labels: {
                            generateLabels: (chart) => {
                                // console.log(chart)
                                return chart.data.labels.map(
                                    (label, index) => ({
                                        text: label,
                                        strokeStyle: chart.data.datasets[0].backgroundColor[index],
                                        fillStyle: chart.data.datasets[0].backgroundColor[index],
                                        hidden: false
                                    })
                                )
                            },
                            font: {
                                size: 16
                            }
                        }
                    }
                },
                indexAxis : 'y',
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                size: 16,
                            }
                        }
                    }
                }
            }
        };
    
        // render init block
        const myChart = new Chart(
            document.getElementById('chart'+i),
            config
        );
    });
</script>    
@endsection
