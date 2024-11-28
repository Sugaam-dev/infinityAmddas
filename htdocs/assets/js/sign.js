document.addEventListener('DOMContentLoaded', function() {
  const loginForm = document.getElementById('login-form');
  const signupForm = document.getElementById('sign-form');
  const logoutButton = document.getElementById('logoutButton');

  // Event listener for login form submission
  login-form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting
      const formData = new FormData(loginForm);
      fetch('sign1.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Login successful!');
              loginForm.reset();
              showLogoutButton();
          } else {
              alert('Login failed. Please check your credentials.');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert('An error occurred. Please try again later.');
      });
  });

  // Event listener for signup form submission
  sign-form.addEventListener('submit', function(event) {
      event.preventDefault(); // Prevent the form from submitting
      const formData = new FormData(signupForm);
      fetch('sign3.php', {
          method: 'POST',
          body: formData
      })
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Sign up successful! Please log in.');
              signupForm.reset();
          } else {
              alert('Sign up failed. Please try again.');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert('An error occurred. Please try again later.');
      });
  });

  // Event listener for logout button click
  logoutButton.addEventListener('click', function() {
      fetch('logout.php')
      .then(response => response.json())
      .then(data => {
          if (data.success) {
              alert('Logged out successfully.');
              hideLogoutButton();
          } else {
              alert('Logout failed. Please try again.');
          }
      })
      .catch(error => {
          console.error('Error:', error);
          alert('An error occurred. Please try again later.');
      });
  });

  // Function to show the logout button and hide login and signup forms
  function showLogoutButton() {
    login-form.style.display = 'none';
    sign-form.style.display = 'none';
      logoutButton.style.display = 'block';
  }

  // Function to hide the logout button and show login and signup forms
  function hideLogoutButton() {
    login-form.style.display = 'block';
    sign-form.style.display = 'block';
      logoutButton.style.display = 'none';
  }
});
