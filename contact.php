<?php
require_once __DIR__ . '/targets.php';

$wp_load_path = dirname(__DIR__) . '/wp-load.php';
$use_wp_mail  = false;
if (file_exists($wp_load_path)) {
    include_once $wp_load_path;
    $use_wp_mail = function_exists('wp_mail');
}

$success = false;
$error   = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim(strip_tags($_POST['name'] ?? ''));
    $email   = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $subject = trim(strip_tags($_POST['subject'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    if ($name && $email && $subject && $message && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to           = $profile['email'];
        $email_subject = 'CV Contact: ' . $subject;
        $email_body    = "Name: $name\nEmail: $email\n\nMessage:\n$message\n";

        $from = 'CV Form <noreply@xarop.com>';

        if ($use_wp_mail) {
            $headers = [
                'From: ' . $from,
                'Reply-To: ' . $name . ' <' . $email . '>',
            ];
            $success = wp_mail($to, $email_subject, $email_body, $headers);
        } else {
            $headers  = "From: $from\r\n";
            $headers .= "Reply-To: $name <$email>\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();
            $success  = mail($to, $email_subject, $email_body, $headers);
        }

        if (!$success) {
            $error = true;
        }
    } else {
        $error = true;
    }
}

$page_title = 'Contact';
?>
<!DOCTYPE html>
<html lang="en">
<?php require __DIR__ . '/head.php'; ?>
<body>
  <main>
    <div class="container">
      <h1 class="title">
        <a href="<?php echo $base_url ?>"><?php echo $profile['name']; ?></a>
        <span>Contact</span>
      </h1>

      <div class="row">
        <section class="intro">
          <h2>Get in Touch</h2>

          <?php if ($success) : ?>
            <div class="success-message">
              <p><strong>Thank you!</strong> Your message has been sent. I'll get back to you soon.</p>
            </div>
            <p><a href="<?php echo $base_url ?><?php echo $target_key; ?>">&#8592; View Full CV</a></p>
          <?php else : ?>
              <?php if ($error) : ?>
              <div class="error-message">
                <p><strong>Error:</strong> There was a problem sending your message.
                  Please check all fields and try again.</p>
              </div>
              <?php endif; ?>

            <p>Feel free to reach out for opportunities, collaborations, or just to say hello.</p>

            <form method="POST" action="">
              <div>
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
              </div>
              <div>
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div>
                <label for="subject">Subject *</label>
                <input type="text" id="subject" name="subject" required>
              </div>
              <div>
                <label for="message">Message *</label>
                <textarea id="message" name="message" rows="8" required></textarea>
              </div>
              <button type="submit">Send Message</button>
            </form>
          <?php endif; ?>
        </section>

        <?php require __DIR__ . '/aside.php'; ?>
      </div>
    </div>
  </main>

  <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
