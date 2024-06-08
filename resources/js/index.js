const errorP = document.querySelector('#errors');
const inputPsw1 = document.querySelector('#psw1');
const inputPsw2 = document.querySelector('#psw2');

const checkPassword = () => {
    const dataPsw1 = inputPsw1.value;
    const dataPsw2 = inputPsw2.value;
    if(dataPsw1 == dataPsw2 || dataPsw1.length != 0 || dataPsw2.length != 0) {
        document.querySelector('#sbm').removeAttribute('disabled')
        errorP.innerHTML = "";
    } else {
        errorP.innerHTML = "Passwords don't match";
    }
}
inputPsw1.addEventListener('input', checkPassword);
inputPsw2.addEventListener('input', checkPassword);

