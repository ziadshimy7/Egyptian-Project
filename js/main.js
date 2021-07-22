"use strict";
// VARIABLES' ASSIGNMENT
const modalRegister = document.querySelector(".modal-register");
const modalLogin = document.querySelector(".modal-login");
const overlay = document.querySelector(".overlay-login");
const btnCloseModal = document.querySelectorAll(".btn--close-modal");
const btnsOpenModal = document.querySelectorAll(".btn--show-modal");
const btnSubmitForm = document.querySelector(".btn--submit");
const api = document.querySelector(".ajax-call");
const btnSignIn = document.querySelector(".sign-in-button");
const btnRegister = document.querySelector(".register-button");
const generalInfo = document.querySelector(".general-info");
//Opening main form(Log in)

const openModal = function (e) {
  e.preventDefault();
  modalLogin.classList.remove("hidden-1");
  overlay.classList.remove("hidden-1");
};
//Opening the register and log in forms.
const openRegisterForm = function (e) {
  e.preventDefault();
  modalLogin.classList.add("hidden-1");
  modalRegister.classList.remove("hidden-1");
};
const openSignInForm = function (e) {
  e.preventDefault();
  modalRegister.classList.add("hidden-1");
  modalLogin.classList.remove("hidden-1");
};
//Closing the form visible to user
const closeModal = function () {
  modalLogin.classList.add("hidden-1");
  overlay.classList.add("hidden-1");
  modalRegister.classList.add("hidden-1");
};

// EVENT HANDLERS
btnRegister.addEventListener("click", openRegisterForm);
btnSignIn.addEventListener("click", openSignInForm);
btnsOpenModal.forEach(function (btn) {
  btn.addEventListener("click", openModal);
});
btnCloseModal.forEach(function (btn) {
  btn.addEventListener("click", closeModal);
});
overlay.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  if (
    e.key === "Escape" &&
    (!modalRegister.classList.contains("hidden-1") ||
      !modalLogin.classList.contains("hidden-1"))
  ) {
    closeModal();
  }
});
// APIS FUNCTIONS
// const weather = function (data) {
//   const html = `
//   <div class="col">
//     <div class="card mb-4 box-shadow h-100">
//   <div class="card-header">
//       <h4 class="my-0 font-weight-normal header">Weather</h4>
//    </div>
//    <div class="card-body">
//       <h1 class="card-title pricing-card-title font">${data.name}: ${data.main.temp}<img src="http://openweathermap.org/img/w/${data.weather[0].icon}.png
//       "></i></h1>

//    </div>
//    <a href="https://www.accuweather.com/en/eg/cairo/127164/weather-forecast/127164" target="_blank" <button type="button" class="btn btn-lg btn-block btn-secondary">More weather information</button></a>
//   </div>
//   </div>`;

//   generalInfo.insertAdjacentHTML("beforeend", html);
// };
// const currency = function (data) {
//   const html = `<div class="col">
//     <div class="card mb-4 box-shadow h-100">
//   <div class="card-header">
//       <h4 class="my-0 font-weight-normal header">Currency</h4>
//    </div>
//    <div class="card-body">
//       <h1 class="card-title pricing-card-title font">1 USD $ = ${data.egp} EGP</h1>
//       <p class="font">Date: ${data.date}</p>

//    </div>
//    <a href="https://www.banquemisr.com/en/exchangerates" target="_blank"<button type="button" class="btn btn-lg btn-block btn-secondary">View more currencies</button></a>
//   </div>
//   </div>`;
//   generalInfo.insertAdjacentHTML("beforeend", html);
// };

// // AJAX CALLS

// fetch(`https://api.openweathermap.org/data/2.5/weather?q=alexandria&appid=3c0286e8d77720ca91b545a49769905a&units=metric
// `)
//   .then((response) => response.json())
//   .then((data) => {
//     weather(data);
//   });

// fetch(`https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/usd/egp.json
// `)
//   .then((response) => response.json())
//   .then((data) => currency(data));
