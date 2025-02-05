function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("expanded");
  document.getElementById("content").classList.toggle("expanded");
  document.getElementById("toggle-btn-container").classList.toggle("expanded");
}

let activeMenu = null;
function toggleSubmenu(id) {
  if (activeMenu && activeMenu !== id) {
      document.getElementById(`submenu-${activeMenu}`).style.display = "none";
  }
  let submenu = document.getElementById(`submenu-${id}`);
  if (submenu.style.display === "block") {
      submenu.style.display = "none";
      activeMenu = null;
  } else {
      submenu.style.display = "block";
      activeMenu = id;
  }
}