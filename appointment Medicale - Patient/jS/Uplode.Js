const fileInput = document.getElementById('fileInput');
const imageContainer = document.getElementById('imageContainer');
const displayedImage = document.getElementById('displayedImage');

fileInput.addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const reader = new FileReader();
    reader.onload = function(event) {
      displayedImage.src = event.target.result;
    };
    reader.readAsDataURL(file);
  }
});