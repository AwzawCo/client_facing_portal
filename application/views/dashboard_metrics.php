<head>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script> -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>
<body>
<div id="loadingIcon" class="container"  style="max-width: 1800px">
<img src="<?php echo base_url();?>/assets/img/loading_icon.gif">
</div>
    <div id="mainDiv" class="container-fluid" hidden>
        <div class="row">
            <div class="col-md-12">
                <h6>Ratio of Bids Won to Total Bids</h6>
                <p><span id="bidsWon">0</span>/<span id="bidsTotal">0</span></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <h6>Chart Average Hours to Submit a Bid in under a Day</h6>
                <span id="averageBidsDaily">0</span>
                <p class="columnChart" id="columnChartDaily"></p>
            </div>
            <div class="col-lg-4">
                <h6>Chart Average Days to Submit a Bid in under a Week</h6>
                <span id="averageBidsWeekly">0</span>
                <p class="columnChart" id="columnChartWeekly"></p>
            </div>
            <div class="col-lg-4">
                <h6>Chart Average Weeks to Submit a Bid in under a Month</h6>
                <span id="averageBidsMonthly">0</span>
                <p class="columnChart" id="columnChartMonthly"></p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h6>Total Bids used in Daily Chart</h6>
                <span id="totalBidsSentDay">0</span>
            </div>
            <div class="col-md-4">
                <h6>Total Bids used in Weekly Chart</h6>
                <span id="totalBidsSentWeek">0</span>
            </div>
            <div class="col-md-4">
                <h6>Total Bids used in Monthly Chart</h6>
                <span id="totalBidsSentMonth">0</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h6>Total Incoming Leads in Last 24 Hours</h6>
                <span id="totalIncomingLeadsDay">0</span>
            </div>
            <div class="col-md-4">
                <h6>Total Incoming Leads in Last Week</h6>
                <span id="totalIncomingLeadsWeek">0</span>
            </div>
            <div class="col-md-4">
                <h6>Total Incoming Leads in Last Month</h6>
                <span id="totalIncomingLeadsMonth">0</span>
            </div>
        </div>
    </div>
</body>

<style type="text/css">
    
    .col-md-12 {
        text-align: center;
    }

</style>

