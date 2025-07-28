
function navigatePages(pageId, btn) {
  const pages = document.querySelectorAll('.page');
  pages.forEach(page => page.style.display = 'none');

  const activePage = document.getElementById(pageId);
  if (activePage) {
    activePage.style.display = 'block';
  }


  document.querySelectorAll('.menu-btn').forEach(b => b.classList.remove('active'));

  if (btn) {
    btn.classList.add('active');
  }

  localStorage.setItem('activePage', pageId);
}

window.addEventListener('DOMContentLoaded', () => {
  const savedPage = localStorage.getItem('activePage') || 'Dashboard';
  const targetPage = document.getElementById(savedPage);
  const buttons = document.querySelectorAll('.menu-btn');

  document.querySelectorAll('.page').forEach(page => page.style.display = 'none');

  if (targetPage) {
    targetPage.style.display = 'block';
  }
  buttons.forEach(btn => {
    if (btn.dataset.page === savedPage) {
      btn.classList.add('active');
    } else {
      btn.classList.remove('active');
    }
  });
});
function greeting() {


  const time = new Date().getHours();
  const today = new Date();

  const monthNames = ["Jan", "Feb", "March", "April", "May", "June", "July", "August", "Sep", "Oct", "Nov", "Dec"];

  const day = today.getDate();
  const month = monthNames[today.getMonth() + 1];
  const year = today.getFullYear();

  document.getElementById('dates').textContent = `${day} ${month}, ${year}`;
}

greeting();

const revenue = document.getElementById();

// CALENDER

