$('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('search-toggle');
    const form = document.getElementById('search-form');
    toggle.addEventListener('click', function(e) {
        e.preventDefault();
        form.classList.toggle('search-form-expanded');
        form.classList.toggle('search-form-collapsed');
    });
});


const searchInput = document.getElementById("search");

  searchInput.addEventListener("focus", () => {
    document.querySelector(".nav-links").classList.add("hide-on-search");
  });

  searchInput.addEventListener("blur", () => {
    document.querySelector(".nav-links").classList.remove("hide-on-search");
  });

  document.addEventListener("DOMContentLoaded", function () {
  const searchInput = document.getElementById("search");
  const navLinks = document.querySelector(".navlinks");

  if (searchInput && navLinks) {
    searchInput.addEventListener("focus", function () {
      navLinks.classList.add("hide-links");
    });

    searchInput.addEventListener("blur", function () {
      navLinks.classList.remove("hide-links");
    });
  }
});
