

// Bahasa

document
	.getElementById("add-bahasa-Button")
	.addEventListener("click", function () {
		var newInput = document.getElementById("new-bahasa-Input");
		var newValue = newInput.value.trim();

		if (newValue !== "") {
			var inputContainer = document.getElementById("input-bahasa-Container");

			// Check if there are any existing rows
			var rows = inputContainer.getElementsByClassName("row");
			var lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

			// Create a new row if the last row is already filled with two columns
			if (!lastRow || lastRow.children.length === 2) {
				var newRowDiv = document.createElement("div");
				newRowDiv.classList.add("row");
				inputContainer.appendChild(newRowDiv);
				lastRow = newRowDiv;
			}

			var newColDiv = document.createElement("div");
			newColDiv.classList.add("col-6");

			var newField = document.createElement("div");
			newField.classList.add("d-flex", "gap-3", "mb-2");

			var Input = document.createElement("input");
			Input.type = "text";
			Input.name = "bahasa[]";
			Input.value = newValue;
			Input.classList.add("log-input", "select-dropdown");

			var deleteButton = document.createElement("button");
			deleteButton.type = "button";
			deleteButton.classList.add("delete-Button", "log-primary-button");
			deleteButton.textContent = "Delete";

			newField.appendChild(Input);
			newField.appendChild(deleteButton);
			newColDiv.appendChild(newField);
			lastRow.appendChild(newColDiv);

			newInput.value = "";
		}
	});

document
	.getElementById("input-bahasa-Container")
	.addEventListener("click", function (event) {
		if (event.target.classList.contains("delete-Button")) {
			event.target.parentElement.parentElement.remove();
		}
	});

// Spesialisasi

document
	.getElementById("add-spesialisasi-Button")
	.addEventListener("click", function () {
		var newInput = document.getElementById("new-spesialisasi-Input");
		var newValue = newInput.value.trim();

		if (newValue !== "") {
			var inputContainer = document.getElementById(
				"input-spesialisasi-Container"
			);

			// Check if there are any existing rows
			var rows = inputContainer.getElementsByClassName("row");
			var lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

			// Create a new row if the last row is already filled with two columns
			if (!lastRow || lastRow.children.length === 2) {
				var newRowDiv = document.createElement("div");
				newRowDiv.classList.add("row");
				inputContainer.appendChild(newRowDiv);
				lastRow = newRowDiv;
			}

			var newColDiv = document.createElement("div");
			newColDiv.classList.add("col-6");

			var newField = document.createElement("div");
			newField.classList.add("d-flex", "gap-3", "mb-2");

			var Input = document.createElement("input");
			Input.type = "text";
			Input.name = "spesialisasi[]";
			Input.value = newValue;
			Input.classList.add("log-input", "select-dropdown");

			var deleteButton = document.createElement("button");
			deleteButton.type = "button";
			deleteButton.classList.add("delete-Button", "log-primary-button");
			deleteButton.textContent = "Delete";

			newField.appendChild(Input);
			newField.appendChild(deleteButton);
			newColDiv.appendChild(newField);
			lastRow.appendChild(newColDiv);

			newInput.value = "";
		}
	});

document
	.getElementById("input-sertifikasi-Container")
	.addEventListener("click", function (event) {
		if (event.target.classList.contains("delete-Button")) {
			event.target.parentElement.parentElement.remove();
		}
	});


	document
	.getElementById("add-sertifikasi-Button")
	.addEventListener("click", function () {
		var newInput = document.getElementById("new-sertifikasi-Input");
		var newValue = newInput.value.trim();

		if (newValue !== "") {
			var inputContainer = document.getElementById(
				"input-sertifikasi-Container"
			);

			// Check if there are any existing rows
			var rows = inputContainer.getElementsByClassName("row");
			var lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

			// Create a new row if the last row is already filled with two columns
			if (!lastRow || lastRow.children.length === 2) {
				var newRowDiv = document.createElement("div");
				newRowDiv.classList.add("row");
				inputContainer.appendChild(newRowDiv);
				lastRow = newRowDiv;
			}

			var newColDiv = document.createElement("div");
			newColDiv.classList.add("col-6");

			var newField = document.createElement("div");
			newField.classList.add("d-flex", "gap-3", "mb-2");

			var Input = document.createElement("input");
			Input.type = "text";
			Input.name = "sertifikasi[]";
			Input.value = newValue;
			Input.classList.add("log-input", "select-dropdown");

			var deleteButton = document.createElement("button");
			deleteButton.type = "button";
			deleteButton.classList.add("delete-Button", "log-primary-button");
			deleteButton.textContent = "Delete";

			newField.appendChild(Input);
			newField.appendChild(deleteButton);
			newColDiv.appendChild(newField);
			lastRow.appendChild(newColDiv);

			newInput.value = "";
		}
	});

document
	.getElementById("input-sertifikasi-Container")
	.addEventListener("click", function (event) {
		if (event.target.classList.contains("delete-Button")) {
			event.target.parentElement.parentElement.remove();
		}
	});
// // Pengalaman

// document
// 	.getElementById("add-pengalaman-Button")
// 	.addEventListener("click", function () {
// 		var newInput = document.getElementById("new-pengalaman-Input");
// 		var newValue = newInput.value.trim();

// 		if (newValue !== "") {
// 			var inputContainer = document.getElementById(
// 				"input-pengalaman-Container"
// 			);

// 			// Check if there are any existing rows
// 			var rows = inputContainer.getElementsByClassName("row");
// 			var lastRow = rows.length > 0 ? rows[rows.length - 1] : null;

