@extends('layout.app')

@section('title', 'POS System - Dashboard')

@section('content')
<div class="container-fluid">

    <!-- HEADER BANNER -->
    <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
            <h1 class="fw-bold text-dark text-lowercase mb-0 fs-2">dashboard</h1>
            <p class="text-secondary small mb-0">Overview of today's sales and terminal activity.</p>
        </div>
        <button class="btn btn-primary rounded-3 px-3 fw-bold btn-sm d-flex align-items-center gap-2">
            <i class="bi bi-plus-lg"></i> New Sale
        </button>
    </div>

    <!-- STATS CARDS -->
    <div class="row g-3 mb-4">
        <!-- Today's Sales -->
        <div class="col-md-6 col-xl-3">
            <div class="bg-white border border-light-subtle rounded-4 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold text-uppercase">Today's Sales</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">$1,245.50</h3>
                    </div>
                    <div class="bg-primary-subtle text-primary p-3 rounded-3">
                        <i class="bi bi-currency-dollar fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="col-md-6 col-xl-3">
            <div class="bg-white border border-light-subtle rounded-4 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold text-uppercase">Total Orders</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">48</h3>
                    </div>
                    <div class="bg-success-subtle text-success p-3 rounded-3">
                        <i class="bi bi-bag-check fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Products -->
        <div class="col-md-6 col-xl-3">
            <div class="bg-white border border-light-subtle rounded-4 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold text-uppercase">Active Products</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">128</h3>
                    </div>
                    <div class="bg-info-subtle text-info p-3 rounded-3">
                        <i class="bi bi-box-seam fs-4"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Active Users -->
        <div class="col-md-6 col-xl-3">
            <div class="bg-white border border-light-subtle rounded-4 p-3 shadow-sm">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <span class="text-secondary small fw-bold text-uppercase">Active Users</span>
                        <h3 class="fw-bold text-dark mb-0 mt-1">4</h3>
                    </div>
                    <div class="bg-warning-subtle text-warning p-3 rounded-3">
                        <i class="bi bi-people fs-4"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RECENT TRANSACTIONS TABLE -->
    <div class="bg-white border border-light-subtle rounded-4 shadow-sm overflow-hidden p-4">
        <div class="d-flex align-items-center justify-content-between mb-3">
            <h5 class="fw-bold text-dark mb-0">Recent Transactions</h5>
            <a href="#" class="text-primary fw-bold text-decoration-none small">View All &rarr;</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr class="text-uppercase small text-secondary">
                        <th>Order ID</th>
                        <th>Cashier / Staff</th>
                        <th>Items</th>
                        <th>Total Amount</th>
                        <th>Status</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">#ORD-9821</td>
                        <td>{{ auth()->user()->name ?? 'Staff User' }}</td>
                        <td>3 Items</td>
                        <td class="fw-bold">$42.00</td>
                        <td><span class="badge bg-success-subtle text-success px-2 py-1 rounded-2">Paid</span></td>
                        <td class="text-end">
                            <button class="btn btn-light btn-sm border fw-semibold">
                                <i class="bi bi-receipt"></i> Print Receipt
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">#ORD-9820</td>
                        <td>Walk-in Customer</td>
                        <td>1 Item</td>
                        <td class="fw-bold">$15.50</td>
                        <td><span class="badge bg-success-subtle text-success px-2 py-1 rounded-2">Paid</span></td>
                        <td class="text-end">
                            <button class="btn btn-light btn-sm border fw-semibold">
                                <i class="bi bi-receipt"></i> Print Receipt
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">#ORD-9819</td>
                        <td>System Admin</td>
                        <td>5 Items</td>
                        <td class="fw-bold">$89.90</td>
                        <td><span class="badge bg-warning-subtle text-warning px-2 py-1 rounded-2">Pending</span></td>
                        <td class="text-end">
                            <button class="btn btn-light btn-sm border fw-semibold">
                                <i class="bi bi-receipt"></i> Print Receipt
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection