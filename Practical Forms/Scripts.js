document.addEventListener("DOMContentLoaded", function () {
  // Function to add a new entry to the table
  function addEntryToTable(cat, type) {
    const table = document.querySelector("#tableHobby");
    const newRow = table.insertRow(-1);

    const cell1 = newRow.insertCell(0);
    cell1.textContent = table.rows.length - 1;

    const cell2 = newRow.insertCell(1);
    cell2.textContent = cat;

    const cell3 = newRow.insertCell(2);
    cell3.textContent = type;

    const cell4 = newRow.insertCell(3);
    const deleteButton = document.createElement("button");
    deleteButton.textContent = "Del";
    deleteButton.className = "btn btn-danger delete";
    cell4.appendChild(deleteButton);
  }

  // Function to handle form submission
  document.querySelector("#hobbyForm").addEventListener("submit", function (event) {
    event.preventDefault();
    const cat = document.querySelector("#Cat").value;
    const type = document.querySelector("#Type").value;

    if (cat && type) {
      addEntryToTable(cat, type);
      document.querySelector("#Cat").value = "";
      document.querySelector("#Type").value = "";
    }
  });

  // Function to handle delete button clicks
  document.querySelector("#tableHobby").addEventListener("click", function (e) {
    if (e.target.classList.contains("delete")) {
      const row = e.target.parentElement.parentElement;
      row.remove();
    }
  });
});
