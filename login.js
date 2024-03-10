// Get a reference to the form and the loading spinner
const form = document.querySelector('form');
const loadingSpinner = document.getElementById('loadingSpinner');

// Add an event listener for the form submission
form.addEventListener('submit', function() {
  // Display the loading spinner when the form is submitted
  loadingSpinner.style.display = 'block';
});

