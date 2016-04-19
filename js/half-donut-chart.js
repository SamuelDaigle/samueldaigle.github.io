$(function () {
    $('#container-half').highcharts({
        chart: {
            backgroundColor: 'rgba(0,0,0,0)',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			type: 'pie',
			spacing: [0,0,0,0],
			margin: [0,0,0,0]
        },
        credits: {
			enabled: false
		},
		title: {
			text: '',
			margin: 0,
		},
        tooltip: {
			pointFormat: '<b>{series.name}</b>'
		},
        plotOptions: {
            pie: {
				allowPointSelect: false,
				slicedOffset: 0,
				size: '100%',
				cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    distance: -25,
					format: '<b>{point.name}</b>',
                    style: {
						fontSize: '15px',
						color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
					}
                },
                startAngle: -90,
                endAngle: 90,
                center: ['50%', '75%']
            }
        },
        series: [{
            type: 'pie',
            name: '',
			borderWidth: '0',
            innerSize: '50%',
            data: [
                ['Unreal<br>Engine', 33],
                ['Unity', 66],
                {
                    name: 'Proprietary or Undetectable',
                    y: 0.2,
                    dataLabels: {
                        enabled: false
                    }
                }
            ]
        }]
    });
});