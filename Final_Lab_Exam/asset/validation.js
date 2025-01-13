// Check author name
function check_author_name() {
    let author_name = document.getElementById("author_name_id").value;
    if (author_name == "") {
        document.getElementById("author_name_val").style.display = "block";
    } else {
        document.getElementById("author_name_val").style.display = "none";
    }
}

// Check contact number
function check_contact_no() {
    let contact_no = document.getElementById("contact_no_id").value;
    if (contact_no == "") {
        document.getElementById("contact_no_val").style.display = "block";
    } else {
        document.getElementById("contact_no_val").style.display = "none";
    }
}

// Check username
function check_username() {
    let user_name = document.getElementById("user_name_id").value;
    if (user_name == "") {
        document.getElementById("user_name_val").style.display = "block";
    } else {
        document.getElementById("user_name_val").style.display = "none";
    }
}

// Check password
function check_password() {
    let password = document.getElementById("pass_id").value;
    if (password == "") {
        document.getElementById("password_val").style.display = "block";
    } else {
        document.getElementById("password_val").style.display = "none";
    }
}

// Validate form before submitting
function validateForm() {
    check_author_name();
    check_contact_no();
    check_username();
    check_password();

    let isValid = true;

    // If any validation error exists, prevent form submission
    if (document.getElementById("author_name_val").style.display == "block" ||
        document.getElementById("contact_no_val").style.display == "block" ||
        document.getElementById("user_name_val").style.display == "block" ||
        document.getElementById("password_val").style.display == "block") {
        isValid = false;
    }

    return isValid;
}

function search_author() {
    let search = document.getElementById("search").value;
    let xhttp = new XMLHttpRequest();
  
    xhttp.open("POST", "../controller/searchAuthor.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("search=" + search);
  
    xhttp.onreadystatechange = function () {
      if (xhttp.readyState === 4 && xhttp.status === 200) {
        let tableBody = document.querySelector("table tbody") || document.createElement("tbody");
        if (!tableBody.parentElement) {
          document.querySelector("table").appendChild(tableBody);
        }
  
        if (xhttp.responseText.trim() === "Not found") {
          tableBody.innerHTML = `
            <tr>
              <td colspan = "5">Not found</td>
            </tr>`;
        } else {
          tableBody.innerHTML = xhttp.responseText;
        }
      }
    };
  }