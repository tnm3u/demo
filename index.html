<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Admin Login | IPTV Dashboard</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans flex items-center justify-center min-h-screen">

<!-- Login Card -->
<div class="bg-white shadow-xl rounded-xl p-8 w-11/12 max-w-sm">
  <div class="text-center mb-6">
    <h1 class="text-2xl font-bold text-gray-800 mb-2">Admin Login</h1>
    <p class="text-gray-500 text-sm">Login: <strong>demo</strong> | Password: <strong>demo</strong></p>
  </div>

  <form id="loginForm" class="flex flex-col gap-4">
    <div>
      <label for="email" class="block mb-1 font-semibold text-gray-700">Email</label>
      <div class="flex items-center border rounded-lg p-2 focus-within:ring-2 focus-within:ring-indigo-500">
        <i class="fas fa-user text-gray-400 mr-2"></i>
        <input type="email" id="email" placeholder="Enter your email" class="w-full outline-none" required />
      </div>
    </div>

    <div>
      <label for="password" class="block mb-1 font-semibold text-gray-700">Password</label>
      <div class="flex items-center border rounded-lg p-2 focus-within:ring-2 focus-within:ring-indigo-500">
        <i class="fas fa-lock text-gray-400 mr-2"></i>
        <input type="password" id="password" placeholder="Enter your password" class="w-full outline-none" required />
      </div>
    </div>

    <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded-lg transition">
      <i class="fas fa-sign-in-alt mr-2"></i> Login
    </button>
  </form>

  <p id="loginStatus" class="text-center text-sm mt-4 text-gray-500"></p>

  <!-- Footer -->
  <footer class="text-center text-gray-400 text-xs mt-6 border-t pt-3">
    IPTV Admin Panel V1.0 | Built & Maintained by Tnm3u
  </footer>
</div>

<!-- Firebase Auth -->
<script type="module">
import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-app.js";
import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.12.3/firebase-auth.js";

const firebaseConfig = {
  apiKey: "AIzaSyB9GaCbYFH22WbiLs1pc_UJTsM_0Tetj6E",
  authDomain: "tnm3ulive.firebaseapp.com",
  databaseURL: "https://tnm3ulive-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "tnm3ulive",
  storageBucket: "tnm3ulive.appspot.com",
  messagingSenderId: "80664356882",
  appId: "1:80664356882:web:c8464819b0515ec9b210cb",
  measurementId: "G-FNS9JWZ9LS"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

const form = document.getElementById("loginForm");
const statusText = document.getElementById("loginStatus");

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value.trim();

  statusText.textContent = "Authenticating...";
  statusText.className = "text-center text-gray-500 text-sm mt-4";

  try {
    if (email === "demo" && password === "demo") {
      // Local demo login — no Firebase call
      localStorage.setItem("adminLoggedIn", "true");
      window.location.href = "index.html";
      return;
    }

    await signInWithEmailAndPassword(auth, email, password);
    localStorage.setItem("adminLoggedIn", "true");
    window.location.href = "index.html";
  } catch (error) {
    statusText.textContent = "Login failed. Check credentials.";
    statusText.className = "text-center text-red-500 text-sm mt-4";
  }
});
</script>

</body>
</html>
