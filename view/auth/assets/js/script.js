//Ejecutando funciones
document.getElementById("btn__iniciar-sesion").addEventListener("click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click", register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document.querySelector(".formulario__register");
var contenedor_login_register = document.querySelector(
    ".contenedor__login-register"
);
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document.querySelector(".caja__trasera-register");

//FUNCIONES

function anchoPage() {
    if (window.innerWidth > 850) {
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "block";
    } else {
        caja_trasera_register.style.display = "block";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.display = "none";
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
    }
}

anchoPage();

function iniciarSesion() {
    if (window.innerWidth > 850) {
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "10px";
        formulario_register.style.display = "none";
        caja_trasera_register.style.opacity = "1";
        caja_trasera_login.style.opacity = "0";
    } else {
        formulario_login.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_register.style.display = "none";
        caja_trasera_register.style.display = "block";
        caja_trasera_login.style.display = "none";
    }
}

function register() {
    if (window.innerWidth > 850) {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "410px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.opacity = "0";
        caja_trasera_login.style.opacity = "1";
    } else {
        formulario_register.style.display = "block";
        contenedor_login_register.style.left = "0px";
        formulario_login.style.display = "none";
        caja_trasera_register.style.display = "none";
        caja_trasera_login.style.display = "block";
        caja_trasera_login.style.opacity = "1";
    }
}
/*==============================*
*
*
*
* =============================*/
/*==============================*
*
*
*
* =============================*/
/*==============================*
*
*
*
* =============================*/
/*==============================*
*
*  REGISTER
*
* =============================*/
$(document).ready(() => {
    // limpiar el formulario
    $("#form_register input.field").val("");

    $("#register").click(function(e) {
        e.preventDefault();

        const data_register = {};
        const $data_serialize = $("#form_register").serializeArray();

        for (const field in $data_serialize) {
            if (Object.hasOwnProperty.call($data_serialize, field)) {
                const field_element = $data_serialize[field];
                data_register[field_element.name] = field_element.value;
            }
        }

        const validate_register = validateForm_register(data_register);
        if (validate_register) {
            submit_form_register(data_register);
        }
    });

    /* PREGUNTAMOS SI EL EMAIL YA ExISTE EN LA BASE DE DATOS */
    $("#form_register input#email").on("change", function() {
        const email = $(this).val();
        check_if_email_exist(email);
    });
});

const assign_valid_inputs = () => {
    $(`input[name="${field}"]`).addClass("was-validated");
};

const clean_error_inputs = () => {
    $("#form_register input.field").removeClass("is-invalid");
};

const check_if_email_exist = email => {
    $.ajax({
        url: "app/controller/validateExistEmailController.php",
        type: "POST",
        data: { email: email },
        success: response => {
            console.log("response", response);
            if (response == 202) {
                // TODO: el usuario ya existe, mostrar una alerta
                alert("Este correo ya esta en uso, eliga otro");
                return false;
            }

            if (response == 200) {
                // AQUI LO QUE SEA VALIDO
            }

            // TODO: el usuario esta libre para registrar
            return false;
        },
        error: error => {
            // TODO: validar error de endpoint
            console.log(error);
            return false;
        }
    });
};

const validateForm_register = data => {
    let validation_register = true;

    clean_error_inputs();

    for (const field in data) {
        if (Object.hasOwnProperty.call(data, field)) {
            const value = data[field];
            if (value === "") {
                $(`input[name="${field}"]`).addClass("is-invalid");
                empty_fields();
                console.log("field", field);
                validation_register = false;
            }
        }
    }

    return validation_register;
};

const submit_form_register = data => {
    $.ajax({
        url: "app/controller/validateRegisterController.php",
        type: "POST",
        data: data,
        success: function(response) {
            if (response == 200) {
                successful_register();
                window.location.href = "login";
                return true;
            }
            console.log(response);

            error_register();
            return false;
        },
        error: function(error) {
            error_register();

            console.log(error);
            return false;
        }
    });
    return true;
};

/*==============================*
*
*
*
* =============================*/
/*==============================*
*
*
*
* =============================*/
/*==============================*
*
* LOGIN
*
* =============================*/
$(document).ready(() => {
    $("#login").click(function(e) {
        e.preventDefault();

        const data_login = {};
        const $data_serialize = $("#form_login").serializeArray();

        $($data_serialize).each((key, field) => {
            data_login[field.name] = field.value;
        });

        const validate_login = validateLogin(data_login);
        if (validate_login) {
            submit_form_login(data_login);
        }
    });
});

/* VALIDACION DE DATOS DE LOGIN */
const validateLogin = data => {
    let validation_login = false;

    $(data).each((key, field) => {
        if (field.email === "" || field.password === "") {
            validation_login = false;
            empty_fields();
            $("#form_login .field").addClass("is-invalid");
            return false;
        }

        validation_login = true;
    });

    return validation_login;
};

/* ENVIAR LA DATA LOGIN AL BACKEND POR AJAX */
const submit_form_login = data => {
    $.ajax({
        url: "app/controller/validateLoginController.php",
        type: "POST",
        data: data,
        success: response => {
            if (response == 200) {
                successful_login();

                setTimeout(() => {
                    window.location.href = "welcome";
                }, 1000);

                return true;
            }

            if (response == 404) {
                error_login();
                return false;
            }

            console.log(response);

            /* error_login(); */
            return false;
        },
        error: error => {
            error_login();

            console.log(error);
            return false;
        }
    });
};

/*==============================*
*
*
*
* =============================*/
/*==============================*
*
*
*
* =============================*/
/*==============================*
*
*
*
* =============================*/

/*==============================*
 *
 *  ALERT MESSAGES SESSIONES
 *
 * =============================*/

/* MENSAJE DE INICIO DE SESION EXITOSO */
const successful_login = () => {
    return alert("BIENVENIDO");
};

/* MENSAJE DE ERROR AL REGISTRAR */
const error_register = () => {
    return alert("ERROR ALA REGISTRARCE");
};

/* MENSAJE DE ERROR AL INICIAR SESION */
const error_login = () => {
    return alert("DATOS INCORRECTOS");
};

/* MENSAJE DE RELLENE LOS TODOS LOS CAMPOS */
const empty_fields = () => {
    return alert("RELLENE TODO LOS CAMPOS");
};

/* MENSAJE DE REGISTRO EXITOSO */
const successful_register = () => {
    return alert("REGISTRO CON EXITO");
};
