<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Training Registration | SkillsTraining</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --primary: #0062b3;
      --primary-dark: #004a8a;
      --secondary: #27ae60;
      --light-bg: #f8f9fa;
      --border: #dee2e6;
      --text-dark: #333;
      --text-muted: #6c757d;
    }
    
    body {
      font-family: 'Poppins', 'Segoe UI', sans-serif;
      background-color: #f4f6f9;
      color: var(--text-dark);
      line-height: 1.6;
    }
    
    .page-container {
      max-width: 1000px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    
    .header-logo {
      text-align: center;
      margin-bottom: 40px;
      padding: 10px;
    }
    
    .logo-text {
      color: var(--primary);
      font-weight: 700;
      font-size: 2.2rem;
      margin: 0;
    }
    
    .logo-text span {
      color: var(--secondary);
    }
    
    .section-title {
      font-weight: 700;
      font-size: 32px;
      margin-bottom: 40px;
      color: var(--primary);
      text-align: center;
      position: relative;
      padding-bottom: 12px;
    }
    
    .section-title::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 80px;
      height: 4px;
      background-color: var(--secondary);
      border-radius: 2px;
    }
    
    .form-section {
      background: white;
      padding: 40px 50px;
      margin-bottom: 35px;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08);
      transition: transform 0.3s ease;
    }
    
    .form-section:hover {
      transform: translateY(-5px);
    }
    
    .form-section h5 {
      font-weight: 700;
      font-size: 20px;
      color: var(--primary);
      border-bottom: 2px solid var(--primary);
      padding-bottom: 12px;
      margin-bottom: 30px;
      display: flex;
      align-items: center;
    }
    
    .form-section h5 i {
      margin-right: 10px;
      color: var(--secondary);
    }
    
    .form-label {
      font-weight: 500;
      margin-bottom: 8px;
      color: #444;
    }
    
    .required::after {
      content: " *";
      color: #dc3545;
    }
    
    .form-control, .form-select {
      padding: 12px 15px;
      border-radius: 8px;
      border: 1px solid var(--border);
      transition: all 0.3s;
      font-size: 15px;
    }
    
    .form-control:focus, .form-select:focus {
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(0, 98, 179, 0.25);
    }
    
    .form-control::placeholder {
      color: #adb5bd;
    }
    
    .help-text {
      background-color: var(--light-bg);
      padding: 15px 20px;
      border-radius: 8px;
      margin-top: 20px;
      border-left: 4px solid var(--secondary);
    }
    
    .help-text ul {
      margin-bottom: 0;
      padding-left: 20px;
    }
    
    .help-text li {
      margin-bottom: 5px;
    }
    
    .help-text li:last-child {
      margin-bottom: 0;
    }
    
    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
      padding: 12px 40px;
      font-size: 18px;
      font-weight: 500;
      border-radius: 8px;
      transition: all 0.3s;
      box-shadow: 0 4px 6px rgba(0, 98, 179, 0.2);
    }
    
    .btn-primary:hover {
      background-color: var(--primary-dark);
      border-color: var(--primary-dark);
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0, 98, 179, 0.3);
    }
    
    .btn-primary:active {
      transform: translateY(-1px);
    }
    
    .form-footer {
      text-align: center;
      margin-top: 40px;
    }
    
    .alert,
    .success {
  width: 400px;
  text-align: center;
  position: fixed;
  top: 30px;
  left: 50%;
  transform: translateX(-50%);
  color: white;
  padding: 12px 20px;
  border-radius: 8px;
  z-index: 1000;
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  animation: fadeIn 0.3s ease forwards, fadeOut 0.3s ease 4.7s forwards;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes fadeOut {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
    
    @keyframes fadeIn {
      to { opacity: 1; }
    }
    
    .alert { background-color: #e74c3c; }
    .success { background-color: #2ecc71; }
    
    .alert i, .success i {
      margin-right: 10px;
    }
    
    .input-with-icon {
      position: relative;
    }
    
    .input-with-icon i {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 15px;
      color: #adb5bd;
    }
    
    .input-with-icon input, 
    .input-with-icon select {
      padding-left: 40px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
      .form-section {
        padding: 30px 25px;
      }
      
      .form-section h5 {
        font-size: 18px;
      }
    }
    
    @media (max-width: 576px) {
      .alert, .success {
        width: 90%;
      }
    }
    
    /* Animations */
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }
    
    .animate-pulse {
      animation: pulse 2s infinite;
    }
  </style>
</head>
<body>

<div class="page-container">
  <div class="header-logo">
    <h1 class="logo-text">Skills<span>Training</span></h1>
    
  </div>

  <h2 class="section-title">Instructor Application</h2>
  
  

  <form action="" id="form" method="post">
    <!-- Teaching Areas Section -->
    <div class="form-section">
      <h5><i class="fas fa-chalkboard-teacher"></i>Specialist In</h5>
      <div class="mb-4">
        <label for="teaching_areas" class="form-label required">Your Specialization</label>
        <div class="input-with-icon">
          <i class="fas fa-book-open"></i>
          <input type="text" name="specialization" id="specialization" class="form-control" placeholder="e.g., Data Science, Business Management, Web Development" required />
        </div>
        <span id="specializationerror" class="text-danger small"></span>
      </div>
      
      <div class="help-text">
        <ul class="small text-muted">
          <li>We welcome well talented instructors to share their expertise with our community.</p>
            <p>Join our team of professionals by filling out the form below.</li>
            <li>Or mail your resume at Info@skillstraining.tech or whatsapp on +91 9152951515</li>
          
        </ul>
      </div>
    </div>

    <!-- Personal Details -->
    <div class="form-section">
      <h5><i class="fas fa-user"></i> Personal Information</h5>
      <div class="row g-4">
        <div class="col-md-2">
          <label class="form-label required">Title</label>
          <div class="input-with-icon">
            <i class="fas fa-id-badge"></i>
            <select class="form-select" id="title" name="title" required>

              <option value="">Select</option>
              <option>Mr</option>
              <option>Mrs</option>
              <option>Ms</option>
              <option>Dr</option>
              <option>Others</option>
            </select>
          </div>
        </div>
        <div class="col-md-5">
          <label class="form-label required">Full Name</label>
          <div class="input-with-icon">
            <i class="fas fa-user"></i>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your full name" required />
          </div>
          <span id="nameerror" class="text-danger small"></span>
        </div>
        <div class="col-md-5">
          <label class="form-label required">Email</label>
          <div class="input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" class="form-control" placeholder="your.email@company.com" required />
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label required">Mobile Number</label>
          <div class="input-with-icon">
            <i class="fas fa-phone"></i>
            <input type="number" id="number" name="mob" class="form-control" placeholder="Enter your mobile number" required />
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label required">Highest Qualification</label>
          <div class="input-with-icon">
            <i class="fas fa-graduation-cap"></i>
            <select class="form-select" id="qualification" name="qualification" required>
              <option value="">Select your qualification</option>
              <option>High School Diploma</option>
              <option>Associate's Degree</option>
              <option>Bachelor's Degree</option>
              <option>Master's Degree</option>
              <option>Ph.D</option>
              <option>Professional Certification</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label required">Availabilty</label>
          <div class="input-with-icon">
            <i class="fas fa-briefcase"></i>
            <input type="text" id="specialization1" name="specialization1" class="form-control" placeholder="e.g., Available in one day, After one day" required />
          </div>
        </div>
        <div class="col-md-6">
          <label class="form-label required">Teaching Philosophy & Approach</label>
          <textarea type="text" id="des" name="msg" class="form-control" placeholder="Tell us about your teaching methodology and what makes you an effective instructor" rows="4" required></textarea>
        </div>
      </div>
    </div>

    <!-- Submit Button -->
    <div class="form-footer">
      <button type="submit" name="send" value="send" class="btn btn-primary btn-lg">
        <i class="fas fa-paper-plane me-2"></i>Submit Application
      </button>
      <p class="text-muted small mt-3">By submitting this application, you agree to our terms and conditions</p>
    </div>
  </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/reg2.js"></script>


</body>
</html>

<script>
  // Form validation and submission handling


  const showSuccessNotification = (message) => {
  // Check if notification already exists
  let notification = document.getElementById('successNotification');
  
  // If it doesn't exist, create it
  if (!notification) {
    notification = document.createElement('div');
    notification.id = 'successNotification';
    notification.className = 'success';
    document.body.appendChild(notification);
  }
  
  // Set properties
  notification.style.backgroundColor = '#4CAF50'; // Green color for success
  notification.textContent = message;
  
  // Reset animations
  notification.style.animation = 'none';
  notification.offsetHeight; // Trigger reflow
  notification.style.animation = 'fadeIn 0.3s ease forwards, fadeOut 0.3s ease 4.7s forwards';
  
  // Remove from DOM after 5 seconds
  setTimeout(() => {
    if (notification && notification.parentNode) {
      notification.parentNode.removeChild(notification);
    }
  }, 5000);
};

// Example usage:
// showSuccessNotification('Operation completed successfully!');
</script>



<?php



  // Import PHPMailer classes
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
if(isset($_POST['send']))
{

  $title = $_POST['title'];
$name = $_POST['name'];
$email = $_POST['email']; 
$mob = $_POST['mob'];
$specialization = $_POST['specialization'];
$specialization1 = $_POST['specialization1'];
$qualification = $_POST['qualification'];
$msg = $_POST['msg'];



// Load PHPMailer files
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Create a new PHPMailer instance
$mail = new PHPMailer(true);

try {
    // Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Debug output for troubleshooting
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';   // Gmail's SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'khanaffan828618@gmail.com';           // Your Gmail address
    $mail->Password   = 'jxeldxjlgicwpnoj';                    // Your App Password (no spaces)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Optional: Bypass SSL verification for localhost (XAMPP)
    $mail->SMTPOptions = [
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ];

    // Recipients
    $mail->setFrom('khanaffan828618@gmail.com', 'Skills Training'); // Ensure this is valid
    $mail->addAddress('khanaffan82861@gmail.com', 'Recipient');       // Ensure this is valid

    $mail->addBCC('keights.share@gmail.com', 'Recipient');

    // Content
    $mail->isHTML(true);
    $mail->isHTML(true);
    $mail->Subject = "Instructor Application  Name: $name, Mobile: $mob";

 // Avoid generic terms like "Registration form"
    $mail->Body = "
  
  <h3>Instructor Application Submission</h3>
  <p><strong>Specialization:</strong> $specialization</p>
 
  <p><strong>Name:</strong> $title   $name</p>
  <p><strong>Email:</strong> $email</p>
  <p><strong>Mobile:</strong> $mob</p>
  <p><strong>Qualification:</strong> $qualification</p>
  <p><strong>Avaibilty:</strong> $specialization1</p>
  <p><strong>Teaching Philosophy:</strong><br>$msg</p>
";


    // Send email
    $mail->send();
    echo '<div id="successNotification" class="success" style="background-color: #4CAF50;">Application Submited Successfully!</div>';
} catch (Exception $e) {
    echo "<div class='alert'>❌ Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
}
    
}




?>