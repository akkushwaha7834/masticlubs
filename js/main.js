$(window).on("load", function () {
  // Check if the user has agreed before
  const hasAgreed = localStorage.getItem("hasAgreed");

  // If not agreed yet and not reloading the page after agreeing, show the modal after 3 seconds
  if (!hasAgreed && !sessionStorage.getItem("agreedAndReloaded")) {
    setTimeout(function () {
      $("#exampleModal").modal("show");
    }, 1000);
  }

  // When the agree button is clicked, store in localStorage and hide the modal
  $("#agreeBtn").click(function () {
    localStorage.setItem("hasAgreed", true);
    $("#exampleModal").modal("hide");

    // Set a session storage flag to indicate that the user has agreed and reloaded the page
    sessionStorage.setItem("agreedAndReloaded", true);
  });
});

// fixed header on scroll
window.addEventListener("scroll", function () {
  let nav = document.querySelector("header");
  let scrollPosition = window.scrollY || window.pageYOffset;

  if (scrollPosition >= 100) {
    nav.classList.add("position-fixed", "top-0");
  } else {
    nav.classList.remove("position-fixed", "top-0");
  }
});

$('[data-fancybox="story"]').fancybox({
  buttons: ["slideShow", "thumbs", "zoom", "fullScreen", "share", "close"],
  loop: false,
  slideShow: {
    autoStart: true, // Start the slideshow automatically
    speed: 3000, // Slide duration in milliseconds
  },
  protect: true,
});

$(document).ready(function () {
  $("#show").on("click", function () {
    $("#text-content").toggleClass("line-clamp");
    $("#overlay").toggleClass("overlay");
    if ($(this).text() === "Show more") {
      $(this).text("Show less");
    } else {
      $(this).text("Show more");
    }
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const carouselAlert = document.getElementById("carouselAlert");
  const closeButton = carouselAlert.querySelector("#alertClose");

  // Check session storage to see if the carousel should be hidden
  if (sessionStorage.getItem("carouselClosed") === "true") {
    carouselAlert.style.display = "none";
  }

  // Event listener for the close button
  closeButton.addEventListener("click", function () {
    carouselAlert.style.display = "none";
    sessionStorage.setItem("carouselClosed", "true");
  });
});
