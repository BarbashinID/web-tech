document.addEventListener("DOMContentLoaded", () => {
    const tablebody = document.getElementById('tablebody');
    const array = [{ name: "Путин В.В.", dolj: "президент", city: "Москва", tel: "+71111111111" }, { name: "Райан Гослинг", dolj: "актер", city: "Гослингленд", tel: "+51321869" }, { name: "Гослинг Райан", dolj: "режисер", city: "Райанвиль", tel: "+51321869" }];
    buildTable(array);

    var tharray = document.querySelectorAll('tbody th');

    function buildTable(array) {
        let tb = '';
        array.forEach(element => {
            tb += `<tr><th>${element.name}</th><th>${element.dolj}</th><th>${element.city}</th><th>${element.tel}</th></tr>`;
        });
        tablebody.innerHTML = tb;
    }

    tharray.forEach(el => {
        el.addEventListener('click', function () {
            if (!el.classList.contains('creating')) {
                el.classList.add('creating');
                let textbefore = el.textContent;
                el.innerHTML = "<input type='text' value='" + textbefore + "'>";
                el.querySelector('input').addEventListener('keydown', function (e) {
                    if (e.keyCode === 13) {
                        let newtext = this.value;
                        el.innerHTML = newtext;
                        el.classList.remove('creating');
                    }
                });
            }
        });
    });
});