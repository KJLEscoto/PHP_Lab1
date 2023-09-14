<link rel="stylesheet" href="./dist/output.css">

<footer class=" bg-[#491515] w-full h-28 text-white text-center">
  <hr class="w-full border border-red-400">
  <div class=" justify-between grid grid-cols-3 mt-5">
    <div class="block m-auto">
      <div class="flex justify-between gap-5">
        <img class=" w-full h-10" src="./img/valve-logo.png" alt="valve">
        <img class=" w-20 h-12" src="./img/steam-logo.png" alt="steam">
      </div>
      <?php 
      echo "Valve | Dota Inspired Website<br>"; 
    ?>
    </div>
    <ul class=" font-bold">
      <li><a href="index.php" class="hover:text-[#e02e21]">Home</a></li>
      <li><a href="about.php" class="hover:text-[#e02e21]">About</a></li>
      <li><a href="contact.php" class="hover:text-[#e02e21]">Contact</a></li>
    </ul>
    <div class=" block justify-center">
      <p class=" pb-2">Intermediate Web Programming 2</p>
      <hr class=" border-2 border-red-400 w-3/6 justify-center m-auto">
      <div class="pt-2">
        <?php
      echo "Kent Joemar Escoto &copy; BSCS " . date("Y");
    ?>
      </div>
    </div>
  </div>


</footer>