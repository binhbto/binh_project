<!DOCTYPE html>
<html lang="vi"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<title>@yield('title','SmartCafe POS') — SmartCafe</title>
<link rel="stylesheet" href="{{ asset('css/smartcafe-wireframe.css') }}">
</head><body>
<div class="app-shell">
<aside class="sidebar">
 <a class="brand" href="{{ route('admin.dashboard') }}"><span class="brand-icon">☕</span><span>SmartCafe <small>POS SYSTEM</small></span></a>
 <div class="side-caption">QUẢN TRỊ</div>
 <nav>
  <a class="{{ request()->routeIs('admin.dashboard')?'active':'' }}" href="{{ route('admin.dashboard') }}">◫ <span>Tổng quan</span></a>
  <a class="{{ request()->routeIs('admin.menu')?'active':'' }}" href="{{ route('admin.menu') }}">▦ <span>Thực đơn</span></a>
  <a class="{{ request()->routeIs('admin.staff')?'active':'' }}" href="{{ route('admin.staff') }}">♙ <span>Nhân viên</span></a>
  <a class="{{ request()->routeIs('admin.inventory')?'active':'' }}" href="{{ route('admin.inventory') }}">▣ <span>Kho nguyên liệu</span></a>
  <a class="{{ request()->routeIs('admin.promotions')?'active':'' }}" href="{{ route('admin.promotions') }}">◇ <span>Khuyến mãi</span></a>
  <a class="{{ request()->routeIs('admin.reports')?'active':'' }}" href="{{ route('admin.reports') }}">▤ <span>Báo cáo</span></a>
 </nav>
 <div class="side-caption">VẬN HÀNH</div>
 <nav>
  <a class="{{ request()->routeIs('cashier.pos')?'active':'' }}" href="{{ route('cashier.pos') }}">▦ <span>Bán hàng POS</span></a>
  <a class="{{ request()->routeIs('cashier.orders')?'active':'' }}" href="{{ route('cashier.orders') }}">☷ <span>Đơn hàng</span></a>
  <a class="{{ request()->routeIs('cashier.payment')?'active':'' }}" href="{{ route('cashier.payment') }}">▣ <span>Thanh toán</span></a>
  <a class="{{ request()->routeIs('barista.queue')?'active':'' }}" href="{{ route('barista.queue') }}">♨ <span>Pha chế</span></a>
  <a href="{{ route('customer.order',['table'=>'B03']) }}">▧ <span>Khách đặt QR</span></a>
 </nav>
 <div class="side-bottom"><span class="online-dot"></span> Giao diện minh họa <a href="{{ route('login') }}">Đăng xuất ↗</a></div>
</aside>
<div class="main">
 <header class="topbar"><div class="topbar-left"><button class="mobile-menu" id="mobileMenu">☰</button><span class="crumb">SmartCafe / <b>@yield('title','Tổng quan')</b></span></div><div class="topbar-right"><span class="demo-tag">DEMO</span><span class="bell">♧</span><span class="avatar">AD</span><span>Admin</span></div></header>
 <main class="content">@yield('content')</main>
</div></div>
<div class="toast" id="toast"></div>
@stack('scripts')
</body></html>
