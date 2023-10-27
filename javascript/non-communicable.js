function openImageModal(imageUrl) {
    var modal = document.getElementById('myModal');
    var modalImg = document.getElementById('modalImage');
    modalImg.src = imageUrl; // Setting the src of the image tag to the passed URL
    modal.style.display = "flex"; // Displaying the modal
    modal.style.animation = "fadeIn 0.5s";
  }
  
  function closeImageModal() {
    var modal = document.getElementById('myModal');
    modal.style.animation = "fadeOut 0.5s";
    setTimeout(function() {
      modal.style.display = "none";
    }, 500); // Hiding the modal after the animation completes
  }