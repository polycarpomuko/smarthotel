// Booking form validation and success/fail message
document.getElementById("bookingForm").addEventListener("submit", function(event) {
  event.preventDefault(); // Stop form from reloading the page

  // Get form values
  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let checkin = document.getElementById("checkin").value;
  let checkout = document.getElementById("checkout").value;
  let roomType = document.getElementById("room_type").value;

  let message = document.getElementById("message");

  // Simple validation
  if (name === "" || email === "" || checkin === "" || checkout === "" || roomType === "") {
    message.textContent = "❌ Please fill in all fields!";
    message.style.color = "red";
  } else {
    // Simulate booking success
    message.textContent = "✅ Booking Successful! Thank you " + name + ".";
    message.style.color = "green";

    // Optionally clear the form
    document.getElementById("bookingForm").reset();
  }
});