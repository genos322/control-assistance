(function () {
  'use strict'

  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })

})()
function togglePasswordVisibility()
{
  const password = document.getElementById('txtPassword');
  const eyeCheck = document.getElementById('eyeCheck');
  if (password.type === "password") {
    password.type = "text";
    eyeCheck.classList.remove('fa-eye');
    eyeCheck.classList.add('fa-eye-slash');
  } else {
    password.type = "password";
    eyeCheck.classList.remove('fa-eye-slash');
    eyeCheck.classList.add('fa-eye');
  }
}