
function validateForm() {    
    /* 
       let fname = document.forms["myForm"]["FirstName"].value;
       let fname = document.forms.myForm.FirstName.value;
    */
//    console.log("validateForm")
    let fname = document.getElementById("FirstName").value;
    let lname = document.getElementById("LastName").value;
    let number = document.getElementById("number").value;
    let house = document.getElementById("house").value;
    let tambon = document.getElementById("tambon").value;
    let ket = document.getElementById("ket").value;

    let mail = document.getElementById("mail").value;

    if(mail.length <=  0 && mail.length > 5){
        alert("กรอกรหัสไปรษณีย์");
        return false;
    }

    if(house.length < 15) {
        alert("กรอกที่อยู่ดีดี");
        return false;
    }
    if(tambon.length < 2) {
        alert("กรอกตำบลดีดี");
                return false;
    }
    if(ket.length < 2) {
        alert("กรอกเขตดีดี");
                return false;
    }
    if (number.length > 13) {
         alert("กรอกบัตรปปชดีดี");
        return false;
    }

    if (lname.length < 3 && lname.length > 30) {
        alert("lastname must be filled out");
        return false;
    }

    if (fname.length < 3 && fname.length > 20) {
        alert("Firstname must be filled out");
        return false;
    }
     else{
        alert("Successfully");
    }
    let country = document.forms["Country"]["Country"].value;
    if (country =="00" ) {
        alert("Country must be selected");
        return false;
    }
   
    
}
/**
     - การตรวจสอบความยาวของตัวอักษร
     let str = new String( "This is string" );
     document.write("str.length is:" + str.length);
     // str.length is: 14
     - การหาตำแหน่งข้อความในชุดตัวอักษร
     let str = "Hello world, welcome to the universe.";
     let n = str.indexOf("welcome"); 
     // n = 13
*/