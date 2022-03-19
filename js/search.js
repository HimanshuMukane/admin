// get input field and add 'keyup' event listener
let searchInput = document.querySelector('.search-input');
searchInput.addEventListener('keyup', search);

// get all title
let titles = document.querySelectorAll('.main .title');
let searchTerm = '';
let tit = '';

function search(e) {
    // get input fieled value and change it to lower case
    searchTerm = e.target.value.toLowerCase();

    titles.forEach((title) => {
        // navigate to p in the title, get its value and change it to lower case
        tit = title.textContent.toLowerCase();
        // it search term not in the title's title hide the title. otherwise, show it.
        tit.includes(searchTerm) ? title.style.display = 'block' : title.style.display = 'none';
    });
}