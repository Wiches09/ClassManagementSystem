async function componentHeader() {
  const response = await fetch("../page/component/header.php");
  const htmlContent = await response.text();
  document.getElementById("nav-side-container").innerHTML = htmlContent;
}

componentHeader(); 