// 			// Create a new row if the last row is already filled with two columns
// 			if (!lastRow || lastRow.children.length === 2) {
// 				var newRowDiv = document.createElement("div");
// 				newRowDiv.classList.add("row");
// 				inputContainer.appendChild(newRowDiv);
// 				lastRow = newRowDiv;
// 			}

// 			var newColDiv = document.createElement("div");
// 			newColDiv.classList.add("col-6");

// 			var newField = document.createElement("div");
// 			newField.classList.add("d-flex", "gap-3", "mb-2");

// 			var Input = document.createElement("input");
// 			Input.type = "text";
// 			Input.name = "pengalaman[]";
// 			Input.value = newValue;
// 			Input.classList.add("log-input", "select-dropdown");

// 			var deleteButton = document.createElement("button");
// 			deleteButton.type = "button";
// 			deleteButton.classList.add("delete-Button", "log-primary-button");
// 			deleteButton.textContent = "Delete";

// 			newField.appendChild(Input);
// 			newField.appendChild(deleteButton);
// 			newColDiv.appendChild(newField);
// 			lastRow.appendChild(newColDiv);

// 			newInput.value = "";
// 		}
// 	});

// document
// 	.getElementById("input-pengalaman-Container")
// 	.addEventListener("click", function (event) {
// 		if (event.target.classList.contains("delete-Button")) {
// 			event.target.parentElement.parentElement.remove();
// 		}
// 	});
// Sertifikasi

// document
// 	.getElementById("add-sertifikasi-Button")
// 	.addEventListener("click", function () {
// 		var newInput = document.getElementById("new-sertifikasi-Input");
// 		var startDateInput = document.getElementById("start-date");
// 		var endDateInput = document.getElementById("end-date");

// 		var newValue = newInput.value.trim();
// 		var startDateValue = startDateInput.value;
// 		var endDateValue = endDateInput.value;

// 		if (newValue !== "") {
// 			var inputContainer = document.getElementById(
// 				"input-sertifikasi-Container"
// 			);

// 			var newField = document.createElement("div");
// 			newField.classList.add("d-flex", "gap-3", "mb-2");

// 			var inputField = document.createElement("input");
// 			inputField.type = "text";
// 			inputField.name = "sertifikasi[]";
// 			inputField.value = newValue;
// 			inputField.classList.add("log-input", "select-dropdown");

// 			var startDateField = document.createElement("input");
// 			startDateField.type = "date";
// 			startDateField.name = "start_date[]";
// 			startDateField.value = startDateValue;
// 			startDateField.classList.add("log-input");

// 			var endDateField = document.createElement("input");
// 			endDateField.type = "date";
// 			endDateField.name = "end_date[]";
// 			endDateField.value = endDateValue;
// 			endDateField.classList.add("log-input");

// 			var deleteButton = document.createElement("button");
// 			deleteButton.type = "button";
// 			deleteButton.classList.add("delete-Button", "log-primary-button");
// 			deleteButton.textContent = "Delete";

// 			newField.appendChild(inputField);
// 			newField.appendChild(startDateField);
// 			newField.appendChild(endDateField);
// 			newField.appendChild(deleteButton);
// 			inputContainer.appendChild(newField);

// 			newInput.value = "";
// 			startDateInput.value = "";
// 			endDateInput.value = "";
// 		}
// 	});

// document
// 	.getElementById("input-sertifikasi-Container")
// 	.addEventListener("click", function (event) {
// 		if (event.target.classList.contains("delete-Button")) {
// 			event.target.parentElement.remove();
// 		}
// 	});

// Pengalaman

document
	.getElementById("add-pengalaman-Button")
	.addEventListener("click", function () {
		var newInput = document.getElementById("new-pengalaman-Input");
		var startDateInput = document.getElementById("start-pengalaman-date");
		var endDateInput = document.getElementById("end-pengalaman-date");

		var newValue = newInput.value.trim();
		var startDateValue = startDateInput.value;
		var endDateValue = endDateInput.value;

		if (newValue !== "") {
			var inputContainer = document.getElementById(
				"input-pengalaman-Container"
			);

			var newField = document.createElement("div");
			newField.classList.add("d-flex", "gap-3", "mb-2");

			var inputField = document.createElement("input");
			inputField.type = "text";
			inputField.name = "pengalaman[]";
			inputField.value = newValue;
			inputField.classList.add("log-input", "select-dropdown");

			var startDateField = document.createElement("input");
			startDateField.type = "date";
			startDateField.name = "start_pengalaman_date[]";
			startDateField.value = startDateValue;
			startDateField.classList.add("log-input");

			var endDateField = document.createElement("input");
			endDateField.type = "date";
			endDateField.name = "end_pengalaman_date[]";
			endDateField.value = endDateValue;
			endDateField.classList.add("log-input");

			var deleteButton = document.createElement("button");
			deleteButton.type = "button";
			deleteButton.classList.add("delete-Button", "log-primary-button");
			deleteButton.textContent = "Delete";

			newField.appendChild(inputField);
			newField.appendChild(startDateField);
			newField.appendChild(endDateField);
			newField.appendChild(deleteButton);
			inputContainer.appendChild(newField);

			newInput.value = "";
			startDateInput.value = "";
			endDateInput.value = "";
		}
	});

document
	.getElementById("input-pengalaman-Container")
	.addEventListener("click", function (event) {
		if (event.target.classList.contains("delete-Button")) {
			event.target.parentElement.remove();
		}
	});
