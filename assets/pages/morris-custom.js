
Morris.Area({
element: 'morris1',
data: [{
			period: '2010',
			iphone: 0,
			ipad: 0,
			itouch: 0
		}, {
			period: '2011',
			iphone: 160,
			ipad: 120,
			itouch: 80
		}, {
			period: '2012',
			iphone:80,
			ipad: 70,
			itouch: 30
		}, {
			period: '2013',
			iphone:160,
			ipad: 120,
			itouch:90
		}, {
			period: '2014',
			iphone:60,
			ipad: 40,
			itouch: 30
		}, {
			period: '2015',
			iphone:150,
			ipad: 100,
			itouch: 80
		}, {
			period: '2016',
			iphone:80,
			ipad: 40,
			itouch:0
		}


		],
		lineColors: ['#A2F3F2', '#94E3E2', '#6BDAF6'],
		xkey: 'period',
		ykeys: ['iphone', 'ipad', 'itouch'],
		labels: ['iphone', 'ipad', 'itouch'],
		pointSize: 0,
		lineWidth: 0,
		resize:true,
		fillOpacity: 0.9,
		behaveLikeLine: true,
		gridLineColor: '#e0e0e0',
		hideHover: 'auto'

});
	
	
	
	
	
Morris.Bar({
	element: 'morris2',
	data: [
		{ year: '2010', a: 30, b: 60 },
		{ year: '2011', a:80, b: 120 },
		{ year: '2012', a: 130, b:150 },
		{ year: '2013', a: 90, b: 110 },
		{ year: '2014', a: 130, b: 150 },
		{ year: '2015', a: 120, b: 140 },
		{ year: '2016', a: 165, b: 190 } 
	],
	xkey: 'year',
	ykeys: ['a', 'b'],
	labels: ['a', 'b'],
	barSizeRatio:0.40,
	hideHover: 'auto',
	barColors: ['#00A5A8','#40D3C9'],
	resize: true
});
    
	
	
	
Morris.Line({
	element: 'morris3',
	data: [
		{ year: '2010', a: 25, b: 15, c:2 },
		{ year: '2011', a: 50, b: 40 ,  c:25},
		{ year: '2012', a: 75, b: 65,  c:55 },
		{ year: '2013', a: 100, b: 90,  c:75 },
		{ year: '2014', a: 60, b: 50,  c:35 },
		{ year: '2015', a: 75, b: 65 ,  c:55},
		{ year: '2016', a: 100, b: 90,  c:75 } 
	],
	xkey: 'year',
	ykeys: ['a', 'b','c'],
	labels: ['a', 'b','c'],
	resize: true,
	 hideHover: 'auto',
	lineColors: ['#00A5A8','#0C938E','#40D3C9']
});
    
	
	
	
 Morris.Donut({
	element: 'morris4',
	data: [
		{label: 'Javascript', value: 45 },
		{label: 'HTML5', value: 60 },
		{label: 'CSS3', value: 90 },
		{label: 'PHP', value: 55 }
	],
	
	resize: true,
	
	colors: ['#61EEE9', '#0C938E', '#28D8BE','#00A5A8'],
 });
