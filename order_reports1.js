
$(document).ready(function(){
    $.ajax({
      url: "get_order_reports1.php",
      method: "GET",
      success: function(data) {
        let classify = (a) => {
            if(a == 0){return 'Pending'}
            if(a == 1){return 'Complete'}
            if(a == 2){return 'Billed'}
        }
        var products = JSON.parse(data)
            var names = [];
            var quantities = [];
            for (var pdt in products) {
                names.push(classify(products[pdt]["order_status"]));
                quantities.push(products[pdt]["number"]);
            }
        

       

    
  
        var chartdata = {
          labels: names,
          datasets : [
            {
              label: 'Order Type',
              backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
              borderColor: 'rgba(233, 108, 106, 0.75)',
              hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
              hoverBorderColor: 'rgba(200, 200, 200, 1)',
              data: quantities
            }
          ]
        };
  
        var ctx = $("#mycanvas2");
        var ctx1 = $("#mycanvas3");
  
        var lineGraph = new Chart(ctx, {
          type: 'line',
          data: chartdata
        });
        var pieGraph = new Chart(ctx1, {
            type: 'pie',
            data: chartdata
          });
      },
      error: function(data) {
        console.log(data);
      }
      
    });
    
  });