<script type="text/javascript">
    $(document).ready(function(){
// ***************************************************************************************

    // number animations 

        function numberAnimation(id, maxNum) {
            $({range: 0}).animate({range: maxNum}, {
                duration: 1000,
                easing:'swing', // can be anything
                step: function() { // called on every step
                    // Update the element's text with rounded-up value:
                    $('#'+id).text(commaSeparateNumber(Math.round(this.range)));
                }
            });
        }

        function commaSeparateNumber(val){
            while (/(\d+)(\d{3})/.test(val.toString())){
                val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
            }
            return val;
        }

// ***************************************************************************************

    // submitted quotes data

        var bidForm = new FormData();
        bidForm.append("token", "slkdjfvbnnoiurvhq34cvhqloeuirvhaqlo384f==");
        bidForm.append("query", "SELECT * FROM SubmittedQuotes;");

        var bidSettings = {
            "async": true,
            "crossDomain": true,
            "url": "/API/query",
            "method": "POST",
            "headers": {
                "cache-control": "no-cache",
                "postman-token": "3b4084df-9d14-0f61-c384-ecf12cbc0e4d"
            },
            "dataType": "json",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": bidForm
        }

        $.ajax(bidSettings).done(function (response) {
            console.log(response)
            var dailyBidsSubmitted = [
                ['Hour Submitted', 'Total Bids Submitted'],
                ['Hour: 1', 0],
                ['Hour: 2', 0],
                ['Hour: 3', 0],
                ['Hour: 4', 0],
                ['Hour: 5', 0],
                ['Hour: 6', 0],
                ['Hour: 7', 0],
                ['Hour: 8', 0],
                ['Hour: 9', 0],
                ['Hour: 10', 0],
                ['Hour: 11', 0],
                ['Hour: 12', 0],
                ['Hour: 13', 0],
                ['Hour: 14', 0],
                ['Hour: 15', 0],
                ['Hour: 16', 0],
                ['Hour: 17', 0],
                ['Hour: 18', 0],
                ['Hour: 19', 0],
                ['Hour: 20', 0],
                ['Hour: 21', 0],
                ['Hour: 22', 0],
                ['Hour: 23', 0]
            ]
            var weeklyBidsSubmitted = [
                ['Day Submitted', 'Total Bids Submitted'],
                ['Day: 1', 0],
                ['Day: 2', 0],
                ['Day: 3', 0],
                ['Day: 4', 0],
                ['Day: 5', 0],
                ['Day: 6', 0]
            ]

            var monthlyBidsSubmitted = [
                ['Week Submitted', 'Total Bids Submitted'],
                ['Week: 1', 0],
                ['Week: 2', 0],
                ['Week: 3', 0],
                ['Week: 4', 0],
                ['Week: 5', 0],
                ['Week: 6', 0]
            ]
            var start_bid,
                close_bid,
                elapsed,
                hour,
                bid,
                dailyTotal = 0,
                weeklyTotal = 0,
                monthlyTotal = 0,
                dailySum = 0,
                weeklySum = 0,
                monthlySum = 0,
                dailyAvg,
                weeklyAvg,
                monthlyAvg,
                totalBidsWon = 0;

            for (var i = 0; i < response.payload.length; i++) {
                bid = response.payload[i];
                start_bid = new Date(bid.timestamp);
                close_bid = new Date(bid.close_timestamp);
                // elapsed = (time difference) / miliseconds / seconds / minutes
                elapsed = (close_bid - start_bid) / 1000 / 60 / 60;
                if (elapsed < 24 && elapsed != 0) {
                    hour = Math.floor(elapsed); // to account for the shift in index
                    dailyBidsSubmitted[hour][1] += 1;
                    dailyTotal += 1;
                    dailySum += elapsed;
                } else if (elapsed > 24 && elapsed < 168) {
                    day = Math.floor(elapsed / 24 );
                    weeklyBidsSubmitted[day][1] += 1;
                    weeklyTotal += 1;
                    weeklySum += elapsed;
                } else if (elapsed > 168 && elapsed < 720) { // decided to per 30 days instead of monthly
                    week = Math.floor(elapsed / 24 / 4);
                    // console.log(monthlyBidsSubmitted[week])
                    monthlyBidsSubmitted[week][1] += 1;
                    monthlyTotal += 1;
                    monthlySum += elapsed;
                }
                if (bid.status == 'Won') {
                    console.log(bid);
                    totalBidsWon += 1;
                }
            }

            dailyAvg = dailySum / dailyTotal;
            weeklyAvg = weeklySum / weeklyTotal / 24;
            monthlyAvg = monthlySum / monthlyTotal / 24 / 4;

            var icon = document.getElementById("loadingIcon");
            icon.parentNode.removeChild(icon);
            document.getElementById("mainDiv").hidden = false;

            numberAnimation("bidsWon", totalBidsWon)
            numberAnimation("bidsTotal", response.payload.length)

            numberAnimation("averageBidsDaily", dailyAvg);
            numberAnimation("averageBidsWeekly", weeklyAvg);
            numberAnimation("averageBidsMonthly", monthlyAvg);

            numberAnimation("totalBidsSentDay", dailyTotal);
            numberAnimation("totalBidsSentWeek", weeklyTotal);
            numberAnimation("totalBidsSentMonth", monthlyTotal);

            dailyChart();
            weeklyChart();
            monthlyChart();

            function dailyChart() {
                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawDailyChart);
                function drawDailyChart() {
                    var data = google.visualization.arrayToDataTable(dailyBidsSubmitted);

                    var options = {
                        title: 'Number of Bids Submitted in a Day per Hour',
                        legend: { position: 'none' },
                        chartArea: {width: 350},
                        hAxis: {
                            ticks: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]
                        },
                        bar: {gap: 1},
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('columnChartDaily'));
                    chart.draw(data, options);
                }
            }

            function weeklyChart() {
                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawWeeklyChart);
                function drawWeeklyChart() {
                    var data = google.visualization.arrayToDataTable(weeklyBidsSubmitted);

                    var options = {
                        title: 'Number of Bids Submitted in a Week per Day',
                        legend: { position: 'none' },
                        chartArea: {width: 350},
                        // hAxis: {
                        //     ticks: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]
                        // },
                        bar: {gap: 1},
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('columnChartWeekly'));
                    chart.draw(data, options);
                }
            }

            function monthlyChart() {
                google.charts.load("current", {packages:["corechart"]});
                google.charts.setOnLoadCallback(drawMonthlyChart);
                function drawMonthlyChart() {
                    var data = google.visualization.arrayToDataTable(monthlyBidsSubmitted);

                    var options = {
                        title: 'Number of Bids Submitted in a Month per Week',
                        legend: { position: 'none' },
                        chartArea: {width: 350},
                        // hAxis: {
                        //     ticks: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23]
                        // },
                        bar: {gap: 1},
                    };

                    var chart = new google.visualization.ColumnChart(document.getElementById('columnChartMonthly'));
                    chart.draw(data, options);
                }
            }
        });
// ***************************************************************************************
    
    // Lead Data

        var leadForm = new FormData();
        leadForm.append("token", "slkdjfvbnnoiurvhq34cvhqloeuirvhaqlo384f==");
        leadForm.append("query", "SELECT * FROM ActiveRequests;");

        var bidSettings = {
            "async": true,
            "crossDomain": true,
            "url": "/API/query",
            "method": "POST",
            "headers": {
                "cache-control": "no-cache",
            },
            "dataType": "json",
            "processData": false,
            "contentType": false,
            "mimeType": "multipart/form-data",
            "data": leadForm
        }

        $.ajax(bidSettings).done(function (response) {

            var totalLeadsDaily = 0,
                totalLeadsWeekly = 0,
                totalLeadsMonthly = 0,
                now = Date.now(),
                open;

            for (var i = 0; i < response.payload.length; i++) {
                lead = response.payload[i];
                open = new Date(lead.timestamp);
                elapsed = (now - open) / 1000 / 60 / 60;
                if (elapsed < 24) {
                    totalLeadsDaily += 1;
                }
                if (elapsed < 168) {
                    totalLeadsWeekly += 1;
                }
                if (elapsed < 720) { 
                    totalLeadsMonthly += 1;
                }
            }
                      
            numberAnimation("totalIncomingLeadsDay", totalLeadsDaily);
            numberAnimation("totalIncomingLeadsWeek", totalLeadsWeekly);
            numberAnimation("totalIncomingLeadsMonth", totalLeadsMonthly);

        });
    });



</script>