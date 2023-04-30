function toggleSidebar() {
    document.querySelector('.sidebar').classList.toggle('active');
  }
  
  document.querySelector('.menu-icon').addEventListener('click', toggleSidebar);
  