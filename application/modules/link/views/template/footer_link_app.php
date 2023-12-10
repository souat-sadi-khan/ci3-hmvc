
<script src="<?= base_url() . 'assets/js/base.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/chart.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/page.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/toastr.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/dropify.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/select2.min.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/date.js' ?>"></script>
<script src="<?= base_url() . 'assets/js/sweet-alert.min.js' ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
<script src="<?= site_url('assets/js/main.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $(function() {

        var data = {
        labels: ["2013", "2014", "2014", "2015", "2016", "2017"],
        datasets: [{
            label: '# of Votes',
            data: [10, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1,
            fill: false
        }]
    };

        var multiLineData = {
        labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
        datasets: [{
            label: 'Dataset 1',
            data: [12, 19, 3, 5, 2, 3],
            borderColor: [
            '#587ce4'
            ],
            borderWidth: 2,
            fill: false
        },
        {
            label: 'Dataset 2',
            data: [5, 23, 7, 12, 42, 23],
            borderColor: [
            '#ede190'
            ],
            borderWidth: 2,
            fill: false
        },
        {
            label: 'Dataset 3',
            data: [15, 10, 21, 32, 12, 33],
            borderColor: [
            '#f44252'
            ],
            borderWidth: 2,
            fill: false
        }
        ]
    };
    var options = {
        scales: {
        yAxes: [{
            ticks: {
            beginAtZero: true
            }
        }]
        },
        legend: {
        display: false
        },
        elements: {
        point: {
            radius: 0
        }
        }

    };
    var doughnutPieData = {
        datasets: [{
        data: [30, 40, 30],
        backgroundColor: [
            'rgba(255, 99, 132, 0.5)',
            'rgba(54, 162, 235, 0.5)',
            'rgba(255, 206, 86, 0.5)',
            'rgba(75, 192, 192, 0.5)',
            'rgba(153, 102, 255, 0.5)',
            'rgba(255, 159, 64, 0.5)'
        ],
        borderColor: [
            'rgba(255,99,132,1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
            'rgba(153, 102, 255, 1)',
            'rgba(255, 159, 64, 1)'
        ],
        }],

        // These labels appear in the legend and in the tooltips when hovering different arcs
        labels: [
        'Pink',
        'Blue',
        'Yellow',
        ]
    };

    var doughnutPieOptions = {
    responsive: true,
    animation: {
      animateScale: true,
      animateRotate: true
    }
  };
  
    // Get context with jQuery - using jQuery's .get() method.
    if ($("#barChart").length) {
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var barChart = new Chart(barChartCanvas, {
        type: 'bar',
        data: data,
        options: options
        });
    }

    if ($("#lineChart").length) {
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: data,
        options: options
        });
    }


    if ($("#pieChart").length) {
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas, {
            type: 'pie',
            data: doughnutPieData,
            options: doughnutPieOptions
        });
    }
});
</script>
<?php
if (function_exists('pageRequiredScript')) :
    pageRequiredScript();
endif;
?>
</body>
</html>