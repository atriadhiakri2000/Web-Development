class Book {

    constructor(title, isbn, author) {

        this.title = title;

        this.author = author;

        this.isbn = isbn;

    }

}

class UI {

    addbooktolist(book) {

        const l = document.getElementById("book-list");

        const row = document.createElement("tr");

        row.innerHTML = `
        
            <td>${book.title}</td>

            <td>${book.author}</td>

            <td>${book.isbn}</td>

            <td><a href="#" class="delete">X</i></td>

        `

        l.appendChild(row);

    }

    deleteobj(target) {

        if(target.className === 'delete') {

            target.parentElement.parentElement.remove();

        }

    }

    showalert(message, className) {

        const div = document.createElement("div");

        div.className = `alert ${className}`;

        div.appendChild(document.createTextNode(message));

        const container = document.querySelector('.container');
    
        const form = document.querySelector('#book-form');

        container.insertBefore(div, form);

        setTimeout(function(){

            document.querySelector('.alert').remove();

        }, 3000);

    }

    clearFields() {

        document.getElementById('title').value = '';

        document.getElementById('author').value = '';

        document.getElementById('isbn').value = '';

    }

}

document.getElementById("book-form").addEventListener('submit', function(e) {

    const title = document.getElementById("title").value;

    const author = document.getElementById("author").value;

    const isbn = document.getElementById("isbn").value;

    const book = new Book(title, author, isbn);

    const ui = new UI;

    if(title === '' || author === '' || isbn === '') {
        
        ui.showalert('Please fill in all fields', 'error');

    } 
      
    else {

        ui.addbooktolist(book);

        ui.showalert('Book Added!', 'success');

        ui.clearFields();

    }
        
    e.preventDefault();

});

document.getElementById('book-list').addEventListener('click', function(e){

    const ui = new UI();
  
    ui.deleteobj(e.target);
  
    ui.showalert('Book Removed!', 'success');
  
    e.preventDefault();

});