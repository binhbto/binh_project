<?php $__env->startSection('title','Tổng quan'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-heading"><div><h1>Tổng quan cửa hàng</h1><p>Theo dõi hoạt động kinh doanh và hiệu suất hôm nay</p></div></div>
<div class="grid grid4 mb">
 <div class="card stat"><div><span class="stat-label">Doanh thu hôm nay</span><strong>4.850.000 đ</strong><span class="stat-note">↗ +12% so với hôm qua</span></div><div class="stat-icon">▥</div></div>
 <div class="card stat"><div><span class="stat-label">Đơn hàng</span><strong>82</strong><span class="stat-note">↗ +8% so với hôm qua</span></div><div class="stat-icon">▤</div></div>
 <div class="card stat"><div><span class="stat-label">Đang pha chế</span><strong>07</strong><span class="stat-note">Đang xử lý</span></div><div class="stat-icon">☕</div></div>
 <div class="card stat"><div><span class="stat-label">Nguyên liệu dưới ngưỡng</span><strong>03</strong><span class="stat-note warn">⚠ Cần nhập hàng</span></div><div class="stat-icon">⚑</div></div>
</div>
<div class="grid grid3 mb">
 <section class="card span2"><div class="section-head"><h2 class="section-title">Doanh thu 7 ngày gần đây</h2><span class="subtle">Đơn vị: nghìn đồng</span></div><div class="card-pad"><div class="chart-bars">
 <div class="chart-bar" style="height:42%"><span>T2</span></div><div class="chart-bar" style="height:61%"><span>T3</span></div><div class="chart-bar" style="height:52%"><span>T4</span></div><div class="chart-bar" style="height:75%"><span>T5</span></div><div class="chart-bar" style="height:68%"><span>T6</span></div><div class="chart-bar" style="height:91%"><span>T7</span></div><div class="chart-bar" style="height:83%"><span>CN</span></div>
 </div><div style="height:26px"></div></div></section>
 <section class="card"><div class="section-head"><h2 class="section-title">Cơ cấu doanh thu</h2></div><div class="card-pad"><div class="donut"><span class="donut-label">82<br><small>đơn hàng</small></span></div><p class="subtle" style="text-align:center">Cà phê 42% · Trà 28% · Khác 30%</p></div></section>
</div>
<div class="grid grid3">
<section class="card span2"><div class="section-head"><h2 class="section-title">Đơn hàng gần đây</h2><a class="subtle" href="<?php echo e(route('cashier.orders')); ?>">Xem tất cả →</a></div>
<div class="table-wrap"><table><thead><tr><th>Mã đơn</th><th>Bàn</th><th>Tổng tiền</th><th>Trạng thái</th></tr></thead><tbody>
<tr><td><strong>DH-1025</strong></td><td>B03</td><td>125.000 đ</td><td><span class="badge">Đã hoàn thành</span></td></tr>
<tr><td><strong>DH-1026</strong></td><td>B08</td><td>89.000 đ</td><td><span class="badge orange">Đang pha chế</span></td></tr>
<tr><td><strong>DH-1027</strong></td><td>Mang đi</td><td>65.000 đ</td><td><span class="badge blue">Chờ xác nhận</span></td></tr>
</tbody></table></div></section>
<section class="card"><div class="section-head"><h2 class="section-title">Sản phẩm bán chạy</h2></div><div class="card-pad">
<div class="best-row"><div class="row"><span>Cà phê sữa</span><b>42 ly</b></div><div class="progress"><span style="width:85%"></span></div></div>
<div class="best-row"><div class="row"><span>Trà đào</span><b>36 ly</b></div><div class="progress"><span style="width:72%"></span></div></div>
<div class="best-row"><div class="row"><span>Bạc xỉu</span><b>29 ly</b></div><div class="progress"><span style="width:58%"></span></div></div>
<div class="best-row"><div class="row"><span>Matcha latte</span><b>22 ly</b></div><div class="progress"><span style="width:44%"></span></div></div>
</div></section></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\smartcafe-pos\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>