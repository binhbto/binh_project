(function(){
 const toast=document.getElementById('toast');
 window.showToast=(msg)=>{if(!toast){alert(msg);return;}toast.textContent=msg;toast.classList.add('show');setTimeout(()=>toast.classList.remove('show'),2600)};
 document.getElementById('mobileMenu')?.addEventListener('click',()=>document.querySelector('.sidebar')?.classList.toggle('open'));
 document.querySelectorAll('[data-demo]').forEach(el=>el.addEventListener('click',()=>showToast('Đây là giao diện demo. Chức năng sẽ kết nối MySQL ở giai đoạn tiếp theo.')));
 document.querySelectorAll('[data-search]').forEach(el=>el.addEventListener('input',()=>{
  const term=el.value.toLowerCase();document.querySelectorAll('[data-search-item]').forEach(row=>row.style.display=row.textContent.toLowerCase().includes(term)?'':'none');
 }));
 document.querySelectorAll('[data-filter]').forEach(el=>el.addEventListener('click',()=>{
  const group=el.closest('[data-filter-group]');group?.querySelectorAll('[data-filter]').forEach(x=>x.classList.remove('active'));el.classList.add('active');
  const val=el.dataset.filter;document.querySelectorAll('[data-status]').forEach(x=>x.style.display=val==='all'||x.dataset.status===val?'':'none');
 }));
 const prices={};let cart={};
 document.querySelectorAll('[data-add-product]').forEach(el=>el.addEventListener('click',()=>{
  const id=el.dataset.addProduct;prices[id]={name:el.dataset.name,price:Number(el.dataset.price)};
  cart[id]=(cart[id]||0)+1;renderCart();
 }));
 function renderCart(){
  const target=document.getElementById('cart-items');if(!target)return;
  const items=Object.keys(cart).filter(id=>cart[id]>0);let total=0;
  target.innerHTML=items.length?items.map(id=>{const p=prices[id];const qty=cart[id];total+=p.price*qty;return `<div class="cart-item"><div><strong>${p.name}</strong><br><span class="tiny">${p.price.toLocaleString('vi-VN')} đ × ${qty}</span></div><div><button data-minus="${id}">−</button> ${qty} <button data-plus="${id}">+</button></div></div>`}).join(''):'<p class="subtle">Chưa có sản phẩm nào trong giỏ.</p>';
  document.getElementById('cart-total').textContent=total.toLocaleString('vi-VN')+' đ';
  target.querySelectorAll('[data-minus]').forEach(b=>b.addEventListener('click',()=>{cart[b.dataset.minus]--;renderCart()}));
  target.querySelectorAll('[data-plus]').forEach(b=>b.addEventListener('click',()=>{cart[b.dataset.plus]++;renderCart()}));
 }
 window.clearDemoCart=()=>{cart={};renderCart();showToast('Đã xóa giỏ hàng demo')};
 document.querySelectorAll('[data-queue-next]').forEach(b=>b.addEventListener('click',()=>{
  const card=b.closest('[data-status]');if(!card)return;
  if(card.dataset.status==='pending'){card.dataset.status='preparing';b.textContent='Hoàn thành món';card.querySelector('.badge').textContent='Đang pha chế';card.querySelector('.badge').className='badge orange';}
  else {card.dataset.status='done';b.textContent='Đã hoàn thành';b.disabled=true;card.querySelector('.badge').textContent='Hoàn thành';card.querySelector('.badge').className='badge';}
  showToast('Đã cập nhật trạng thái trên giao diện demo');
 }));
})();
