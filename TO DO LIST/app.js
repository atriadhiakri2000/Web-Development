const form = document.querySelector("#taskform");

const tasklist = document.querySelector('.collection');

const clearbtn = document.querySelector(".class-task");

const filter = document.querySelector("#filter");

const taskinput = document.querySelector("#task");

loadevents();

function loadevents() {

    form.addEventListener("submit", addtask);

    tasklist.addEventListener("click", deletetask);

    clearbtn.addEventListener("click", clearall);

    filter.addEventListener("keyup", filtertask);

    document.addEventListener('DOMContentLoaded', getTask);
 
}

function getTask() {

    let i;

    if(localStorage.getItem("i") === null ) {

        i = [];
    }

    else {
        
        i = JSON.parse(localStorage.getItem('i'));

    }

    
    
    i.forEach(function(e) {

        // console.log(e.value);

        const li = document.createElement("li");

        li.className = 'collection-item';

        // console.log(li);

        li.appendChild(document.createTextNode(e));
        var d = new Date();
        // li.appendChild(document.createTextNode("             Date : - "));
        // li.appendChild(document.createTextNode(d));
        const dt = document.createElement("div");
        dt.className = "d-flex justify-content-center";
        dt.innerHTML = d;
        li.appendChild(dt);

        const link = document.createElement("a");

        link.className = "delete-item";

        link.innerHTML = '<i class="fa fa-registered right "></i>';

        li.appendChild(link);
        

        tasklist.appendChild(li);

    })

}

function filtertask(e) {

    const text = e.target.value.toUpperCase();

    document.querySelectorAll(".collection-item").forEach(
        
        function(i) {

            const j = i.firstChild.textContent;

            if(j.toUpperCase().indexOf(text) != -1) {

                i.style.display = "block";

            }

            else {

                i.style.display = "none";

            }

        }

    )

}

function clearall(e) {

    if(confirm("U sure u wanna clear list!!!")) {

        while(tasklist.firstChild) {

            tasklist.removeChild(tasklist.firstChild);

        }

    }

    CTfromLS();

}

function CTfromLS() {

    localStorage.clear();

}

function addtask(e) {

    if(taskinput.value === "") {

        alert("Add a valid task!!!");

    }

    var lt = [];
    // lt=localStorage.setItem("someVarKey");
    // lt.push(taskinput.value);
    var n = lt.includes(taskinput.value)
    if(localStorage.getItem(taskinput.value) === null){

        // console.log("1");
        const li = document.createElement("li");

        li.className = 'collection-item';

        li.appendChild(document.createTextNode(taskinput.value));
        // var d = new Date();
        // li.appendChild(document.createTextNode("             Date : - "));
        // li.appendChild(document.createTextNode(d));
        var d = new Date();
        // li.appendChild(document.createTextNode("             Date : - "));
        // li.appendChild(document.createTextNode(d));
        const dt = document.createElement("div");
        dt.className = "d-flex justify-content-center";
        dt.innerHTML = d;
        li.appendChild(dt);

        const link = document.createElement("a");

        link.className = "delete-item";

        link.innerHTML = '<i class="fa fa-registered right "></i>';

        li.appendChild(link);

        tasklist.appendChild(li);

        storeinLS(taskinput.value);

        taskinput.value = '';

        e.preventDefault();

        localStorage.setItem("someVarKey",lt);

    }
    else{
        // console.log("0");
        alert("Already exists");
    }
    

    // console.log(taskinput.value);
 
}

function deletetask(e) {

    if(e.target.parentElement.classList.contains("delete-item")) {

        if(confirm("U sure u wanna delete!!!")) {

            e.target.parentElement.parentElement.remove();

            deletetaskfromLS(e.target.parentElement.parentElement);

        }

    }

}

function deletetaskfromLS(t) {

    let i;

    if(localStorage.getItem("i") === null ) {

        i = [];
    }

    else {

        i = JSON.parse(localStorage.getItem('i'));

    }

    i.forEach(function(task, j) {

        if(t.textContent === task) {

            i.splice(j, 1);

        }

    });

    localStorage.setItem("i", JSON.stringify(i));

}

function storeinLS(t) {

    var i;

    if(localStorage.getItem("i") === null ) {

        i = [];
    }

    else {

        i = JSON.parse(localStorage.getItem('i'));

    }

    if(i.includes(t) === false ){
        i.push(t);
        console.log(i);

        localStorage.setItem("i", JSON.stringify(i));

    }
    else{
        alert("Already there");
        window.onload = timedRefresh(10);
    }
    
    
}

