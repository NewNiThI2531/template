// Data retrieved from https://olympics.com/en/olympic-games/beijing-2022/medals
Highcharts.setOptions({
  colors: ['#153050', '#C5A254', '#FFFFFF', '#424242']
});
Highcharts.chart('container', {
  chart: {
      type: 'pie',
      backgroundColor: 'none',
      height:200,
      
  },
  title: {
      text: '',
      align: 'left'
  },
  
  plotOptions: {
      pie: {
          innerSize: 100,
          depth: 45,
          
          dataLabels: {
              enabled: false,
              
          },
          
          showInLegend: true
          
      }
  },
  legend: {
      itemStyle: {
          color: 'white',
          fontSize: '16px'
      },

      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle',
      x: -130,
      y: 0,
      floating: true,
      // borderWidth: 1,
      itemMarginTop: 10,
      itemMarginBottom: 10,
      fontWeight: 'bold',
      fontSize: '100px'
      
  },
  series: [{
      borderWidth: 0,

      name: 'Medals',
      data: [
          ['COMMERCIAL 1', 14],
          ['COMMERCIAL 2', 25],
          ['COMMERCIAL 3', 11],
          ['COMMERCIAL 4', 50],
          

      ]
  }],
  responsive:{
      rules:[{
          condition: {
              maxWidth: 1000
            },chartOptions: {
              legend: {
                  layout: 'vertical',
                  align: 'right',
                  verticalAlign: 'middle',
                  x: 0,
                  y: 0,
              },}
      }]
  }
});