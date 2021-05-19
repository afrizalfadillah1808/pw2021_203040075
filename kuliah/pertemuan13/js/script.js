

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const img = document.querySelector('.img');
  const imgPreview = document.querySelector('.img-preview');

  const oFReader = new FileReader();
  oFReader.readAsDataURL(img.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };

}