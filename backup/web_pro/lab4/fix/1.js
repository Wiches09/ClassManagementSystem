var zero = 0;
function get() {
  if (zero % 2 == 0) {
    changelanguagethai();
  } else {
    changelanguage();
  }
}
console.log(zero);
function changelanguage() {
  zero += 1;
  console.log("12");
  let fname = document.getElementById("FirstName");
  fname.innerText = "FirstName";
  let lname = document.getElementById("LastName");
  lname.innerText = "Lastname";
  let con = document.getElementById("con");
  con.innerText = "Selected Country";
  let thai = document.getElementById("thai");
  thai.innerText = "Thai";
  let veit = document.getElementById("veit");
  veit.innerText = "Veitnam";
  let laos = document.getElementById("laos");
  laos.innerText = "Laos";
  let maly = document.getElementById("maly");
  maly.innerText = "Malasay";
  let sing = document.getElementById("sing");
  sing.innerText = "Singapro";
  let phi = document.getElementById("phi");
  phi.innerText = "Philipin";
  let may = document.getElementById("may");
  may.innerText = "Maymar";
  let cam = document.getElementById("cam");
  cam.innerText = "Cambodia";
  let bru = document.getElementById("bru");
  bru.innerText = "Brunai";
  let button = document.getElementById("button");
  button.innerText = "Change Language";
}
function changelanguagethai() {
  zero += 1;
  console.log("123");
  let fname = document.getElementById("FirstName");
  fname.innerText = "ชื่อ";
  let lname = document.getElementById("LastName");
  lname.innerText = "นามสกุล";
  let con = document.getElementById("con");
  con.innerText = "เลือกประเทศ";
  let thai = document.getElementById("thai");
  thai.innerText = "ไทย";
  let veit = document.getElementById("veit");
  veit.innerText = "เวียดนาม";
  let laos = document.getElementById("laos");
  laos.innerText = "ลาว";
  let maly = document.getElementById("maly");
  maly.innerText = "มาเล";
  let sing = document.getElementById("sing");
  sing.innerText = "สิงค์โปร";
  let phi = document.getElementById("phi");
  phi.innerText = "ฟิลิปิน";
  let may = document.getElementById("may");
  may.innerText = "พม่า";
  let cam = document.getElementById("cam");
  cam.innerText = "กัมภูชา";
  let bru = document.getElementById("bru");
  bru.innerText = "บรูไน";
  let button = document.getElementById("button");
  button.innerText = "เปลื่ยนภาษา";
}
