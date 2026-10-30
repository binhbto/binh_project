<?php $__env->startSection('title','Báo cáo thống kê'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-heading"><div><h1>Báo cáo thống kê</h1><p>Tổng hợp doanh thu và tình hình kinh doanh</p></div><select class="select"><option>Tháng này</option><option>7 ngày qua</option><option>Hôm nay</option></select></div>
<div class="grid grid4 mb">
<div class="card stat"><div><span class="stat-label">Tổng doanh thu</span><strong>125.450.000 đ</strong><span class="stat-note">↗ +11.3%</span></div></div>
<div class="card stat"><div><span class="stat-label">Tổng đơn hàng</span><strong>2.145</strong><span class="stat-note">↗ +6.8%</span></div></div>
<div class="card stat"><div><span class="stat-label">Đơn trung bình</span><strong>58.500 đ</strong><span class="stat-note">Mỗi đơn</span></div></div>
<div class="card stat"><div><span class="stat-label">Lợi nhuận ước tính</span><strong>68.200.000 đ</strong><span class="stat-note">Dữ liệu mẫu</span></div></div></div>
<div class="grid grid2"><div class="card"><div class="section-head"><h2 class="section-title">Biểu đồ doanh thu</h2></div><div class="card-pad"><div class="chart-bars"><div class="chart-bar" style="height:35%"><span>T1</span></div><div class="chart-bar" style="height:48%"><span>T2</span></div><div class="chart-bar" style="height:68%"><span>T3</span></div><div class="chart-bar" style="height:52%"><span>T4</span></div><div class="chart-bar" style="height:79%"><span>T5</span></div><div class="chart-bar" style="height:95%"><span>T6</span></div></div><div style="height:30px"></div></div></div><div class="card"><div class="section-head"><h2 class="section-title">Cơ cấu sản phẩm</h2></div><div class="card-pad"><div class="donut"><span class="donut-label">100%<br><small>đơn hàng</small></span></div><p class="subtle" style="text-align:center">Cà phê · Trà · Đá xay · Khác</p></div></div></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\smartcafe-pos\resources\views/admin/reports.blade.php ENDPATH**/ ?>