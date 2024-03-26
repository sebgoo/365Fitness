


    function validateEmail() {
        var email = document.getElementById('email').value; // Získává hodnotu z  ID 'email' a ukládá ju do promennej
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/; // Vytvara regulární výraz emailRegex, ktory určuje platnu emailovu adresu.  Urcuje ci zadany text splnuje kriteria

        if (emailRegex.test(email)) {  // sa použiva test aby zistil, či splna formát.
            alert('Emailová adresa je v správnom formáte. Údaje boli odoslané. Ďakujeme!');
        } else {
            alert('Chybný formát emailovej adresy. Zadejte prosím platnú emailovu adresu.');
        }
    }

