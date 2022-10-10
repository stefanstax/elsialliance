(function changeCookieIMP() {
  let cookieFooter = document.querySelector(".cky-footer-wrapper");
  if (cookieFooter) {
    let cookieLink = cookieFooter.children[2].children[0];
    let cookieIcon = document.querySelector(".cky-btn-revisit");

    cookieLink.innerHTML = "Stefan Stax";
    cookieLink.href = "https://staxy.io";
    cookieIcon.innerHTML = `<iconify-icon icon="akar-icons:settings-horizontal"></iconify-icon>`;
  }
})();
