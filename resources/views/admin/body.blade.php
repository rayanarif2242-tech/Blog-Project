
<div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        <section class="no-padding-top no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-1"></i></div><strong>New Clients</strong>
                    </div>
                    <div class="number dashtext-1">27</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-contract"></i></div><strong>New Projects</strong>
                    </div>
                    <div class="number dashtext-2">375</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-2"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-paper-and-pencil"></i></div><strong>New Invoices</strong>
                    </div>
                    <div class="number dashtext-3">140</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-writing-whiteboard"></i></div><strong>All Projects</strong>
                    </div>
                    <div class="number dashtext-4">41</div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="bar-chart block no-margin-bottom" style="height: 250px;">
                  <canvas id="barChartExample1"></canvas>
                </div>
                <div class="bar-chart block" style="height: 250px;">
                  <canvas id="barChartExample2"></canvas>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="line-chart block" style="height: 350px;">
                  <canvas id="lineChart"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="stats-2-block block d-flex">
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow low"><i class="fa fa-caret-down"></i></div>
                    <div class="stats-2-content"><strong class="d-block">5.657</strong><span class="d-block">Standard Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 60%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-2"></div>
                      </div>
                    </div>
                  </div>
                  <div class="stats-2 d-flex">
                    <div class="stats-2-arrow height"><i class="fa fa-caret-up"></i></div>
                    <div class="stats-2-content"><strong class="d-block">3.1459</strong><span class="d-block">Team Scans</span>
                      <div class="progress progress-template progress-small">
                        <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-3"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="stats-3-block block d-flex">
                  <div class="stats-3"><strong class="d-block">745</strong><span class="d-block">Total requests</span>
                    <div class="progress progress-template progress-small">
                      <div role="progressbar" style="width: 35%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template progress-bar-small dashbg-1"></div>
                    </div>
                  </div>
                  <div class="stats-3 d-flex justify-content-between text-center">
                    <div class="item"><strong class="d-block strong-sm">4.124</strong><span class="d-block span-sm">Threats</span>
                      <div class="line"></div><small>+246</small>
                    </div>
                    <div class="item"><strong class="d-block strong-sm">2.147</strong><span class="d-block span-sm">Neutral</span>
                      <div class="line"></div><small>+416</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="drills-chart block">
                  <canvas id="lineChart1"></canvas>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="user-block block text-center">
                 <div class="avatar"><img src="{{ asset('admincss/img/avatar-1.jpg') }}" alt="..." class="img-fluid">
                    <div class="order dashbg-2">1st</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Richard Nevoreski</h3><span>@richardnevo</span></a>
                  <div class="contributions">950 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>340</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>460</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="user-block block text-center">
              <div class="avatar"><img src="{{ asset('admincss/img/avatar-4.jpg') }}" alt="..." class="img-fluid">
                    <div class="order dashbg-1">2nd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Samuel Watson</h3><span>@samwatson</span></a>
                  <div class="contributions">772 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>80</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>420</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>272</strong></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="user-block block text-center">
                  <div class="avatar"><img src="img/avatar-6.jpg" alt="..." class="img-fluid">
                    <div class="order dashbg-4">3rd</div>
                  </div><a href="#" class="user-title">
                    <h3 class="h5">Sebastian Wood</h3><span>@sebastian</span></a>
                  <div class="contributions">620 Contributions</div>
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>280</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>190</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">4th</div>
                  
                  <div class="avatar"> <img src="{{ asset('admincss/img/avatar-1.jpg') }}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Tomas Hecktor</strong><span class="d-block">@tomhecktor</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">410 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>110</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>200</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>100</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">5th</div>
                 <div class="avatar"> <img src="{{ asset('admincss/img/avatar-2.jpg') }}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Alexander Shelby</strong><span class="d-block">@alexshelby</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">320 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>150</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>120</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>50</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="public-user-block block">
              <div class="row d-flex align-items-center">
                <div class="col-lg-4 d-flex align-items-center">
                  <div class="order">6th</div>
              <div class="avatar"> <img src="{{ asset('admincss/img/avatar-6.jpg') }}" alt="..." class="img-fluid"></div><a href="#" class="name"><strong class="d-block">Arther Kooper</strong><span class="d-block">@artherkooper</span></a>
                </div>
                <div class="col-lg-4 text-center">
                  <div class="contributions">170 Contributions</div>
                </div>
                <div class="col-lg-4">
                  <div class="details d-flex">
                    <div class="item"><i class="icon-info"></i><strong>60</strong></div>
                    <div class="item"><i class="fa fa-gg"></i><strong>70</strong></div>
                    <div class="item"><i class="icon-flow-branch"></i><strong>40</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="margin-bottom-sm">
          <div class="container-fluid">
            <div class="row d-flex align-items-stretch">
              <div class="col-lg-4">
                <div class="stats-with-chart-1 block">
                  <div class="title"> <strong class="d-block">Sales Difference</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="row d-flex align-items-end justify-content-between">
                    <div class="col-5">
                      <div class="text"><strong class="d-block dashtext-3">$740</strong><span class="d-block">May 2017</span><small class="d-block">320 Sales</small></div>
                    </div>
                    <div class="col-7">
                      <div class="bar-chart chart">
                        <canvas id="salesBarChart1"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-1 block">
                  <div class="title"> <strong class="d-block">Visit Statistics</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="row d-flex align-items-end justify-content-between">
                    <div class="col-4">
                      <div class="text"><strong class="d-block dashtext-1">$457</strong><span class="d-block">May 2017</span><small class="d-block">210 Sales</small></div>
                    </div>
                    <div class="col-8">
                      <div class="bar-chart chart">
                        <canvas id="visitPieChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-1 block">
                  <div class="title"> <strong class="d-block">Sales Activities</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="row d-flex align-items-end justify-content-between">
                    <div class="col-5">
                      <div class="text"><strong class="d-block dashtext-2">80%</strong><span class="d-block">May 2017</span><small class="d-block">+35 Sales</small></div>
                    </div>
                    <div class="col-7">
                      <div class="bar-chart chart">
                        <canvas id="salesBarChart2"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="checklist-block block">
                  <div class="title"><strong>To Do List</strong></div>
                  <div class="checklist">
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-1" name="input-1" class="checkbox-template">
                      <label for="input-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-2" name="input-2" checked class="checkbox-template">
                      <label for="input-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-3" name="input-3" class="checkbox-template">
                      <label for="input-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-4" name="input-4" class="checkbox-template">
                      <label for="input-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-5" name="input-5" class="checkbox-template">
                      <label for="input-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                    </div>
                    <div class="item d-flex align-items-center">
                      <input type="checkbox" id="input-6" name="input-6" class="checkbox-template">
                      <label for="input-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="messages-block block">
                  <div class="title"><strong>New Messages</strong></div>
                  <div class="messages"><a href="#" class="message d-flex align-items-center">
                     <div class="profile"><img src="{{ asset('admincss/img/avatar-3.jpg') }}" alt="..." class="img-fluid">
                        <div class="status online"></div>
                      </div>
                      <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a><a href="#" class="message d-flex align-items-center">
                      <div class="profile"><img src="{{ asset('admincss/img/avatar-2.jpg') }}" alt="..." class="img-fluid">
                        <div class="status away"></div>
                      </div>
                      <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a><a href="#" class="message d-flex align-items-center">
                      <div class="profile"><img src="{{ asset('admincss/img/avatar-1.jpg') }}" alt="..." class="img-fluid">
                        <div class="status busy"></div>
                      </div>
                      <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a><a href="#" class="message d-flex align-items-center">
                     <div class="profile"><img src="{{ asset('admincss/img/avatar-5.jpg') }}" alt="..." class="img-fluid">
                        <div class="status offline"></div>
                      </div>
                      <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a><a href="#" class="message d-flex align-items-center">
                     <div class="profile"><img src="{{ asset('admincss/img/avatar-1.jpg') }}" alt="..." class="img-fluid">
                        <div class="status online"></div>
                      </div>
                      <div class="content">   <strong class="d-block">Nader Magdy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:47pm</small></div></a></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Credit Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome1"></canvas>
                    <div class="text"><strong class="d-block">$2.145</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Channel Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome2"></canvas>
                    <div class="text"><strong class="d-block">$7.784</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="stats-with-chart-2 block">
                  <div class="title"><strong class="d-block">Direct Sales</strong><span class="d-block">Lorem ipsum dolor sit</span></div>
                  <div class="piechart chart">
                    <canvas id="pieChartHome3"></canvas>
                    <div class="text"><strong class="d-block">$4.957</strong><span class="d-block">Sales</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Helper for common options
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        plugins: { legend: { display: false } },
        scales: {
            y: { display: false },
            x: { display: false }
        }
    };

    // 1. MAIN LINE CHART (The large one on the right)
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
        type: 'line',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [
                {
                    label: "Page Visitors",
                    fill: true,
                    backgroundColor: 'rgba(134, 77, 217, 0.1)',
                    borderColor: '#864DD9', // Purple
                    pointBorderColor: '#864DD9',
                    data: [20, 40, 35, 55, 45, 70, 60],
                },
                {
                    label: "Page Views",
                    fill: true,
                    backgroundColor: 'rgba(134, 77, 217, 0.1)',
                    borderColor: '#EF7F9F', // Pink
                    pointBorderColor: '#EF7F9F',
                    data: [40, 25, 60, 40, 85, 35, 70],
                }
            ]
        },
        options: {
            scales: {
                x: { grid: { display: false, drawBorder: false }, ticks: { color: '#8a8d93' } },
                y: { grid: { display: true, color: '#34373c' }, ticks: { color: '#8a8d93' } }
            },
            plugins: { legend: { labels: { color: '#8a8d93' } } }
        }
    });

    // 2. BAR CHART EXAMPLE 1 (Purple Bars)
    const bar1 = document.getElementById('barChartExample1').getContext('2d');
    new Chart(bar1, {
        type: 'bar',
        data: {
            labels: ["A", "B", "C", "D", "E", "F"],
            datasets: [{
                backgroundColor: '#864DD9',
                data: [65, 59, 80, 81, 56, 55]
            }]
        },
        options: commonOptions
    });

    // 3. BAR CHART EXAMPLE 2 (Pink Bars)
    const bar2 = document.getElementById('barChartExample2').getContext('2d');
    new Chart(bar2, {
        type: 'bar',
        data: {
            labels: ["A", "B", "C", "D", "E", "F"],
            datasets: [{
                backgroundColor: '#EF7F9F',
                data: [45, 39, 60, 21, 46, 35]
            }]
        },
        options: commonOptions
    });

    // 4. SMALL PIE CHARTS (Bottom section)
    ['pieChartHome1', 'pieChartHome2', 'pieChartHome3'].forEach((id, index) => {
        const colors = [['#864DD9', '#2d3035'], ['#EF7F9F', '#2d3035'], ['#5E5FE3', '#2d3035']];
        new Chart(document.getElementById(id).getContext('2d'), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: [70, 30],
                    backgroundColor: colors[index],
                    borderWidth: 0
                }]
            },
            options: { cutout: '80%', plugins: { legend: { display: false } } }
        });
    });
});
</script>