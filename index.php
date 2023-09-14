<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | DOTA 2</title>
  <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
  <?php
    include 'navbar.php';
  ?>
  <section
    class=" bg-[url('../img/home-dota.jpg')] text-white bg-cover bg-center w-full h-screen opacity-90 bg-[#5e5b5b] bg-blend-multiply">
    <div class=" text-center justify-center pt-96 font-black">
      <h2 class=" text-[#cf9995] text-7xl">JOIN THE</h2>
      <h1 class=" text-[#e4c1be] text-8xl">BATTLE OF THE ANCIENTS</h1>
      <div class=" justify-center mt-5 flex">
        <hr class=" w-40 border-4 border-red-700">
      </div>
    </div>
    <p class="text-center px-80 mt-5 text-lg">Every day, millions of players worldwide enter the battle as one of over a
      hundred
      Dota
      Heroes in a 5v5 team
      clash. Dota is the deepest multi-player action RTS game ever made and there's always a new strategy or tactic
      to discover. It's completely free to play and always will be – start defending your ancient now.</p>
    <div class="justify-center flex mt-5">
      <button class="text-center font-semibold p-3 border-4 border-slate-200 hover:border-red-700 rounded">
        SEE WHAT'S NEW
      </button>
    </div>
  </section>

  <?php
    include 'footer.php';
  ?>
</body>

</html>