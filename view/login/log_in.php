<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <link href="../../css/register.css" rel="stylesheet">
    <link href="../../css/resetpass.css" rel="stylesheet">
    <link href="../../css/login.css" rel="stylesheet">
    <!-- <link href="assets/css/profile.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="./fonts/themify-icons-font/themify-icons/themify-icons.css" rel="stylesheet">
</head>

<body>
    <!-- <div class="js-component" data-name="header" data-ext="html"></div>
    <div class="js-component" data-name="footer" data-ext="html"></div> -->
    <div class="js-component" data-name="login" data-ext="php"></div>
    <script>
        // function myFunction() {
        //     var x = document.getElementById("password");
        //     if (x.type === "password") {
        //         x.type = "text";
        //     } else {
        //         x.type = "password";
        //     }
        // }
    </script>
    <script>
        const components = document.querySelectorAll('.js-component')

        const loadComponent = async (c) => {
            const { name, ext } = c.dataset
            const response = await fetch(`${name}.${ext}`)
            const html = await response.text()
            c.innerHTML = html
        }
        [...components].forEach(loadComponent);
        setInterval(() => {
            const switchBtn = document.getElementById('login-switch-btn') || document.getElementById('register-switch-btn') || document.getElementById('reset-pass-switch-btn');
            switchBtn.addEventListener('click', (e) => {
                e.preventDefault();
                const cpn = document.querySelector('.js-component');
                if (switchBtn.getAttribute('id') == 'login-switch-btn') {
                    cpn.setAttribute('data-name', 'login');
                }
                else if (switchBtn.getAttribute('id') == 'register-switch-btn') {
                    cpn.setAttribute('data-name', 'register');
                }
                else if (switchBtn.getAttribute('id') == 'reset-pass-switch-btn') {
                    cpn.setAttribute('data-name', 'resetpass');
                }
                loadComponent(cpn);
            })
        }, 1000);
    </script>
    <script src="../../bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</body>

</html>