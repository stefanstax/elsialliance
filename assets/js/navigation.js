function toggleMenu() {
  let menuContainer = document.getElementById("menuToggler");
  menuContainer.classList.toggle("visibility");

  let menuItem = menuContainer.querySelectorAll("li");
  let i;
  for (i = 0; i < menuItem.length; i++) {
    menuItem[i].addEventListener("click", toggleMenu);
  }
}

function insertAfter(newNode, existingNode) {
  existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
}

(function addCarots() {
  let hasChildren = document.querySelector(".menu-item-has-children a");
  let icon = '<i class="fa-solid fa-caret-down"></i>';
  hasChildren.innerHTML += icon;
})();
