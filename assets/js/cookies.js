function delay(time) {
  let cookieFooter = document.querySelector(".cky-footer-wrapper");
  if (cookieFooter) {
    console.log("Cookie footer does exist");
    let cookieLink = cookieFooter.children[2].children[0];
    let cookieIcon = document.querySelector(".cky-btn-revisit");

    cookieLink.innerHTML = "Stefan Stax";
    cookieLink.href = "https://staxy.io";
    cookieIcon.innerHTML = `<iconify-icon icon="akar-icons:settings-horizontal"></iconify-icon>`;
  } else {
    console.log("Cookie footer doesn't exist");
  }
}

async function RunWithDelay() {
  await delay(1000);
}

RunWithDelay();
