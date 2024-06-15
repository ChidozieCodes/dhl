// window.alert('hi')
let generatebtn = document.querySelector('.ven');
let generatebtninput = document.querySelector('#vene');

generatebtn.addEventListener('click', function(e) {
    e.preventDefault();
    let code = Math.random().toString(36).substring(2,10);
    generatebtninput.value = code;
    
})