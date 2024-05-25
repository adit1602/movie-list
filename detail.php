<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih Kursi</title>

  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f5f5f5;
    }

    .container {
      max-width: 900px;
      margin: 20px auto;
    }

    .card {
      margin-bottom: 20px;
    }

    .movie-img {
      height: 250px;
      object-fit: cover;
    }

    .btn-custom {
      background-color: #333;
      color: #fff;
    }

    .btn-custom:hover {
      background-color: #555;
    }

    .seat-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .seat {
      width: 40px;
      height: 40px;
      background-color: #ccc;
      margin: 5px;
      cursor: pointer;
    }

    .seat.selected {
      background-color: #333;
    }
  </style>

  <!-- Custom JavaScript -->
  <script>
    function handleSeatClick(event) {
      var seat = event.target;

      // Toggle kelas 'selected' pada kursi
      seat.classList.toggle("selected");

      // Tambahkan formulir jika kursi dipilih
      if (seat.classList.contains("selected")) {
        showBookingForm();
      } else {
        hideBookingForm();
      }
    }

    function showBookingForm() {
      var formContainer = document.getElementById("booking-form-container");
      formContainer.style.display = "block";
    }

    function hideBookingForm() {
      var formContainer = document.getElementById("booking-form-container");
      formContainer.style.display = "none";
    }
  </script>
</head>

<body>
  <div class="container">
    <h1 class="text-center mb-4">Pilih Kursi</h1>
    <div class="seat-container">
      <?php
      for ($i = 1; $i <= 24; $i++) {
        // Tampilkan nomor kursi di dalam div
        echo '<div class="seat" onclick="handleSeatClick(event)">' . $i . '</div>';
      }
      ?>
    </div>

    <!-- Formulir Pemesanan -->
    <div id="booking-form-container" style="display: none;">
      <h2>Formulir Pemesanan</h2>
      <form action="booking.php" method="post">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Telepon:</label>
        <input type="tel" id="phone" name="phone" required>

        <button type="submit">Pesan</button>
      </form>
    </div>
  </div>
</body>

</html>