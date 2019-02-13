 $(document).ready(function() {
	 
	    Morris.Donut({
        element: 'morris-dash1',
        data: [
            {label: 'Javascript', value: 45 },
            {label: 'HTML5', value: 60 },
            {label: 'CSS3', value: 90 },
            {label: 'PHP', value: 55 }
        ],
        resize: true,
        colors: ['#34D3EB', '#6E8CD7', '#00A5A8','#5DDCEF'],
    });
	  
	
    Morris.Line({
        element: 'morris-sales-dash',
        data: [
            { year: '2010', iphone: 50, ipad: 80, ipod:20 },
            { year: '2011', iphone: 130, ipad: 100 ,  ipod:80},
            { year: '2012', iphone: 80, ipad: 60,  ipod:70 },
            { year: '2013', iphone: 70, ipad: 200,  ipod:140 },
            { year: '2014', iphone: 105, ipad: 100,  ipod:80 },
            { year: '2015', iphone: 180, ipad: 150 ,  ipod:40},
            { year: '2016', iphone: 250, ipad: 150,  ipod:200 } 
        ],
        xkey: 'year',
        ykeys: ['iphone', 'ipad','ipod'],
        labels: ['iphone', 'iphone','iphone'],
        resize: true,
        lineColors: ['#00A5A8','#3CB7EB','#6E8CD7'],
		hideHover: 'auto',
    });
		
	  
	   var m2 = new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'line-chart',
        // Chart data records -- each entry in this array corresponds to a point on
        // the chart.
        data: [
            { y: '2006', a: 50, b: 0 },
            { y: '2007', a: 60,  b: 25 },
            { y: '2008', a: 45,  b: 30 },
            { y: '2009', a: 40,  b: 20 },
            { y: '2010', a: 50,  b: 35 },
            { y: '2011', a: 60,  b: 50 },
            { y: '2012', a: 65, b: 55 }
        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B'],
        gridTextColor: 'rgba(255,255,255,0.5)',
        lineColors: ['#fff', '#fdd2a4'],
        lineWidth: '2px',
        hideHover: 'always',
        smooth: false,
        grid: false
   });
	
	
	// Trigger Resize in Morris Chart
   var delay = (function() {
		var timer = 0;
		return function(callback, ms) {
			clearTimeout(timer);
			timer = setTimeout(callback, ms);
		};
    })();
	  	 
 })
 
  Morris.Bar({
        element: 'total-revenue',
        data: [
            { year: '2010', a: 30, b: 25 },
            { year: '2011', a: 60, b: 40 },
            { year: '2012', a: 85, b: 65 },
            { year: '2013', a: 100, b: 90 },
            { year: '2014', a: 60, b: 50 },
            { year: '2015', a: 75, b: 65 },
            { year: '2016', a: 100, b: 90 } 
        ],
        xkey: 'year',
        ykeys: ['a', 'b'],
        labels: ['Laptops', 'Mobiles'],
        barRatio: 0.4,
        xLabelAngle: 0,
        hideHover: 'auto',
        barColors: ['#00A5A8','#3CB7EB'],
        resize: true
    });	