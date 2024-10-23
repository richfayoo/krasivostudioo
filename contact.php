<?php
// contact.php
include 'conn.php'; // File ini harus berisi koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validasi sederhana untuk memastikan tidak ada field kosong
    if (!empty($name) && !empty($email) && !empty($subject) && !empty($message)) {
        // Buat query untuk memasukkan data ke dalam database
        $sql = "INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)";
        
        // Persiapkan statement untuk keamanan dari SQL injection
        if ($stmt = $conn->prepare($sql)) {
            // Bind parameter
            $stmt->bind_param("ssss", $name, $email, $subject, $message);
            
            // Eksekusi statement
            if ($stmt->execute()) {
                echo "<script>alert('Your message has been sent successfully!');</script>";
            } else {
                echo "<script>alert('Error: Could not send the message.');</script>";
            }
            
            // Tutup statement
            $stmt->close();
        }
    } else {
        echo "<script>alert('Please fill all the fields!');</script>";
    }
    
    // Tutup koneksi
    $conn->close();
}
?>
