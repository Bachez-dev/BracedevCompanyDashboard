function navigatePages(pageId, btn) {
  const pages = document.querySelectorAll('.page');
  pages.forEach(page => page.style.display = 'none');

  const activePage = document.getElementById(pageId);
  if (activePage) {
    activePage.style.display = 'block';
  }

  document.querySelectorAll('.menu-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');

  localStorage.setItem('activePage', pageId);

  window.onload = function () {
    const savedPage = localStorage.getItem('activePage') || 'Dashboard';
    showPage(savedPage);
  }
}

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

