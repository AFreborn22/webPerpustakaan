function toggleDropdown(button) {
    var dropdown = button.parentNode;
    dropdown.classList.toggle("active");
    var icon = button.querySelector(".dropdown-icon");
    if (dropdown.classList.contains("active")) {
      icon.textContent = "-";
    } else {
      icon.textContent = "+";
    }
  }
  
  window.addEventListener('resize', function() {
    var mapWrapper = document.querySelector('.map-wrapper');
    var mapIframe = document.querySelector('#map-iframe');
    var aspectRatio = 75; // Adjust this value to control the aspect ratio
    
    var width = mapWrapper.offsetWidth;
    var height = width * (aspectRatio / 100);
    
    mapWrapper.style.height = height + 'px';
    mapIframe.style.height = height + 'px';
  });
  
  window.dispatchEvent(new Event('resize'));
  