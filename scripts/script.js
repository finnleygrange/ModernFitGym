function previewImage() {
  const input = document.querySelector("#file");
  const preview = document.querySelector("#preview-image");

  const file = input.files[0];

  if (file) {
    const reader = new FileReader();

    reader.addEventListener("load", () => {
      preview.src = reader.result;
    });

    reader.readAsDataURL(file);
  } else {
    preview.src = "images/blank-profile-picture.png";
  }
}

function toggleFeild() {
  const feild = document.getElementById("passwordField");
  const toggleFeild = document.getElementById("togglePassword");

  if (type === "password") {
    togglePassword.innerHTML = '<i class="fas fa-eye"></i>';
  } else {
    togglePassword.innerHTML = '<i class="fas fa-eye-slash"></i>';
  }
}

toggleFeild.addEventListener("click", function () {
  const type =
    passwordField.getAttribute("type") === "password" ? "text" : "password";
  passwordField.setAttribute("type", type);
});
