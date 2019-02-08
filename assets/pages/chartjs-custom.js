$(function () {

   /*line Chart*/

    var lineData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Example dataset",
                fillColor: "#03A9F3",
                strokeColor: "#00A5A8",
                pointColor: "#00ACAC",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#36a2eb",
                data: [55, 60, 40, 80, 60, 70, 80]
            },
            {
                label: "Example dataset",
                fillColor: "#00A5A8",
                strokeColor: "#0E756B",
                pointColor: "#00ACAC",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "#126FDA",
                data: [30, 40, 80, 120, 66,45, 76]
            }
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
        datasetFill: false,
        responsive: true,
    };
    var ctx = document.getElementById("lineChart").getContext("2d");
    var myNewChart = new Chart(ctx).Line(lineData, lineOptions);





  /*bar Chart*/


    var barData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                label: "Electronics",
                fillColor: "#00A5A8",
                strokeColor: "#00A5A8",
                pointColor: "#36a2eb",
                pointStrokeColor: "#36a2eb",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [20, 50, 70, 80, 90, 55, 40]
            },
            {
                label: "Digital Goods",
                fillColor: "#8BEAEC",
                strokeColor: "#8BEAEC",
                pointColor: "#3b8bba",
                pointStrokeColor: "#ff6384",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(60,141,188,1)",
                data: [40, 30, 60, 40, 20, 27, 90]
            }
        ]
    };

   
  


    var barChartOptions = {
        //Boolean - If we should show the scale at all
        showScale: true,
        //Boolean - Whether grid lines are shown across the chart
        scaleShowGridLines: false,
        //String - Colour of the grid lines
        scaleGridLineColor: "rgba(0,0,0,.05)",
        //Number - Width of the grid lines
        scaleGridLineWidth: 1,
        //Boolean - Whether to show horizontal lines (except X axis)
        scaleShowHorizontalLines: true,
        //Boolean - Whether to show vertical lines (except Y axis)
        scaleShowVerticalLines: true,
        //Boolean - Whether the line is curved between points
        bezierCurve: true,
        //Number - Tension of the bezier curve between points
        bezierCurveTension: 0.3,
        //Boolean - Whether to show a dot for each point
        pointDot: false,
        //Number - Radius of each point dot in pixels
        pointDotRadius: 4,
        //Number - Pixel width of point dot stroke
        pointDotStrokeWidth: 1,
        //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
        pointHitDetectionRadius: 20,
        //Boolean - Whether to show a stroke for datasets
        datasetStroke: true,
        //Number - Pixel width of dataset stroke
        datasetStrokeWidth: 2,
        //Boolean - Whether to fill the dataset with a color
        datasetFill: true,
        //String - A legend template
        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
        //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
        maintainAspectRatio: true,
        //Boolean - whether to make the chart responsive to window resizing
        responsive: true
    }


    var ctx = document.getElementById("barChart").getContext("2d");
    var barChart = new Chart(ctx);

    var barChartData = barData;
    barChartData.datasets[1].fillColor = "#28D8BE";
    barChartData.datasets[1].strokeColor = "#28D8BE";
    barChartData.datasets[1].pointColor = "#ff6384";
    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);


   /*Polar Area Chart*/

    var polarData = [
        {
            value: 500,
            color: "#00A5A8",
            highlight: "#F0A015",
            label: "Laptop"
        },
        {
            value:290,
            color: "#3CD3F5",
            highlight: "#36A2EB",
            label: "Mobile"
        },
        {
            value:300,
            color: "#28D8BE",
            highlight: "#43b8b8",
            label: "Tab"
        }
    ];
	

    var polarOptions = {
        scaleShowLabelBackdrop: true,
        scaleBackdropColor: "rgba(255,255,255,0.75)",
        scaleBeginAtZero: true,
        scaleBackdropPaddingY: 1,
        scaleBackdropPaddingX: 1,
        scaleShowLine: true,
        segmentShowStroke: true,
        segmentStrokeColor: "#fff",
        segmentStrokeWidth: 2,
        animationSteps: 100,
        animationEasing: "easeOutBounce",
        animateRotate: true,
        animateScale: false,
        responsive: true,
    };

    var ctx = document.getElementById("polarChart").getContext("2d");
    var myNewChart = new Chart(ctx).PolarArea(polarData, polarOptions);

	/*Pie Chart */

    var pieChartData = [
        {
            value: 500,
            color: "#2CA8E2",
            highlight: "#eebd45",
            label: "Chrome"
        },
        {
            value: 100,
            color: "#5CB85C",
            highlight: "#ef5374",
            label: "IE"
        },
        {
            value: 600,
            color: "#535BF3",
            highlight: "#4c44e5",
            label: "FireFox"
        },
        {
            value: 300,
            color: "#36a2eb",
            highlight: "#79F0C8",
            label: "Safari"
        },
        {
            value: 500,
            color: "#0C938E",
            highlight: "#43b8b8",
            label: "Opera"
        },
        {
            value: 900,
            color: "#40D3C9",
            highlight: "#149488",
            label: "Navigator"
        }
    ];

    var pieChartOptions = {
        segmentShowStroke: true,
        segmentStrokeColor: "#fff",
        segmentStrokeWidth: 2,
        percentageInnerCutout: 45, // This is 0 for Pie charts
        animationSteps: 100,
        animationEasing: "easeOutBounce",
        animateRotate: true,
        animateScale: false,
        responsive: true,
    };


    var ctx = document.getElementById("pieChart").getContext("2d");
    var pieChart = new Chart(ctx).Doughnut(pieChartData, pieChartOptions);



});