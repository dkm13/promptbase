<?php 
//    include './db/db.php';

// logout code
if(isset($_GET['action'])) {
    if($_GET['action'] === "logout") {
        # delete sessions
        unset($_SESSION['user_name']);
        unset($_SESSION['user_access']);
        session_destroy();

        # delete cookies
        setcookie("user_name", null, -1);
        setcookie("user_access", null, -1);

        header("Location: ./auth/login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap cdn -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <!-- styles -->
    <link rel="stylesheet" href="./styles/index.css">
    <style>
        p{
            margin-bottom: 48px !important;
        }
    </style>
    <title>Promptownik - Website</title>
</head>
<body>

<?php
   include './partials/navbar.php';
?>

<section class="what-is">
    <h2 >GDPR & Cookies</h2>
    <p>
    In Promptownik, you must be sure that your personal data is processed in a responsible manner.<br/>
     This privacy policy tells you how we look after your personal data and what we use it for.<br/>
      It also contains information about how we secure the personal data, who we share it with, and your rights.
    <h3>What is personal data?</h3>
    <p>Personal information is any information that can be linked to an individual,<br/>
        directly or indirectly, including name, postal address, e-mail address, IP address and mobile number.<br/>
        All use of personal data (collection, registration, storage, compilation and disclosure) is considered
        processing of personal data.
    </p>
    <h3>Who is responsible for processing?</h3>
    <p>Promptownik is responsible for the processing of personal data we process in connection with the use of our
       websites and services.
    </p>
    <h3>What personal data do we process?</h3>
    <p>We use this personal information in connection with email registration.<br/>
      We register: e-mail address<br/>
       It is voluntary to give us access to your personal data.
    </p>
    <h3>How do we get personal data about you?</h3>
    <p>We receive information in several ways:<br/>
       We receive personal data directly from you when you subscribe via e-mail, or contact us in other ways.<br/>
    This information is necessary for us to be able to deliver our services, or to be able to follow up on 
    your inquiries.
    </p>
    <h3>What do we use the personal data for?</h3>
    <p>We use personal data to provide and deliver services to you. Among other things, your information is<br/>
         used in connection with the administration of the customer relationship.<br/>
       We process personal data to fulfill our statutory obligations, e.g. in connection with accounting and to <br/>
       provide information to the competent authority when this is required of us according to Poland legislation.
    </p>
    <h3>Why are we allowed to use your personal data?</h3>
    <p>Our use of your personal data may be based on one or more of the following grounds:<br/>
    - fulfillment of the agreement with you<br/>
    - fulfillment of a legal obligation<br/>
    - purpose linked to a legitimate interest
    </p>
    <h3>How do we secure your personal data?</h3>
    <p>Promptownik has established routines and measures to ensure that unauthorized persons do not gain access 
        to your personal information<br/>
     All processing of the information takes place in line with applicable law. <br/>
     The measures include, among other things, regular risk assessments, technical systems and physical <br/>
     procedures to safeguard information security and routines to verify access and correction requests.
    </p>
    <h3>When do we delete the personal data?</h3>
    <p>Promptownik does not store personal data longer than is necessary to deliver our services or to fulfill<br/>
         the purpose of the processing in any other way. It is important that the information we have about<br/>
          you is correct and up-to-date. If you discover errors, we encourage you to contact us. <br/>
          You can of course also contact us if you want the information to be deleted.
    </p>
    <h3>Who do we share personal data with?</h3>
    <p>All exchange of data is done in line with clear guidelines for the processing of personal data. <br/>
        Where there is a statutory disclosure obligation, public authorities will also receive information.
    </p>
    <h3>About Promptownik & images listed</h3>
    <p>Promptownik does not own the copyright to any of the images listed. All images listed are created with the <br/>
        respected tool of the creators choice (Midjourney, DALL-E etc). And all creators listing items on AiFrog,<br/>
         have already carefully read the policy to their respective tool of choice, before submitting images<br/> 
         for sale.
    </p>
    <h3>Terms of use</h3>
    <p>-Promptownik may remove your uploaded content without further notice, if we see it as necessary.<br/><br/>

    -Promptownik may suspend your account without further notice, if you upload inappropriate content.<br/><br/>

      -You must carefully read the terms and conditions of the tool you use to create your AI generated images.<br/>
       For example, you may not upload content if you are not permitted to license it for commercial purposes.
    </p>
</section>



<?php include './partials/footer.php' ?>



</body>
</html>