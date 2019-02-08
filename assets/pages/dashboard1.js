 $(document).ready(function() {


	 
	new Morris.Bar({
			element: 'yearly-sales-report',
			data: [
				{ y: '2006', a: 300 },
				{ y: '2007', a: 100 },
				{ y: '2008', a: 180 },
				{ y: '2009', a: 160 },
				{ y: '2010', a: 250 },
				{ y: '2011', a: 150 },
				{ y: '2012', a: 100 },
				{ y: '2013', a: 120 },
				{ y: '2014', a: 300 },
				{ y: '2015', a: 260 },
				{ y: '2016', a: 140}
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Sales'],
			barShape: 'soft',
			xLabelMargin: 10,
			lineWidth: 1,
			 barColors: ['#00A5A8'],
			resize: true,
			hideHover: 'auto'
		});
		
		

		
		
		var lineData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Example dataset",
                fillColor: "rgba(0,165,168,0.4)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "#77C1C0",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                 data: [25, 45, 35, 55, 35, 50, 35]
            },
            
        ]
    };

    var lineOptions = {
        scaleShowGridLines: true,
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleGridLineWidth: 1,
        bezierCurve: true,
        bezierCurveTension: 0.4,
        pointDot: true,
        pointDotRadius: 4,
        pointDotStrokeWidth: 1,
        pointHitDetectionRadius: 20,
        datasetStroke: true,
        datasetStrokeWidth: 2,
        datasetFill: true,
        responsive: true,
    };


    var ctx = document.getElementById("monthly-sales-report").getContext("2d");
    var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

		
		
 })
 
