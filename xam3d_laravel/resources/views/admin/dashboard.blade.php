@extends('admin.layouts.app')

@section('content')
<!-- Main Content -->
            <div class="container-fluid">
                <!-- Top Row (Charts) -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-title">
                                Sales Overview
                                <select class="form-select">
                                    <option value="March 2023">March 2023</option>
                                    <option value="April 2023">April 2023</option>
                                    <option value="May 2023">May 2023</option>
                                </select>
                            </div>
                            <!-- Bar Chart Container -->
                            <div id="chart-sales"></div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row" style="margin: 0; display: block;">
                            <!-- Yearly Breakup -->
                            <div class="card mb-4" style="height: auto;">
                                <div class="card-title mb-3">Yearly Breakup</div>
                                <div class="row">
                                    <div class="col-lg-7" style="padding: 0 15px;">
                                        <div class="stat-value mb-2">$36,358</div>
                                        <div class="stat-trend mb-3">
                                            <span class="trend-up"><i class="ti ti-arrow-up-left"></i></span>
                                            +9% <span class="text-muted" style="font-size: 0.875rem;">last year</span>
                                        </div>
                                        <div class="d-flex gap-3 align-items-center" style="font-size: 0.8rem;">
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width:8px; height:8px; border-radius:50%; background-color: var(--primary-color);"></div>
                                                <span class="text-muted">2023</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <div style="width:8px; height:8px; border-radius:50%; background-color: var(--primary-light);"></div>
                                                <span class="text-muted">2023</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5" style="padding: 0 15px;">
                                        <div id="chart-yearly"></div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Monthly Earnings -->
                            <div class="card mb-0" style="height: auto;">
                                <div class="card-title mb-3">
                                    Monthly Earnings
                                    <div class="icon-container bg-secondary-light" style="width:40px;height:40px; border-radius:50%; background-color: var(--secondary-color); color: white;">
                                        <i class="ti ti-currency-dollar"></i>
                                    </div>
                                </div>
                                <div class="stat-value mb-2">$6,820</div>
                                <div class="stat-trend mb-3">
                                    <span class="trend-down"><i class="ti ti-arrow-down-right"></i></span>
                                    +9% <span class="text-muted" style="font-size: 0.875rem;">last year</span>
                                </div>
                                <!-- Sparkline -->
                                <div id="chart-monthly" style="margin: 0 -25px -25px -25px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Bottom Row (Tables/Timeline) -->
                <div class="row mt-4">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-title">Recent Transactions</div>
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-time">09:30</div>
                                    <div class="timeline-marker marker-primary"></div>
                                    <div class="timeline-content">
                                        Payment received from John Doe of $385.90
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-time">10:00 am</div>
                                    <div class="timeline-marker marker-secondary"></div>
                                    <div class="timeline-content">
                                        <strong>New sale recorded</strong>
                                        <a href="#" class="timeline-link">#ML-3467</a>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-time">12:00 am</div>
                                    <div class="timeline-marker marker-success"></div>
                                    <div class="timeline-content">
                                        Payment was made of $64.95 to Michael
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-time">09:30 am</div>
                                    <div class="timeline-marker marker-warning"></div>
                                    <div class="timeline-content">
                                        <strong>New sale recorded</strong>
                                        <a href="#" class="timeline-link">#ML-3467</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-title">Recent Transactions</div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Assigned</th>
                                            <th>Name</th>
                                            <th>Priority</th>
                                            <th>Budget</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="fw-semibold">1</td>
                                            <td>
                                                <div class="fw-semibold text-dark">Sunil Joshi</div>
                                                <div class="fs-2">Web Designer</div>
                                            </td>
                                            <td>Elite Admin</td>
                                            <td>
                                                <span class="badge bg-primary">Low</span>
                                            </td>
                                            <td class="fw-semibold text-dark">$3.9</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold">2</td>
                                            <td>
                                                <div class="fw-semibold text-dark">Andrew McDownland</div>
                                                <div class="fs-2">Project Manager</div>
                                            </td>
                                            <td>Real Homes WP Theme</td>
                                            <td>
                                                <span class="badge bg-secondary">Medium</span>
                                            </td>
                                            <td class="fw-semibold text-dark">$24.5k</td>
                                        </tr>
                                        <tr>
                                            <td class="fw-semibold">3</td>
                                            <td>
                                                <div class="fw-semibold text-dark">Christopher Jamil</div>
                                                <div class="fs-2">Project Manager</div>
                                            </td>
                                            <td>MedicalPro WP Theme</td>
                                            <td>
                                                <span class="badge bg-error">High</span>
                                            </td>
                                            <td class="fw-semibold text-dark">$12.8k</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

