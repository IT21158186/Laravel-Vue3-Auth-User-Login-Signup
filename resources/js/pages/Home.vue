<template>
    <div>
      <!-- Navigation Bar -->
      <nav class="navbar">
        <ul class="nav-links">
          <li><a href="#home" class="nav-link">Home</a></li>
          <li><a href="#about" class="nav-link">About</a></li>
          <li><a href="#services" class="nav-link">Services</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
      </nav>

      <!-- Content -->
      <div class="content">
        <h1>Welcome, this page will show to all users</h1>
      </div>
    </div>
  </template>

  <script>
  export default {
    name: "Home",
    data() {
      return {};
    },
    created() {},
    methods: {},
  };
  </script>

  <style scoped>
  /* Navigation Bar Styles */
  .navbar {
    background-color: #4a90e2; /* Light blue background */
    padding: 10px 20px; /* Add some padding */
    display: flex;
    justify-content: center; /* Center the nav items */
  }

  .nav-links {
    list-style: none; /* Remove default list styling */
    display: flex;
    gap: 20px; /* Add space between links */
    margin: 0; /* Remove default margin */
    padding: 0; /* Remove default padding */
  }

  .nav-link {
    text-decoration: none; /* Remove underline */
    color: white; /* White text color */
    font-weight: bold; /* Bold text */
    transition: color 0.3s ease; /* Smooth color transition */
  }

  .nav-link:hover {
    color: #ffcc00; /* Change text color on hover */
  }

  /* Content Styles */
  .content {
    padding: 20px;
    text-align: center;
    font-family: Arial, sans-serif;
  }

  .content h1 {
    color: #333; /* Dark gray text color */
    font-size: 24px; /* Increase font size */
  }
  </style>
