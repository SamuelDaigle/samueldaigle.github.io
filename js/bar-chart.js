<script>
	$(function () {
    $('#container-bar').highcharts({
        chart: {
			backgroundColor: 'rgba(0,0,0,0)',
			plotBackgroundColor: null,
			plotBorderWidth: null,
			plotShadow: false,
			marginTop: "100",
            type: 'column'
        },
        credits: {
			enabled: false
		},
		title: {
			text: '',
			margin: 0,
		},
        xAxis: {
            categories: [
                'Researches'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Time (h)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} hrs</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
			size: '100%',
			cursor: 'pointer',
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
				dataLabels: {
					color: 'white'
				}
            }
        },
        series: [{
            name: 'Graphic APIs',
            data: [700]
        }, {
            name: 'Algorithms',
            data: [50]
        },{
            name: 'Software Architecture',
            data: [400]
        },{
            name: '3D Maths',
            data: [150]
        }]
    });
});
</script>