

$(document).ready(function () {
    $.ajax({
        url: "chart.php",
        type: "GET",
        success: function (data) {
            console.log(data);
            var products = JSON.parse(data)
            var foods = [];
            var quantities = [];
            for (var pdt in products) {
                foods.push(products[pdt]["name"]);
                quantities.push(products[pdt]["quantity"]);
            }
            console.log(foods);
            console.log(quantities);





var ctx = document.getElementById('myChart').getContext('2d');
var earning = document.getElementById('earning').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
    data: {
        labels: foods,
        datasets: [{
            label: '# of Votes',
            data: quantities,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            
        }]
    },
    options: {
       responsive:true,
    }
});

var earning = new Chart(earning, {
    type: 'bar',
    data: {
        labels:foods,
        datasets: [{
            label: 'Amount in stock',
            data: quantities,
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            
        }]
    },
    options: {
        responsive:true,
    }
});

        },
        error: function (data) {
            console.log("error",data);
        }
    });




    //sdfgtchuijo

    $.ajax({
        url: "chart.php",
        type: "GET",
        success: function (data) {
            console.log(data);
            var products = JSON.parse(data)
            var foods = [];
            var expense = [];
            for (var pdt in products) {
                foods.push(products[pdt]["name"]);
                expense.push(products[pdt]["price"]);
            }
            console.log(foods);
            console.log(expense);





        var expenses = document.getElementById('expenses').getContext('2d');
        var expenses2 = document.getElementById('expenses2').getContext('2d');
        var expenses = new Chart(expenses, {
            type: 'polarArea',
            data: {
                labels: foods,
                datasets: [{
                    label: 'Money Spent',
                    data: expense,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    
                }]
            },
            options: {
            responsive:true,
            }
        });

        var expenses2 = new Chart(expenses2, {
            type: 'bar',
            data: {
                labels:foods,
                datasets: [{
                    label: 'Amount in stock',
                    data: expense,
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    
                }]
            },
            options: {
                responsive:true,
            }
        });

                },
                error: function (data) {
                    console.log("error",data);
                }
            });



    

});



