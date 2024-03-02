async function componentHeader() {
  const response = await fetch("header.html");
  const htmlContent = await response.text();
  document.getElementById("header-container").innerHTML = htmlContent;
}

componentHeader(); 