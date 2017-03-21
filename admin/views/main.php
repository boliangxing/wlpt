<?php $this->load->view('header');?>

<div class="row  border-bottom white-bg dashboard-header">

    <div class="col-sm-3">
        <h2>欢迎<?php $arr=$_SESSION['user']; echo $arr[0]['name'] ;?> </h2>
        <small>您有<?php $list=$_SESSION['mail']; echo count($list);?>条消息和0条通知.</small>
        <ul class="list-group clear-list m-t">
            <li class="list-group-item fist-item">
                <span class="pull-right">
                    09:00 pm
                </span>
                <span class="label label-success">1</span> 请与我联系

            </li>
            <li class="list-group-item">
                <span class="pull-right">
                    10:16 am
                </span>
                <span class="label label-info">2</span>签合同

            </li>
            <li class="list-group-item">
                <span class="pull-right">
                    08:22 pm
                </span>
                <span class="label label-primary">3</span> 开新商店
            </li>
            <li class="list-group-item">
                <span class="pull-right">
                    11:06 pm
                </span>
                <span class="label label-default">4</span> 呼唤希尔维亚
            </li>
            <li class="list-group-item">
                <span class="pull-right">
                    12:00 am
                </span>
                <span class="label label-primary">5</span>给桑德拉写一封信
            </li>
        </ul>
    </div>
    <div class="col-sm-6">
        <div class="flot-chart dashboard-chart">
            <div class="flot-chart-content" id="flot-dashboard-chart"></div>
        </div>
        <div class="row text-left">
            <div class="col-xs-4">
                <div class=" m-l-md">
                <span class="h4 font-bold m-t block">$ 406,100</span>
                <small class="text-muted m-b block">销售报告
</small>
                </div>
            </div>
            <div class="col-xs-4">
                <span class="h4 font-bold m-t block">$ 150,401</span>
                <small class="text-muted m-b block">年销售收入</small>
            </div>
            <div class="col-xs-4">
                <span class="h4 font-bold m-t block">$ 16,822</span>
                <small class="text-muted m-b block">半年收入利润率</small>
            </div>

        </div>
    </div>
    <div class="col-sm-3">
        <div class="statistic-box">
        <h4>
          项目测试进度
        </h4>
        <p>
      你有两个项目不compleated任务。
        </p>
            <div class="row text-center">
                <div class="col-lg-6">
                    <canvas id="polarChart" width="80" height="80"></canvas>
                    <h5 >科特勒
</h5>
                </div>
                <div class="col-lg-6">
                    <canvas id="doughnutChart" width="78" height="78"></canvas>
                    <h5 >迈拓
</h5>
                </div>
            </div>
            <div class="m-t">
                <small>乱数假文只是印刷排版业虚拟文本。</small>
            </div>

        </div>
    </div>

</div>




<?php $this->load->view('footer');?>


    <script>
        $(document).ready(function() {
            setTimeout(function() {
                toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
                toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

            }, 1300);


            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
            ];
            var data2 = [
                [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
            ];
            $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
                data1, data2
            ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            tickColor: "#d5d5d5",
                            borderWidth: 1,
                            color: '#d5d5d5'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                            ticks: 4
                        },
                        tooltip: false
                    }
            );

            var doughnutData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 50,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 100,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
                }
            ];

            var doughnutOptions = {
                segmentShowStroke: true,
                segmentStrokeColor: "#fff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 45, // This is 0 for Pie charts
                animationSteps: 100,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false
            };

            var ctx = document.getElementById("doughnutChart").getContext("2d");
            var DoughnutChart = new Chart(ctx).Doughnut(doughnutData, doughnutOptions);

            var polarData = [
                {
                    value: 300,
                    color: "#a3e1d4",
                    highlight: "#1ab394",
                    label: "App"
                },
                {
                    value: 140,
                    color: "#dedede",
                    highlight: "#1ab394",
                    label: "Software"
                },
                {
                    value: 200,
                    color: "#A4CEE8",
                    highlight: "#1ab394",
                    label: "Laptop"
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
                animateScale: false
            };
            var ctx = document.getElementById("polarChart").getContext("2d");
            var Polarchart = new Chart(ctx).PolarArea(polarData, polarOptions);

        });
    </script>
</body>
</html>
