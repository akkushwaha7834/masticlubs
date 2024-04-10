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

const show = document.getElementById("show");
const moreText = document.querySelector(".more-text");

show.addEventListener("click", function () {
  moreText.classList.toggle("d-none");
  if (moreText.classList.contains("d-none")) {
    show.textContent = "Show More";
  } else {
    show.textContent = "Show Less";
  }
});
