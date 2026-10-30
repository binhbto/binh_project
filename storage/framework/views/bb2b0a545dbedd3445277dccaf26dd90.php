<?php $__env->startSection('title','Thanh toán'); ?>
<?php $__env->startSection('content'); ?>
<div class="page-heading"><div><h1>Thanh toán đơn hàng</h1><p>Chọn hình thức thanh toán cho đơn hàng mẫu</p></div></div>
<div class="grid grid2"><section class="card card-pad"><h2 class="section-title mb">Thông tin đơn hàng</h2><label class="form-field">Mã đơn<select><option>DH-1026 · Bàn B08</option><option>DH-1027 · Bàn B12</option></select></label><p class="subtle">Cà phê sữa × 2, Trà đào × 1</p><hr style="border:0;border-top:1px solid #eee;margin:22px 0"><div class="cart-total"><span>Tổng thanh toán</span><span>89.000 đ</span></div></section>
<section class="card card-pad"><h2 class="section-title mb">Phương thức thanh toán</h2><label class="form-field">Hình thức<select><option>Tiền mặt</option><option>VietQR</option></select></label><label class="form-field">Số tiền khách đưa<input type="number" placeholder="Nhập số tiền"></label><button class="btn" data-demo>✓ Xác nhận thanh toán</button><p class="subtle mt">Màn hình minh họa, chưa thực hiện giao dịch thực tế.</p></section></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\smartcafe-pos\resources\views/cashier/payment.blade.php ENDPATH**/ ?>