<?php

use Illuminate\Support\Facades\Route;




Route::redirect('/', '/login');



Route::view('/login', 'auth.login')
    ->name('login');




Route::redirect('/admin', '/admin/dashboard');

// Dashboard
Route::view('/admin/dashboard', 'admin.dashboard')
    ->name('admin.dashboard');

// Quản lý thực đơn
Route::view('/admin/menu', 'admin.menu')
    ->name('admin.menu');

// Quản lý nhân viên
Route::view('/admin/staff', 'admin.staff')
    ->name('admin.staff');

// Quản lý kho
Route::view('/admin/inventory', 'admin.inventory')
    ->name('admin.inventory');

// Quản lý khuyến mãi
Route::view('/admin/promotions', 'admin.promotions')
    ->name('admin.promotions');

// Báo cáo thống kê
Route::view('/admin/reports', 'admin.reports')
    ->name('admin.reports');

// ================= CASHIER =================

// Bán hàng POS
Route::view('/cashier/pos', 'cashier.pos')
    ->name('cashier.pos');

// Quản lý đơn hàng
Route::view('/cashier/orders', 'cashier.orders')
    ->name('cashier.orders');

// Thanh toán
Route::view('/cashier/payment', 'cashier.payment')
    ->name('cashier.payment');

// ================= BARISTA =================

// Màn hình pha chế
Route::view('/barista/queue', 'barista.queue')
    ->name('barista.queue');

// ================= CUSTOMER =================

// Khách hàng đặt món qua QR
Route::get('/order/table/{table}', function ($table) {
    return view('customer.order', [
        'table' => $table
    ]);
})->name('customer.order');
