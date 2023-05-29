// // FAQ
// let li = document.querySelectorAll(".faq-text li");
// for (var i = 0; i < li.length; i++) {
// 	li[i].addEventListener("click", (e) => {
// 		console.log(li);
// 		let clickedLi;
// 		if (e.target.classList.contains("question-arrow")) {
// 			clickedLi = e.target.parentElement;
// 		} else {
// 			clickedLi = e.target.parentElement.parentElement;
// 		}
// 		clickedLi.classList.toggle("showAnswer");
// 	});
// }

// // Select Option
// const optionMenu = document.querySelector(".select-menu"),
// 	selectBtn = optionMenu.querySelector(".select-btn"),
// 	options = optionMenu.querySelectorAll(".option"),
// 	sBtn_text = optionMenu.querySelector(".sBtn-text");
// selectBtn.addEventListener("click", () =>
// 	optionMenu.classList.toggle("active")
// );
// options.forEach((option) => {
// 	option.addEventListener("click", () => {
// 		let selectedOption = option.querySelector(".option-text").innerText;
// 		sBtn_text.innerText = selectedOption;
// 		optionMenu.classList.remove("active");
// 	});
// });

// // Select Option City
// const optionMenuCity = document.querySelector(".select-menuCity"),
// 	selectBtnCity = optionMenuCity.querySelector(".select-btnCity"),
// 	optionsCity = optionMenuCity.querySelectorAll(".optionCity"),
// 	sBtn_textCity = optionMenuCity.querySelector(".sBtn-textCity");
// selectBtnCity.addEventListener("click", () =>
// 	optionMenuCity.classList.toggle("active")
// );
// optionsCity.forEach((option) => {
// 	option.addEventListener("click", () => {
// 		let selectedOption = option.querySelector(".option-textCity").innerText;
// 		sBtn_textCity.innerText = selectedOption;
// 		optionMenuCity.classList.remove("active");
// 	});
// });

/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
	const toggle = document.getElementById(toggleId),
		nav = document.getElementById(navId);

	toggle.addEventListener("click", () => {
		// Agregar clase show-menu a nav menu
		nav.classList.toggle("show-menu");
		// Agregar show-icon para mostrar y ocultar el icono del menú
		toggle.classList.toggle("show-icon");
	});
};

showMenu("nav-toggle", "nav-menu");
