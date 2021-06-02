<!DOCTYPE html>
<html>
<head>
<title>Accuracy Live Graph</title>
<style type="text/css">
    BODY
    {
        width: 99%;
        background-image: url("../PicturesHome/blacktopo.jpg");
    }

    #chart-container 
    {
        width: 100%;
        height: auto;
        background-color: whitesmoke;    
    }
</style>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/Chart.min.js"></script>
<link rel="icon" href="../PicturesHome/logo.png" sizes="16x16 32x32" type="image/png">
</head>
<body>
    <br>

    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
    </div>

    <script>
        //accuracy graph
        $(document).ready(function () {
            showGraph();
        });

        function showGraph()
        {
            {
                $.post("dataAccuracy.php",
                function (data)
                {
                    console.log(data);
                    var weaponname = [];
                    var accuracy = [];

                    for (var i in data) {
                        weaponname.push(data[i].weaponname);
                        accuracy.push(data[i].accuracy);
                    }

                    var chartdata = {
                        labels: weaponname,
                        datasets: [
                            {
                                label: 'Weapon Accuracy',
                                backgroundColor: '#577146',
                                borderColor: '#75afea',
                                hoverBackgroundColor: '#75afea',
                                hoverBorderColor: '##75afea',
                                data: accuracy
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
</body>
</html>