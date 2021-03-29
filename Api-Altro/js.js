//global item
//var elem = 0;

class Employer {
    constructor(nome, cognome, email, telefono) {
        this.firstName = nome;
        this.lastName = cognome;
        this.email = email;
        this.phone = telefono;
    }
};

//main function
function loadallelement() {
    requestall();
}

function mainadd(employer, elem) {
    var html = '<td><input class="form-check-input" type="checkbox" name="checkbox" style="margin-left: 1%" id="' + elem + '"></td><td id="' + elem + '" name="name"><p>' + employer.firstName + '</p></td><td id="' + elem + '" name="lname"><p>' + employer.lastName + '</p></td><td id="' + elem + '" name="email"><p>' + employer.email + '</p></td><td id="' + elem + '" name="phone"><p>' + employer.phone + '</p></td>';
    html = html + '<td style="width: 1%"><img onClick="modify()" src="media/modificabut.png" style="width: 30px; height: 30px;" id="' + elem + '"></td>';
    html = html + '<td><img onClick="deletepls(this.id)" src="media/removebut.png" style="width: 30px; height: 30px;" id="' + elem + '"></td>';
    const row = document.createElement('tr');
    var allelement = document.getElementsByName('checkbox');
    row.id = (elem);
    row.innerHTML = html;
    document.getElementById('itemscontainer').appendChild(row);
    elem++;
}

function deletepls(element) {
    try {
        if (element == undefined) {
            var checkboxes = document.getElementsByName('checkbox');
            for (var i = 0, n = checkboxes.length; i < n; i++)
                if (checkboxes[i].checked == true)
                    document.getElementById('itemscontainer').removeChild(document.getElementById(checkboxes[i].id));
        } else {
            if (confirm("Vuoi continuare togliendo il tizio selezionato?"))
                document.getElementById('itemscontainer').removeChild(document.getElementById(element));
        }
    } catch (Exception) {
        //qualcosa
    }
}


function checkboxall(maincheckbox) {
    var checkboxes = document.getElementsByName('checkbox'); //ByName fa un array di elementi checkbox ordinati per nome 
    for (var i = 0, n = checkboxes.length; i < n; i++) {
        checkboxes[i].checked = maincheckbox.checked;
    }
}

//request functions
function requestall() {
    var request = new XMLHttpRequest();
    request.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            resposeall(this.responseText);
        }
    };
    request.open("GET", "http://localhost:8080/api/tutorial/1.0/employees", true);
    request.setRequestHeader("Accept", "*/*");
    request.send();
}

function setjson(value) {
    json = value;
}

function resposeall(json) {
    var employer = JSON.parse(json);
    for (var i = 0; i < 9; i = i + 1) {
        mainadd(employer[i], employer[i].employeeId);
    }
}