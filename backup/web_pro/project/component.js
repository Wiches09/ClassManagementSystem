async function componentNavbar() {
  const response = await fetch("navbar.html");
  const htmlContent = await response.text();
  document.getElementById("navbar-container").innerHTML = htmlContent;
}
componentNavbar();

async function componentFooter() {
  const response = await fetch("footer.html");
  const htmlContent = await response.text();
  document.getElementById("footer-container").innerHTML = htmlContent;
}
componentFooter();

async function componentIntroduce() {
  const response = await fetch("introduce.html");
  const htmlContent = await response.text();
  document.getElementById("introduce-container").innerHTML = htmlContent;
}
componentIntroduce();

async function componentGallery() {
  const response = await fetch("gallery.html");
  const htmlContent = await response.text();
  document.getElementById("gallery-container").innerHTML = htmlContent;
}
componentGallery();

async function componentFrameworkCard() {
  const response = await fetch("frameworkcard.html");
  const htmlContent = await response.text();
  document.getElementById("frameworkcard-container").innerHTML = htmlContent;
}
componentFrameworkCard();

async function componentCard() {
  const response = await fetch("carousel.html");
  const htmlContent = await response.text();
  document.getElementById("carousel-container").innerHTML = htmlContent;
}
componentCard();

const text = 'Print "Yongyut Chanuphat 65070193"';
let index = 0;
const outputElement = document.getElementById("name");

function showNextLetter() {
  if (index < text.length) {
    outputElement.textContent += text[index];
    index++;
    setTimeout(showNextLetter, 250);
  }
}

showNextLetter();
