<?php
  session_start();
  if(session_status()===PHP_SESSION_NONE){
    echo "session not active";
  }

  if(!isset($_SESSION['user'])){
    header("Location: login.php?error=please login first");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en" class="dark">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bracedev CEO | Dashboard</title>

  <link rel="stylesheet" href="dash.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="darkMode.css">
  <link rel="stylesheet" href="settings.css">
  <link rel="stylesheet" href="Team.css">
  <link rel="stylesheet" href="Analysis.css">

  <link rel="stylesheet" href="reports.css">
  <link rel="stylesheet" href="Templates.css">

  <link rel="shortcut icon" href="./Svg/B.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    integrity="sha512-d0D+Mdnrc5P37LoIW7Zf4smhdFobVDJ6VR8yN0ebQkMphOlM8GLxIz2M3gqbdV8kpYkUog9k3K6L+RxVRFlhjQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>

  <div class="bracedev--container">
    <div class="header--navigation">
      <div class="company--header">
        <h3>BracedevCompany</h3>
      </div>
      <div class="product--search--nav">
        <i class="material-icons">search</i>
        <input type="text" id="searchBar" placeholder="Search product...">
      </div>
      <div class="reminder--user">
        <i class="material-icons">notifications</i>
        <i class="material-icons">person</i>
      </div>



    </div>


    <div class="content--display">
      <div class="right--side--nav">
        <div class="menu">
          <p style="margin-bottom: 20px; display: flex;align-items: center;"><i class="material-icons">menu</i> &nbsp; Menu</p>

          <div class="navigation--buttons">
            <button class="menu-btn active" onclick="navigatePages('dashboard', this)"><i class="material-icons">dashboard</i>Dashboard</button>
            <button class="menu-btn" onclick="navigatePages('Teammates', this)"><i class="material-icons">groups</i> Team</button>
            <button class="menu-btn" onclick="navigatePages('Customer', this)"><i class="material-icons">people</i>Customers</button>
            <button class="menu-btn" onclick="navigatePages('Analytics', this)"><i class="material-icons">insights</i>Analytics</button>
            <button class="menu-btn" onclick="navigatePages('Reports', this)"><i class="material-icons">bar_chart</i>Reports</button>
            <button class="menu-btn" onclick="navigatePages('Calender', this)"><i class="material-icons">calendar_today</i>Calender</button>
            <button class="menu-btn" onclick="navigatePages('Feedback', this)"><i class="material-icons">feedback</i>Feedback</button>
            <button class="menu-btn" onclick="navigatePages('Templates', this)"><i class="material-icons">view_module</i>Templates</button>

          </div>

        </div>

        <div class="General" style="margin-top: 15px;">
          <p style="margin-bottom: 20px;">General</p>

          <div class="navigation--buttons">
            <button class="menu-btn" onclick="navigatePages('Settings', this)">
              <i class="material-icons">settings</i>Settings</button>
            <button class="menu-btn"><i class="material-icons">logout</i>
              <a href="login.php">Log Out</a></button> 

          </div>

        </div>
      </div>
      <div class="left--side--nav">

        <!-- DASHBOARD START -->

        <div id="dashboard" class="page">

          <div class="dashboard--header">
            <h1>Sales Overview</h1>
            <div class="date">
              <h3 id="dates">21st Feb, 2025</h3>
            </div>
          </div>

          <div class="dashboard--sales">

            <div class="total--sales">
              <div class="total--sales--header">
                <p>Total Sales</p>
                <i class="material-icons">shopping_cart</i>
              </div>
              <div class="sales--number">
                <p style="font-size:35px;">2500</p>
                <p
                  style="font-size:10px; border-radius: 10px; background:#cccccc; border-radius: 10px; padding: 5px 10px;">
                  4.9%</p>
              </div>
              <div class="previous--month--sales">
                <p style="font-size: 13px;">Last month: 2345</p>
              </div>
            </div>

            <div class="total--customers">
              <div class="total--customers--header">
                <p>New Customer</p>
                <i class="material-icons">people</i>
              </div>
              <div class="customers--number">
                <p style="font-size:35px;">250</p>
                <p style="font-size:10px;  border-radius: 10px; padding: 5px 10px; background: rgb(233, 191, 84);">7.9%
                </p>
              </div>
              <div class="previous--customers--number">
                <p style="font-size: 13px;">Last month: 110</p>
              </div>
            </div>

            <div class="total--products">
              <div class="total--products--header">
                <p>Returned Products</p>
                <i class="material-icons">inventory_2</i>
              </div>
              <div class="products--number">
                <p style="font-size:35px;">80</p>
                <p style="font-size:10px; border-radius: 10px; padding: 5px 10px; background-color: #ccc;">4.9%</p>
              </div>
              <div class="previous--products--sales">
                <p style="font-size: 13px;">Last month: 60</p>
              </div>
            </div>

            <div class="total--revenue">
              <div class="total--revenue--header">
                <p>Total Revenue</p>
                <i class="material-icons">attach_money</i>
              </div>
              <div class="revenue--number">
                <p style="font-size:35px;">$82,500.64</p>
                <p style="font-size:10px; border-radius: 10px; padding: 5px 10px; background-color: rgb(233, 191, 84);">
                  4.9%</p>
              </div>
              <div class="previous--revenue--sales">
                <p style="font-size: 13px;">Last month: $2345</p>
              </div>
            </div>
          </div>


          <div class="dashboard--Revenue--analytics">

            <div class="dashboard--Revenue">
              <div class="dashboard--revenue--header">
                <h3>Revenue analytics</h3>
                <h4>This week</h4>
              </div>

              <div class="chart">
                <canvas id="myChart"></canvas>
              </div>


            </div>

            <div class="dashboard--TotalIncome">
              <div class="dashboard--revenue--header">
                <h3>Total Income</h3>
                <h4>This week</h4>
              </div>

              <div class="chart">
                <canvas id="donut"></canvas>
              </div>

            </div>

            <div class="projects">
              <div class="projects--header">
                <H3 style="margin-bottom: 10px;">Projects</H3>
              </div>
              <ul>
                <li>Website</li>
                <li>Build Icons</li>
                <li>Sell Templates</li>
                <li>Check Inspirations</li>
                <li>Finish 5 templates</li>
              </ul>
            </div>

          </div>

          <div class="dashboard--Orders">
            <div class="orders--header">
              <h3>Recent Orders</h3>
              <div class="search">
                <input type="text" placeholder="Search Order">
              </div>
            </div>

            <div class="order--details">
              <div class="order--nav">
                <div class="header">
                  <p>Order Id</p>
                </div>
                <div class="header">
                  <p>Date</p>
                </div>
                <div class="header">
                  <p>Customer</p>
                </div>
                <div class="header">
                  <p>Category</p>
                </div>
                <div class="header">
                  <p>Status</p>
                </div>
                <div class="header">
                  <p>Items</p>
                </div>
                <div class="header">
                  <p>Total</p>
                </div>
              </div>

              <div class="order--details--content">
                <div class="order--customer--details">
                  <div class="order--id">
                    <ul>
                      <li>
                        <p>#878909</p>
                      </li>
                    </ul>
                  </div>
                  <div class="time">
                    <p>2 Dec 2026</p>
                  </div>
                  <div class="Customer--name">Oliver John Brown</div>
                  <div class="category">
                    <p>Shoes, Shirt</p>
                  </div>
                  <div class="status">
                    <p>Pending</p>
                  </div>
                  <div class="items">2 items</div>
                  <div class="total">$789.00</div>
                </div>

                <div class="order--customer--details">
                  <div class="order--id">
                    <ul>
                      <li>
                        <p>#878909</p>
                      </li>
                    </ul>
                  </div>
                  <div class="time">
                    <p>2 Dec 2026</p>
                  </div>
                  <div class="Customer--name">Oliver John Brown</div>
                  <div class="category">
                    <p>Shoes, Shirt</p>
                  </div>
                  <div class="status">
                    <p>Pending</p>
                  </div>
                  <div class="items">2 items</div>
                  <div class="total">$789.00</div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- DASHBOARD END -->

        <!-- TEAM START -->

        <div id="Teammates" class="page" style="display: none;">
          <div class="team-head-add">
            <div class="team-head">
              <h1>Team</h1>
            </div>
            <h2>Meet Our Team</h2>
            <div class="add-btn">
              <button onclick="navigatePages('Settings', this)"><img src="./Svg/user-solid.svg" alt="" width="20px"
                  height="20px">Add Member</button>
            </div>
          </div>
          <div class="teammates-heading-container">
            <div class="team-comp-cont">
              <h4>Running</h4>

              <h3>2025</h3>

              <P>Our Company Founded</P>
            </div>
            <div class="team-comp-cont">
              <h4>Employees</h4>

              <h3>200+</h3>

              <P>Increase this month</P>
            </div>
            <div class="team-comp-cont">
              <h4>Countries</h4>

              <h3>2025</h3>

              <P>1% from every country</P>
            </div>
            <div class="team-comp-cont">
              <h4>Company</h4>

              <h3>Technology</h3>

              <P>Our Company Founded</P>
            </div>
          </div>

          <div class="team-employees">
            <div class="heading">
              <h3>Our Team</h3>
              <div class="search">
                <input type="text" placeholder="Search Employee">
              </div>
            </div>

            <div class="team">
              <div class="team-member">
                <img src="./Employee Photos/pexels-uiliamnornberg-30767572.jpg" alt="user">
                <h4>John Doe</h4>
                <p>Software Engineer</p>
              </div>
              <div class="team-member">
                <img src="./Employee Photos/pexels-retamozo-gonzalo-454802313-26926486.jpg" alt="user" width="50px"
                  height="50px">
                <h4>Jane Smith</h4>
                <p>Product Manager</p>
              </div>
              <div class="team-member">
                <img src="./Employee Photos/pexels-uiliamnornberg-30767572.jpg" alt="user" width="50px" height="50px">
                <h4>Mike Johnson</h4>
                <p>UI/UX Designer</p>
              </div>
              <div class="team-member">
                <img src="./Employee Photos/pexels-uiliamnornberg-30767572.jpg" alt="user" width="50px" height="50px">
                <h4>Emily Davis</h4>
                <p>Data Analyst</p>
              </div>

              <div class="team-member">
                <img src="./Employee Photos/pexels-laura-garcia-1667452-5322265.jpg" alt="user" width="50px"
                  height="50px">
                <h4>John Doe</h4>
                <p>Software Engineer</p>
              </div>
              <div class="team-member">
                <img src="./Employee Photos/pexels-retamozo-gonzalo-454802313-26926486.jpg" alt="user" width="50px"
                  height="50px">
                <h4>Jane Smith</h4>
                <p>Product Manager</p>
              </div>
              <div class="team-member">
                <img src="./Employee Photos/pexels-retamozo-gonzalo-454802313-26926486.jpg" alt="user" width="50px"
                  height="50px">
                <h4>Mike Johnson</h4>
                <p>UI/UX Designer</p>
              </div>
              <div class="team-member">
                <img src="./Employee Photos/pexels-143963679-10761401.jpg" alt="user" width="50px" height="50px">
                <h4>Emily Davis</h4>
                <p>Data Analyst</p>
              </div>
            </div>
          </div>
        </div>

        <!-- TEAM END -->

        <div id="Customer" class="page" style="display: none;">Customers Page</div>

        <!-- SETTINGS START -->

        <div id="Settings" class="page" style="display: none;">
          <div class="settings-container">
            <h1>Settings</h1>

            <!-- Profile Section -->
            <section>
              <h2>Profile</h2>
              <div class="form-grid">
                <input type="text" placeholder="Full Name" />
                <input type="email" placeholder="Email Address" />
                <input type="text" placeholder="Username" />
                <input type="file" />
              </div>
            </section>

            <section>
              <h2>Account Preferences</h2>
              <div class="form-grid">
                <select>
                  <option>Language: English</option>
                  <option>French</option>
                  <option>Spanish</option>
                </select>
                <select>
                  <option>Timezone: UTC+3 (Nairobi)</option>
                  <option>UTC</option>
                  <option>UTC+1</option>
                  <option>UTC+5:30</option>
                </select>
              </div>
            </section>

            <section>
              <h2>Notifications</h2>
              <label><input type="checkbox" checked /> Email Alerts</label>
              <label><input type="checkbox" /> Push Notifications</label>
              <label><input type="checkbox" checked /> Weekly Reports</label>
            </section>

            <section class="toggle-section">
              <h2>Appearance</h2>
              <div class="toggle">
                <span>Dark Mode</span>
                <label class="switch">
                  <input type="checkbox" id="themeToggle" />
                  <span class="slider round"></span>
                </label>
              </div>
            </section>

            <div class="save-btn">
              <button>Save Changes</button>
            </div>
          </div>

        </div>

        <!-- SETTINGS END -->

        <!-- REPORTS START -->

        <div id="Reports" class="page" style="display: none;">
          <div class="reports-date">
            <div class="annual-report">
              <h3>December 2024</h3>
              <p>Here are the details for this years annual report</p>
            </div>
            <div class="filter">
              <button>Filter</button>
            </div>
          </div>

          <div class="reports-one">

            <div class="reports-one-one">
              <div class="total--sales--header">
                <p>Total Revenue</p>
                <img src="./Svg/cart-shopping-solid.svg" alt="" width="20px" height="20px">
              </div>
              <div class="sales--number">
                <p style="font-size:35px;"><img src="./Svg/dollar-sign-solid.svg" alt="" width="20px"
                    height="20px">1,200,000
                </p>
                <p
                  style="font-size:10px; border-radius: 10px; background:#cccccc; border-radius: 10px; padding: 5px 10px;">
                  4.9%</p>
              </div>
              <div class="previous--month--sales">
                <p style="font-size: 13px;">Last month: 2345</p>
              </div>
            </div>

            <div class="reports-one-two">
              <div class="total--sales--header">
                <p>Net Profit</p>
                <img src="./Svg/cart-shopping-solid.svg" alt="" width="20px" height="20px">
              </div>
              <div class="sales--number">
                <p style="font-size:35px;"><img src="./Svg/dollar-sign-solid.svg" alt="" width="20px"
                    height="20px">250,000
                </p>
                <p
                  style="font-size:10px; border-radius: 10px; background:#cccccc; border-radius: 10px; padding: 5px 10px;">
                  4.9%</p>
              </div>
              <div class="previous--month--sales">
                <p style="font-size: 13px;">Last month: 2345</p>
              </div>
            </div>

            <div class="reports-one-three">
              <div class="total--sales--header">
                <p>Expenses</p>
                <img src="./Svg/cart-shopping-solid.svg" alt="" width="20px" height="20px">
              </div>
              <div class="sales--number">
                <p style="font-size:35px;"><img src="./Svg/dollar-sign-solid.svg" alt="" width="20px"
                    height="20px">950,000
                </p>
                <p
                  style="font-size:10px; border-radius: 10px; background:#cccccc; border-radius: 10px; padding: 5px 10px;">
                  4.9%</p>
              </div>
              <div class="previous--month--sales">
                <p style="font-size: 13px;">Last month: 2345</p>
              </div>
            </div>

            <div class="reports-one-four">
              <div class="total--sales--header">
                <p>Cash Flow</p>
                <img src="./Svg/cart-shopping-solid.svg" alt="" width="20px" height="20px">
              </div>
              <div class="sales--number">
                <p style="font-size:35px;"><img src="./Svg/dollar-sign-solid.svg" alt="" width="20px"
                    height="20px">560,000
                </p>
                <p
                  style="font-size:10px; border-radius: 10px; background:#cccccc; border-radius: 10px; padding: 5px 10px;">
                  4.9%</p>
              </div>
              <div class="previous--month--sales">
                <p style="font-size: 13px;">Last month: 2345</p>
              </div>
            </div>

          </div>
          <div class="reports-two">
            <div class="months-earning">
              <div class="montly">
                <h3>Monthly Earnings Breakdown</h3>
              </div>
              <div class="monthly-source">
                <table>
                  <tr>
                    <th>
                      Product
                    </th>
                    <th>
                      Sales
                    </th>
                    <th>
                      Amount
                    </th>
                    <th>
                      Percentage
                    </th>
                  </tr>
                  <tr>
                    <td>
                      Real Estate
                    </td>
                    <td>
                      10
                    </td>
                    <td>
                      $1200
                    </td>
                    <td>
                      10%
                    </td>
                  </tr>

                  <tr>
                    <td>
                      Real Estate
                    </td>
                    <td>
                      10
                    </td>
                    <td>
                      $1200
                    </td>
                    <td>
                      10%
                    </td>
                  </tr>

                  <tr>
                    <td>
                      Real Estate
                    </td>
                    <td>
                      10
                    </td>
                    <td>
                      $1200
                    </td>
                    <td>
                      10%
                    </td>
                  </tr>

                  <tr>
                    <td>
                      Real Estate
                    </td>
                    <td>
                      10
                    </td>
                    <td>
                      $1200
                    </td>
                    <td>
                      10%
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="monthly-income">
              <div class="monthly-income-heading">
                <h3>Montly Income</h3>
              </div>

              <div class="monthtly-amount">
                <h2><img src="./Svg/dollar-sign-solid.svg" alt="" width="20px" height="20px">25,000.00</h2>
              </div>

              <div class="reports-chart">
                <canvas id="reports-Chart" width="400" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>

        <!-- REPORTS END -->

        <!-- CALENDER START -->
        <div id="Calender" class="page" style="display: none;">

          <div class="page-heading">
            <div class="page-name">
              <div>

                <h3>Calendar</h3>
              </div>
              <div>
                <button class="btn-toggle"><img src="./Svg/calendar-solid.svg" alt="" width="25px"
                    height="25px"></button>
              </div>
            </div>
          </div>

          <div class="Calendars">
            <div class="calendar" id="calendar"></div>

            <!-- Modal -->
            <div class="modal" id="eventModal">
              <div class="modal-content">
                <h3>Add Event</h3>
                <input type="text" id="eventTitle" placeholder="Event title" />
                <input type="time" id="startTime" value="08:00" />
                <input type="time" id="endTime" value="09:00" />
                <input type="color" id="eventColor" value="#3b82f6" />
                <div style="width: 100%; height: fit-content; display: flex; padding: 0; margin: 0; gap: 20px;">
                  <button onclick="addEvent()">Add</button>
                  <button onclick="closeModal()">Cancel</button>
                </div>

              </div>
            </div>
          </div>


        </div>

        <!-- CALENDER END -->
        <div id="Feedback" class="page" style="display: none;">Feedback page</div>

        <!-- TEMPLATES PAGE START -->

        <div id="Templates" class="page" style="display: none;">
          <div class="template">

          </div>
        </div>

        <!-- TEMPLATES PAGE END -->

        <!-- TEAM END -->

        <!-- ANALYTICS START -->

        <div id="Analytics" class="page" style="display: none;">
          <div class="analytics--container--one">
            <div class="analytics--one">
              <div class="analytics-one-one">
                <div class="analytics-one-heading">
                  <img src="./Svg/users-solid.svg" alt="" width="20px" height="20px">
                  <h4>Daily Visits</h4>
                </div>

                <div class="analytics-one-chart">
                  <canvas id="Visits"></canvas>
                </div>

              </div>
              <div class="analytics-one-two">
                <div class="analytics-two-heading">
                  <h4>Total user</h4>
                  <img src="./Svg/users-solid.svg" alt="" height="20px" width="20px">
                </div>

                <h4 style="font-size: 35px;">35,000</h4>
                <p>Yesterday</p>

              </div>
            </div>

            <div class="analytics--two">
              <h4>Click through rate</h4>
              <h4 style="margin-top: 30px; font-size: 30px;">2,700</h4>

              <div class="analytics-two-chart">
                <canvas id="click"></canvas>
              </div>
            </div>

            <div class="analytics-three">
              <div class="analytics-one-one">
                <div class="analytics-one-heading">
                  <img src="./Svg/dollar-sign-solid.svg" alt="" width="20px" height="20px">
                  <h4>Spendings</h4>
                </div>

                <div class="analytics-three-chart">
                  <canvas id="Views"></canvas>
                </div>

              </div>
              <div class="analytics-one-two">
                <div class="analytics-two-heading">
                  <h4>Total user</h4>
                  <img src="./Svg/users-solid.svg" alt="" height="20px" width="20px">
                </div>

                <h4 style="font-size: 35px;">35,000</h4>
                <p>Yesterday</p>

              </div>
            </div>
          </div>

          <div class="analytics--container--two">
            <div class="monthly-income">
              <div class="monthly-income-heading">
                <h4>Monthly Income</h4>
                <img src="./Svg/dollar-sign-solid.svg" alt="" width="20px" height="20px">
              </div>
              <p>Monthly income for each month</p>
              <div class="monthly-income-chart">
                <canvas id="income"></canvas>
              </div>
            </div>

            <div class="sales-per-category-container">
              <div class="sales-per-category">
                <div class="sales-per-category-heading">
                  <h4>Sales per Category</h4>
                  <img src="./Svg/chart-simple-solid.svg" alt="" width="20px" height="20px">
                </div>
                <p style="font-size: 13px;">View all your sales for each product</p>

                <div class="sales-per-category-chart">
              
                  <div class="sales-chart">
                    <div id="geo_chart" style="width: 100%; height: 100%;"></div>
                  </div>

                </div>
              </div>

              <div class="products-container">
                <div class="top-products">
                  <div class="top-products-heading">
                    <h4>Top Products</h4>
                    <img src="./Svg/cube-solid.svg" alt="" width="20px" height="20px">
                  </div>
                  <div class="top-products-list">
                    <ul>
                      <li>Product 1</li>
                      <li>Product 2</li>
                      <li>Product 3</li>
                      <li>Product 4</li>
                      <li>Product 5</li>
                    </ul>
                  </div>
                </div>

                <div class="Timer">
                  <div class="Timer-heading">
                    <h4>Timer</h4>
                  </div>
                  <div id="dashboard-timer">
                    <p style="font-size: 60px;">⏱️ Time on Dashboard:</p>
                    <p class="time">00:00:00</p>
                  </div>
                </div>
              </div>
            </div>


          </div>

          <!-- ANALYTICS END -->



        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="dash.js"></script>
    <script src="chart.js"></script>
    <script src="geochart.js"></script>
    <script src="report.js"></script>
    <script src="timer.js"></script>
    <script src="darkMode.js"></script>

    <script>
      const calendar = document.getElementById("calendar");
      const hours = ["08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00"];
      const days = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
      const cellHeight = 70;
      let selectedDay = null;
      let selectedHour = null;

      // Create top row
      calendar.appendChild(document.createElement("div")); // top-left corner
      days.forEach(day => {
        const dayLabel = document.createElement("div");
        dayLabel.className = "day-label";
        dayLabel.textContent = day;
        calendar.appendChild(dayLabel);
      });

      // Create time rows and cells
      hours.forEach((hour, rowIndex) => {
        const timeLabel = document.createElement("div");
        timeLabel.className = "time-label";
        timeLabel.textContent = hour;
        calendar.appendChild(timeLabel);

        days.forEach((_, dayIndex) => {
          const cell = document.createElement("div");
          cell.className = "cell";
          cell.dataset.day = dayIndex;
          cell.dataset.hour = hour;
          cell.addEventListener("click", () => openModal(dayIndex, hour));
          calendar.appendChild(cell);
        });
      });

      function openModal(dayIndex, hour) {
        selectedDay = dayIndex;
        selectedHour = hour;

        document.getElementById("eventTitle").value = "";
        document.getElementById("startTime").value = hour;

        const [h, m] = hour.split(':').map(Number);
        const endH = String(h + 1).padStart(2, "0");
        document.getElementById("endTime").value = `${endH}:${m === 0 ? "00" : m}`;
        document.getElementById("eventModal").style.display = "flex";
      }

      function closeModal() {
        document.getElementById("eventModal").style.display = "none";
      }

      function addEvent() {
        const title = document.getElementById("eventTitle").value;
        const start = document.getElementById("startTime").value;
        const end = document.getElementById("endTime").value;
        const color = document.getElementById("eventColor").value;

        if (!title || !start || !end || start >= end) return;

        const [sh, sm] = start.split(":").map(Number);
        const [eh, em] = end.split(":").map(Number);
        const startTime = sh + sm / 60;
        const endTime = eh + em / 60;
        const top = (startTime - 8) * cellHeight + 40 + 4; // 40px offset for header row
        const height = (endTime - startTime) * cellHeight - 4;

        const event = document.createElement("div");
        event.className = "event";
        event.style.top = top + "px";
        event.style.height = height + "px";
        event.style.width = "calc(100% / 8 - 2px)";
        event.style.background = color;
        event.style.gridColumn = selectedDay + 2; // skip time label
        event.textContent = title;

        calendar.appendChild(event);

        closeModal();
      }
    </script>
</body>

</html>