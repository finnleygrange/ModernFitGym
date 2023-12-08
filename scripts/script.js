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

function togglePin() {
  var pinInput = document.getElementById("pinInput");
  var eye = document.getElementsByClassName("eye")[0];

  if (pinInput.type === "password") {
    pinInput.type = "text";
    eye.classList.remove("fa-eye-slash");
    eye.classList.add("fa-eye");
  } else {
    pinInput.type = "password";
    eye.classList.remove("fa-eye");
    eye.classList.add("fa-eye-slash");
  }
}
