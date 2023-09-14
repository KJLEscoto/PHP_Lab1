<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | DOTA 2</title>
  <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
  <?php
    include 'navbar.php';
  ?>

  <section
    class=" bg-[url('../img/contacts-dota.jpg')] text-white bg-cover bg-center w-full h-screen opacity-90 bg-[#5e5b5b] bg-blend-multiply">
    <img class="p-10" src="img/valve-logo.png" alt="valve">
    <h1 class=" text-5xl font-semibold p-10">You're emailing Dota 2 Team.</h1>
    <div class=" text-xl text-justify mr-[650px] ml-10">
      <p class=" mb-7">If you need customer service or technical support regarding Steam or Valve
        games,
        visit
        Steam
        Support at
        <span
          class=" text-[#F74843] hover:text-[#F56C68] hover:underline cursor-pointer">https://help.steampowered.com</span>,
        where
        we can most
        efficiently direct your
        issue to
        the attention of
        the right
        team.
      </p>
      <p>Valve Employees will never ask you for personal or account information, on Steam or anywhere else. You can
        safely ignore anyone who claims to have mistakenly reported you - that will not get you banned. If you need help
        with your Steam account, go to <span
          class=" text-[#F74843] hover:text-[#F56C68] hover:underline cursor-pointer">https://help.steampowered.com.</span>
      </p>
    </div>

    <div class="flex px-10 pt-10 pb-3">
      <div class="mr-20">
        <label>Your email address:</label><br>
        <input class="text-black w-[350px] border border-gray-300 p-2 rounded" type="text" name="email" id="email"
          required>
      </div>
      <div>
        <label>Subject:</label><br>
        <input class="text-black w-[350px] border border-gray-300 p-2 rounded" type="text" name="subject" id="subject"
          required>
      </div>
    </div>
    <div class="px-10">
      <label>Message:</label><br>
      <textarea class="w-[780px] text-black border border-gray-300 p-2 rounded" name="message" id="message"
        required></textarea>
      <form class="pt-5" action="contact.php" method="post" onsubmit="return onSubmit()">
        <input class="border-2 py-1 hover:border-[#be0000] px-5 rounded" type="submit" value="SEND NOW" name="send">
      </form>
    </div>

  </section>

  <script>
  function onSubmit() {
    if (!document.getElementById("email").value || !document.getElementById("subject").value || !document
      .getElementById("message").value) {
      alert("Please fill out all required fields.");
      return false;
    }

    // Clear input fields
    document.getElementById("email").value = "";
    document.getElementById("subject").value = "";
    document.getElementById("message").value = "";

    // Display an alert/notification
    alert("Message sent successfully!");

    // Prevent the form from actually submitting
    return false;
  }
  </script>

  <?php
    include 'footer.php';
  ?>
</body>

</html>