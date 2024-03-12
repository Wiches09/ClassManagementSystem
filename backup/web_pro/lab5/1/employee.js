let employee = [
  {
    id: 1,
    gender: " Female",
    firstname: " Davolio",
    lastname: " Nancy",
    job: " Sales Representative",
    address: " 507-20th Ave. E. Apt. 2A",
  },
  {
    id: 2,
    gender: " Male",
    firstname: " Fuller",
    lastname: " Andrew",
    job: " Vice President",
    address: " 908 W. Capital Way",
  },
  {
    id: 3,
    gender: " Female",
    firstname: " Leverling",
    lastname: " Janet",
    job: " Sales Representative",
    address: " 722 Moss Bay Blvd.",
  },
  {
    id: 4,
    gender: " Female",
    firstname: " Peacock",
    lastname: " Margaret",
    job: " Sales Representative",
    address: " 4110 0 ld Redmond Rd.",
  },
  {
    id: 5,
    gender: " Male",
    firstname: " Buchanan",
    lastname: " Steven",
    job: " Sales Manager",
    address: " 14 Garrett Hill",
  },
  {
    id: 6,
    gender: " Male",
    firstname: " Suyama ",
    lastname: "Michael ",
    job: "Sales Representative",
    address: " Coventry House Miner Rd.",
  },
  {
    id: 7,
    gender: " Male",
    firstname: " King",
    lastname: " Robert",
    job: " Sales Representative",
    address: " Edgeham Hollow Winchester Way",
  },
  {
    id: 8,
    gender: " Female",
    firstname: " Callahan",
    lastname: " Laura",
    job: "Inside Sales Coordinator",
    address: " 4726-11th Ave. N.E.",
  },
  {
    id: 9,
    gender: " Female",
    firstname: " Dodsworth",
    lastname: " Anne",
    job: " Sales Representative",
    address: " 7 Houndstooth Rd.",
  },
];
for (var i = 0; i < employee.length; i++) {
  console.log(i);
  let emp =
    "<strong>" +
    employee[i].id +
    "</strong> " +
    "<strong>" +
    employee[i].firstname +
    "</strong> " +
    "<strong>" +
    employee[i].lastname +
    "</strong> " +
    "(" +
    employee[i].gender +
    ") is a " +
    employee[i].job +
    ", " +
    employee[i].address;

  let employeetext = document.createElement("td");
  employeetext.innerHTML = emp;
  let employeetexttr = document.createElement("tr");

  document.getElementById("box").appendChild(employeetexttr);
  employeetexttr.appendChild(employeetext);
}
