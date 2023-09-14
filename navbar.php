<link rel="stylesheet" href="./dist/output.css">

<nav class="bg-[rgb(72,0,0)] text-white py-4 justify-between flex text-center">
  <div class="m-auto ml-16">
    <a href="index.php"><img class="w-16" src="img/Dota-2-Logo.png" alt="dota2_logo"></a>
  </div>
  <ul class=" font-bold flex m-auto ml-16">
    <li><a class=" p-7 hover:bg-[#be0000] hover:text-[#ffdad3] border-r-2 border-l-2 border-[#822c2c]"
        href="index.php">Home</a></li>
    <li><a class=" p-7 hover:bg-[#be0000] hover:text-[#ffdad3] border-r-2 border-[#822c2c]" href="about.php">About</a>
    </li>
    <li><a class=" p-7 hover:bg-[#be0000] hover:text-[#ffdad3] border-r-2 border-[#822c2c]"
        href="contact.php">Contact</a></li>
  </ul>

  <form method="post">
    <input class=" mr-10 border-2 p-3 hover:bg-[#be0000] rounded" type="submit" name="play" value="PLAY FOR FREE">
  </form>

  <?php
    if(array_key_exists('play',$_POST)) {
      include 'login.php';
    }
  ?>
</nav>
<hr class="w-full border border-red-400 shadow-slate-500 shadow-xl">