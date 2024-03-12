function changethaiLanguage() {
      var selectedLanguage = document.getElementById("changeLanguage");
      var emailLabel = document.getElementById("emaillabel");
      var passwordLabel = document.getElementById("password");
      var submitButton = document.getElementById("submitButton");

      while (emailLabel.firstChild) {
        emailLabel.removeChild(emailLabel.firstChild);
      }
      while (selectedLanguage.firstChild) {
        selectedLanguage.removeChild(selectedLanguage.firstChild);
      }

      while (passwordLabel.firstChild) {
        passwordLabel.removeChild(passwordLabel.firstChild);
      }
      while (submitButton.firstChild) {
        submitButton.removeChild(submitButton.firstChild);
      }

      const elanguage = "อีเมล";
      const planguage = "รหัสผ่าน";
      const clanguage = "เปลื่ยนภาษา";
      const slanguage = "ยืนยัน";
     
   

      let ol1 = document.createElement("p");
      let ol2 = document.createElement("p");
      let ol3 = document.createElement("span");
      let ol4 = document.createElement("span");
      let etxt = document.createTextNode(elanguage);
      let ptxt = document.createTextNode(planguage);
      let ctxt = document.createTextNode(clanguage);
      let stxt = document.createTextNode(slanguage);
      ol1.appendChild(etxt);
      ol2.appendChild(ptxt);
      ol3.appendChild(ctxt);
      ol4.appendChild(stxt);
      emailLabel.appendChild(ol1);
      passwordLabel.appendChild(ol2);
      selectedLanguage.appendChild(ol3);
      submitButton.appendChild(ol4);
      document.getElementById("thai").innerText = "ไทย";
      document.getElementById("english").innerText = "อังกฤษ";
    }
    function changeengLanguage() {
      var selectedLanguage = document.getElementById("changeLanguage");
      var emailLabel = document.getElementById("emaillabel");
      var passwordLabel = document.getElementById("password");
      var submitButton = document.getElementById("submitButton");

      while (emailLabel.firstChild) {
        emailLabel.removeChild(emailLabel.firstChild);
      }
      while (selectedLanguage.firstChild) {
        selectedLanguage.removeChild(selectedLanguage.firstChild);
      }

      while (passwordLabel.firstChild) {
        passwordLabel.removeChild(passwordLabel.firstChild);
      }
      while (submitButton.firstChild) {
        submitButton.removeChild(submitButton.firstChild);
      }

      const elanguage = "Email";
      const planguage = "Password";
      const clanguage = "Change Language";
      const slanguage = "Submit";
     

      let ol1 = document.createElement("p");
      let ol2 = document.createElement("p");
      let ol3 = document.createElement("span");
      let ol4 = document.createElement("span");
      let etxt = document.createTextNode(elanguage);
      let ptxt = document.createTextNode(planguage);
      let ctxt = document.createTextNode(clanguage);
      let stxt = document.createTextNode(slanguage);
      ol1.appendChild(etxt);
      ol2.appendChild(ptxt);
      ol3.appendChild(ctxt);
      ol4.appendChild(stxt);
      emailLabel.appendChild(ol1);
      passwordLabel.appendChild(ol2);
      selectedLanguage.appendChild(ol3);
      submitButton.appendChild(ol4);
      document.getElementById("thai").innerText = "Thai";
      document.getElementById("english").innerText = "English";
    }