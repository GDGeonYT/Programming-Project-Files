// Object Handler
class Thing {
  constructor(Cat, Type) {
    this.Cat = Cat;
    this.Type = Type;
  }
}

// Store Data
document.querySelector("#hello").addEventListener("submit", (event) => {
  event.preventDefault();

  const Cat = document.querySelector("#Cat").value;
  const Type = document.querySelector("#Type").value;

  const phone = new Thing(Cat, Type);
  UI.displayPhoneToTable(phone);
});

// Display to table
class UI {

  static displayPhoneToTable(phone) {
    const phoneTable = document.querySelector("#tableThings");
    const row = document.createElement("tr");

    row.innerHTML = `
      <td></td>
      <td>${phone.Cat}</td>
      <td>${phone.Type}</td>
      <td><button class="btn btn-danger delete">Del</button></td>
    `;

    phoneTable.appendChild(row);
  }
  static die(el) {
      if(el.classList.contains("delete")) {
          el.parentElement.parentElement.remove();
      }
  }
}

//delete
document.querySelector("#tableThings").addEventListener("click", (e) =>{
  UI.die(e.target);
});

// row numbers (currently W.I.P)