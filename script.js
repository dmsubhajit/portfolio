console.log("working");

let theme = localStorage.getItem("theme");
if (theme == null) {
  setTheme("light");
} else {
  setTheme(theme);
}

let themeDots = document.getElementsByClassName("theme-dot");

for (var i = 0; themeDots.length > i; i++) {
  themeDots[i].addEventListener("click", function () {
    let mode = this.dataset.mode;
    console.log("Option clicked:", mode);
    setTheme(mode);
  });
}

function setTheme(mode) {
  if (mode == "light") {
    document.getElementById("theme-style").href = "style.css";
  }

  if (mode == "blue") {
    document.getElementById("theme-style").href = "blue.css";
  }

  if (mode == "green") {
    document.getElementById("theme-style").href = "green.css";
  }

  if (mode == "purple") {
    document.getElementById("theme-style").href = "purple.css";
  }

  localStorage.setItem("theme", mode);
}

//Contact Form in PHP
// const form = document.querySelector("form"),
//   statusTxt = form.querySelector("#submit-btn span");
// form.onsubmit = (e) => {
//   e.preventDefault();
//   statusTxt.style.color = "#0D6EFD";
//   statusTxt.style.display = "block";
//   statusTxt.innerText = "Sending your message...";
//   form.classList.add("disabled");

//   let xhr = new XMLHttpRequest();
//   xhr.open("POST", "message.php", true);
//   xhr.onload = () => {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//       let response = xhr.response;
//       if (
//         response.indexOf("required") != -1 ||
//         response.indexOf("valid") != -1 ||
//         response.indexOf("failed") != -1
//       ) {
//         statusTxt.style.color = "red";
//       } else {
//         form.reset();
//         setTimeout(() => {
//           statusTxt.style.display = "none";
//         }, 3000);
//       }
//       statusTxt.innerText = response;
//       form.classList.remove("disabled");
//     }
//   };
//   let formData = new FormData(form);
//   xhr.send(formData);
// };
