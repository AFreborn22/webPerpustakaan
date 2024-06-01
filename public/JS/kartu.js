//localStorage.clear();

document.getElementById('credit-card-form').addEventListener('submit', (event) => {
    event.preventDefault(); // Mencegah form dikirim dan halaman diperbarui

    // Mendapatkan nilai dari input
    var usernameValue = document.querySelector(".username-input ").value;
    var cardHolderValue = document.querySelector('.card-holder-input').value;

    var cvvValue = document.querySelector('.cvv-input').value;


    // Simpan data dari semua input ke local storage
    localStorage.setItem('username', usernameValue);
    localStorage.setItem('cardHolder', cardHolderValue);

    localStorage.setItem('cvv', cvvValue);

});


document.querySelector('.username-input').oninput = () => {
    document.querySelector('.card-number-box').innerText = document.querySelector('.username-input').value;
}

document.querySelector('.card-holder-input').oninput = () => {
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}



document.querySelector('.cvv-input').onmouseenter = () => {
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () => {
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}
document.querySelector('.cvv-input').oninput = () => {
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}
document.querySelector('.front').onmouseenter = () => {
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}
document.querySelector('.back').onmouseleave = () => {
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelector('.username-input').disabled = true;
    document.querySelector('.card-holder-input').disabled = true;

    document.querySelector('.cvv-input').disabled = true;
    document.querySelector('.submit').disabled = true;

    var username = localStorage.getItem('username');
    if (username) {
        document.querySelector('.username-input').value = username;
        document.querySelector('.card-number-box').innerText = username;
    }
    var cardHolder = localStorage.getItem('cardHolder');
    if (cardHolder) {
        document.querySelector('.card-holder-input').value = cardHolder;
        document.querySelector('.card-holder-name').innerText = cardHolder;
    }




    var cvv = localStorage.getItem('cvv');
    if (cvv) {
        document.querySelector('.cvv-input').value = cvv;
        document.querySelector('.cvv-box').innerText = cvv;
    }

    var cardNumber = localStorage.getItem('cardNumber');
    if (cardNumber) {
        document.querySelector('.card-number-input').value = cardNumber;
        document.querySelector('.card-number-box').innerText = cardNumber;
    }


});