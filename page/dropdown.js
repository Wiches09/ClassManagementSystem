function initializeDropdown() {
    // Find the elements for the dropdown toggle and dropdown menu
    const dropdownToggle = document.querySelector(".dropdown-toggle");
    const dropdownMenu = document.querySelector(".dropdown-menu");
  
    // Add event listener to toggle dropdown menu visibility
    dropdownToggle.addEventListener("click", function() {
      dropdownMenu.classList.toggle("show");
    });
  
    // Close the dropdown when clicking outside of it
    document.addEventListener("click", function(event) {
      if (!dropdownToggle.contains(event.target)) {
        dropdownMenu.classList.remove("show");
      }
    });
  }