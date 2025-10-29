const sidebar = document.getElementById('sidebar');
const openBtn = document.getElementById('openSidebar');
const closeBtn = document.getElementById('closeSidebar');
const close = document.getElementById('main-content');
const open = document.querySelector('.header');

closeBtn.addEventListener('click', () => {
  sidebar.classList.add('hide');
  openBtn.style.display = 'block';
  close.style.marginLeft = "0";
  open.style.left = "0";
});

openBtn.addEventListener('click', () => {
  sidebar.classList.remove('hide');
  openBtn.style.display = 'none';
  close.style.marginLeft = "200px";
  open.style.left = "200px";
});

function toggleSidebar() { 
  document.getElementById('sidebar').classList.toggle('open'); 
}
