function showAlert() {
    alert("Data Berhasil Diperbarui");
}

 // Membaca file yang dipilih oleh pengguna
 function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        // Membuat elemen gambar baru
        var image = new Image();
        image.src = e.target.result;
        image.classList.add("preview-image"); // Menambahkan kelas CSS

        // Menambahkan gambar ke pratinjau
        var preview = document.getElementById("preview");
        preview.innerHTML = "";
        preview.appendChild(image);
      };

      reader.readAsDataURL(input.files[0]); // Membaca file sebagai URL data
    }
  }

  // Mendengarkan perubahan pada input file
  var uploadFile = document.getElementById("uploadFile");
  uploadFile.addEventListener("change", function() {
    readURL(this);
  });