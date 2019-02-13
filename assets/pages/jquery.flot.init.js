$(document).ready(function () {

/*--------------Pie Chart--------------*/

$(function() {

    var data = [{
        label: "Item 1",
        data: 10,
        color: "#12C6F8",
        
    }, {
        label: "Item 2",
        data: 2,
        color: "#31C7C2",
    }, {
        label: "Item 3",
        data: 3,
        color:"#01c0c8",
    }, {
        label: "Item 4",
        data: 2,
        color:"#4BD9D0",
    }];

    var plotObj = $.plot($("#flot-pie-chart"), data, {
        series: {
            pie: {
                innerRadius: 0.5,
                show: true
            }
        },
        grid: {
            hoverable: true
        },
        color: null,
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", 
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: false
        }
    });
	})





 //Flot Pie Chart
    $(function () {
        var data = [{
            label: "Series 0"
            , data: 6
            , color: "#00A5A8"
        , }, {
            label: "Series 1"
            , data: 3
            , color: "#12C6F8"
        , }, {
            label: "Series 2"
            , data: 2
            , color: "#01C0C8"
        , }, {
            label: "Series 3"
            , data: 2
            , color: "#1ADDC3"
        , }];
        var plotObj = $.plot($("#flot-pie-chart2"), data, {
            series: {
                pie: {
                    show: true
                }
            }
            , grid: {
                hoverable: true
            }
            , tooltip: true
            , tooltipOpts: {
                content: "%p.0%, %s", 
                shifts: {
                    x: 20
                    , y: 0
                }
                , defaultTheme: false
            }
        });
    });




  /*--------------Live Chart--------------*/
	
    var flot4 = function () {

		var data = [],
			totalPoints = 300;
        
		function getRandomData() {

			if (data.length > 0)
				data = data.slice(1);

			// Do a random walk

			while (data.length < totalPoints) {

				var prev = data.length > 0 ? data[data.length - 1] : 50,
					y = prev + Math.random() * 10 - 5;

				if (y < 0) {
					y = 0;
				} else if (y > 100) {
					y = 100;
				}

				data.push(y);
			}

			// Zip the generated y values with the x values

			var res = [];
			for (var i = 0; i < data.length; ++i) {
				res.push([i, data[i]])
			}

			return res;
		}

		var plot4 = $.plot("#flot-live-chart", [ getRandomData() ], {
			series: {
				shadowSize: 0	// Drawing is faster without shadows
			},
			yaxis: {
				min: 0,
				max: 100
			},
			xaxis: {
				show: false
			},
            colors: ["#00A5A8"],
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "Y: %y",
                defaultTheme: false
            }
		});

		function update() {
			plot4.setData([getRandomData()]);

			plot4.draw();
			setTimeout(update, 30);
		}

		update();
        
    };

   
    flot4();
});






 var flot2 = function () {
        var data = [[0, 11], [1, 15], [2, 25], [3, 24], [4, 13], [5, 18]];
        var dataset = [{
            data: data,
            color: "#03A9F3"
        }];
        var ticks = [[0, "1"], [1, "2"], [2, "3"], [3, "4"], [4, "5"], [5, "6"]];

        var options = {
            series: {
                lines: {
                    show: true
                }
            },
            bars: {
                align: "center",
                barWidth: 0.5
            },
            xaxis: {
                ticks: ticks
            },
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "X: %x, Y: %y",
                defaultTheme: false
            }
        };
        $.plot($("#flot2"), dataset, options);
    };
    
/*--------------Line Chart--------------*/
$(document).ready(function () {
        var flot2 = function () {
        var data = [[0, 11], [1, 15], [2, 25], [3, 24], [4, 13], [5, 18]];
        var dataset = [{
            data: data,
            color: "#03A9F3"
        }];
        var ticks = [[0, "1"], [1, "2"], [2, "3"], [3, "4"], [4, "5"], [5, "6"]];

        var options = {
            series: {
                lines: {
                    show: true
                }
            },
            bars: {
                align: "center",
                barWidth: 0.5
            },
            xaxis: {
                ticks: ticks
            },
            legend: {
                show: false
            },
            grid: {
                color: "#AFAFAF",
                hoverable: true,
                borderWidth: 0,
                backgroundColor: '#FFF'
            },
            tooltip: true,
            tooltipOpts: {
                content: "X: %x, Y: %y",
                defaultTheme: false
            }
        };
        $.plot($("#flot2"), dataset, options);
    };
	flot2();
	})