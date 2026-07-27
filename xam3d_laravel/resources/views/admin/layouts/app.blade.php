<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modernize Admin Dashboard</title>
    
    <!-- Tabler Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.44.0/tabler-icons.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('admin-style.css') }}">
</head>
<body>
    <div class="page-wrapper">
        <!-- Sidebar -->
        <aside class="left-sidebar">
            <a href="#" class="brand-logo">
                <img src="{{ asset('Image/logo2.png') }}" alt="Logo" style="border-radius: 6px;">
                <span>Modernize</span>
            </a>
            
            <nav class="sidebar-nav">
                <ul>
                    <li class="nav-small-cap">Home</li>
                    <li class="sidebar-item">
                        <a href="/admin" class="sidebar-link {{ request()->is('admin') ? 'active' : '' }}">
                            <i class="ti ti-layout-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/users" class="sidebar-link {{ request()->is('admin/users') ? 'active' : '' }}">
                            <i class="ti ti-users"></i>
                            <span>Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/admin/design" class="sidebar-link {{ request()->is('admin/design') ? 'active' : '' }}">
                            <i class="ti ti-brush"></i>
                            <span>Design</span>
                        </a>
                    </li>
                    
                    <li class="nav-small-cap">UI Components</li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-article"></i>
                            <span>Buttons</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-alert-circle"></i>
                            <span>Alerts</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-cards"></i>
                            <span>Card</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-file-description"></i>
                            <span>Forms</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-typography"></i>
                            <span>Typography</span>
                        </a>
                    </li>
                    
                    <li class="nav-small-cap">Auth</li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-login"></i>
                            <span>Login</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-user-plus"></i>
                            <span>Register</span>
                        </a>
                    </li>
                    
                    <li class="nav-small-cap">Extra</li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-mood-happy"></i>
                            <span>Icons</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="ti ti-aperture"></i>
                            <span>Sample Page</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Main Wrapper -->
        <div class="body-wrapper">

            
            @yield('content')
<!-- ApexCharts -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        // Common Options for charts
        const commonOptions = {
            fontFamily: "'Plus Jakarta Sans', sans-serif",
            toolbar: { show: false }
        };

        // 1. Sales Overview Chart (Bar)
        var salesOptions = {
            ...commonOptions,
            series: [{
                name: 'Earnings this month',
                data: [350, 380, 290, 340, 380, 170, 350, 380]
            }, {
                name: 'Expense this month',
                data: [270, 240, 310, 210, 240, 260, 270, 240]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: { show: false },
                foreColor: '#7c8fac'
            },
            colors: ['#5d87ff', '#49beff'],
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '35%',
                    borderRadius: 4,
                    endingShape: 'rounded'
                },
            },
            dataLabels: { enabled: false },
            stroke: { show: true, width: 2, colors: ['transparent'] },
            xaxis: {
                categories: ['16/08', '17/08', '18/08', '19/08', '20/08', '21/08', '22/08', '23/08'],
                axisBorder: { show: false },
            },
            yaxis: {
                title: { text: undefined },
                labels: { formatter: (val) => { return val } }
            },
            fill: { opacity: 1 },
            tooltip: { y: { formatter: function (val) { return "$" + val } } },
            legend: { show: false },
            grid: {
                borderColor: '#e5eaef',
                strokeDashArray: 3,
                xaxis: { lines: { show: false } },
            }
        };

        var salesChart = new ApexCharts(document.querySelector("#chart-sales"), salesOptions);
        salesChart.render();

        // 2. Yearly Breakup Chart (Donut)
        var breakupOptions = {
            ...commonOptions,
            series: [38, 40],
            chart: {
                type: 'donut',
                height: 150,
            },
            colors: ['#5d87ff', '#ecf2ff'],
            plotOptions: {
                pie: {
                    startAngle: 0,
                    endAngle: 360,
                    donut: {
                        size: '75%',
                        background: 'transparent'
                    }
                }
            },
            stroke: { show: false },
            dataLabels: { enabled: false },
            legend: { show: false },
            tooltip: { theme: 'light', fillSeriesColor: false }
        };

        var breakupChart = new ApexCharts(document.querySelector("#chart-yearly"), breakupOptions);
        breakupChart.render();

        // 3. Monthly Earnings Chart (Sparkline)
        var monthlyOptions = {
            ...commonOptions,
            series: [{
                name: '',
                data: [25, 66, 20, 40, 12, 58, 20]
            }],
            chart: {
                type: 'area',
                height: 80,
                sparkline: { enabled: true }
            },
            colors: ['#49beff'],
            stroke: { curve: 'smooth', width: 2 },
            fill: {
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.4,
                    opacityTo: 0.1,
                    stops: [0, 90, 100]
                }
            },
            tooltip: {
                theme: 'light',
                fixed: { enabled: false },
                x: { show: false },
                y: { title: { formatter: function (seriesName) { return '' } } },
                marker: { show: false }
            }
        };

        var monthlyChart = new ApexCharts(document.querySelector("#chart-monthly"), monthlyOptions);
        monthlyChart.render();
    </script>
    
    <!-- Float button to frontend -->
    <a href="/home" class="btn-frontend-float" title="Go to Frontend">
        <i class="ti ti-world"></i>
    </a>
</body>
</html>

