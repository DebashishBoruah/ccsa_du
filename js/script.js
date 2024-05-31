document.addEventListener("DOMContentLoaded", function () {
    const imageGallery = document.getElementById("image-gallery");
  
    // Replace these image URLs with your own
    const imageUrls = [
      "./photos/about1.jpeg",
      "./photos/about1.jpeg",
      "./photos/alumni.jpeg",
      // Add more image URLs as needed
    ];
  
    imageUrls.forEach((imageUrl) => {
      const imageElement = document.createElement("img");
      imageElement.src = imageUrl;
      imageElement.className = "img-fluid";
      imageGallery.appendChild(imageElement);
  
      // You can add additional logic or event listeners here
    });
  });
  