// Object Handler
class Student {
  constructor(fname, mname, lname, age, gender) {
    this.fname = fname;
    this.mname = mname;
    this.lname = lname;
    this.age = age;
    this.gender = gender;
  }
}

// User Interface Handler
class UI {
  static stored() {
    fetch("./stored.json")
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        const students = data.Student;
        students.forEach((student, index) => UI.displayStudentToTable(student, index + 1));
      });
  }

  static displayStudentToTable(student, rowNumber) {
    const tableStudent = document.querySelector("#tableStudent");
    const row = document.createElement("tr");

    row.innerHTML = `
      <td>${rowNumber}</td>
      <td>${student.fname}</td>
      <td>${student.mname}</td>
      <td>${student.lname}</td>
      <td>${student.age}</td>
      <td>${student.gender}</td>
    `;
    tableStudent.appendChild(row);
  }

  static addStudentToTable(student) {
    const tableStudent = document.querySelector("#tableStudent");
    const row = document.createElement("tr");

    row.innerHTML = `
      <td>${tableStudent.rows.length + 1}</td>
      <td>${student.fname}</td>
      <td>${student.mname}</td>
      <td>${student.lname}</td>
      <td>${student.age}</td>
      <td>${student.gender}</td>
    `;
    tableStudent.appendChild(row);
  }

  static clearForm() {
    document.querySelector("#fname").value = "";
    document.querySelector("#mname").value = "";
    document.querySelector("#lname").value = "";
    document.querySelector("#age").value = "";
    document.querySelector("#gender").value = "";
  }
}

//Submit
document.querySelector("#hobbyForm").addEventListener("submit", (e) => {
  e.preventDefault();

  const fname = document.querySelector("#fname").value;
  const mname = document.querySelector("#mname").value;
  const lname = document.querySelector("#lname").value;
  const age = document.querySelector("#age").value;
  const gender = document.querySelector("#gender").value;
 
    const student = new Student(fname, mname, lname, age, gender);
    UI.addStudentToTable(student);
    UI.clearForm();
  
});


//Clear
function clearFormFields() {
  document.getElementById("fname").value = "";
  document.getElementById("mname").value = "";
  document.getElementById("lname").value = "";
  document.getElementById("age").value = "";
  document.getElementById("gender").value = "";
}
document.getElementById("clearButton").addEventListener("click", clearFormFields);


// Display Data
UI.stored();
