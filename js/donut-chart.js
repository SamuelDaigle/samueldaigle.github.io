$(function () {
    $('#container').highcharts({
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
				pointFormat: '{series.name}</b>'
			},
			plotOptions: {
				pie: {
					allowPointSelect: false,
					slicedOffset: 0,
					size: '100%',
					cursor: 'pointer',
					dataLabels: {
						enabled: true,
						distance: -30,
						format: '<b>{point.name}</b>',
						style: {
							fontSize: '15px',
							color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
						}
					}
				}
			},
			series: [{
				name: "Langage",
				innerSize: '40%',
				borderWidth: '0',
				colorByPoint: true,
				data: [{
					name: "C++",
					y: 55
				}, {
					name: "C#",
					y: 15
				}, {
					name: "Java",
					y: 20
				}, {
					name: "Web",
					y: 10
				}]
			}]
		});
	});