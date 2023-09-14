<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | DOTA 2</title>
  <link rel="stylesheet" href="./dist/output.css">
</head>

<body>
  <?php
    include 'navbar.php';
  ?>

  <section
    class=" bg-[url('../img/about-dota.jpg')] text-white bg-cover bg-center w-full h-screen opacity-90 bg-[#5e5b5b] bg-blend-multiply">
    <div class="grid grid-cols-2 p-12 gap-3">
      <video class=" overflow-hidden" width="650" src="./img/dota-vid-2.mp4" loop muted autoplay></video>
      <div class=" text-white block p-5">
        <h1 class=" font-semibold text-6xl">WHAT IS <span class=" text-red-500">DOTA</span>?</h1>
        <p class="text-justify pt-10 text-lg">For those who don't know the game, the name Dota 2 may seem like a second
          edition
          of
          the
          game. In
          a way it
          is, but not in the conventional way. In fact, this “2” has a meaning that helps to understand the story of
          Defense of the Ancients, which is not very common. The concept of Dota was created from another game,
          StarCraft. Launched in <span class=" text-red-500 font-bold">1998</span>, the game brought as an unprecedented
          feature
          the “StarEdit”, which allowed the
          customization of elements of the game by the players themselves. Thus, the first MOBA molds appeared.</p>
      </div>
    </div>
    <div class=" flex">
      <img class=" w-3/12" src="./img/about-1.jpg" alt="pic-1">
      <img class=" w-3/12" src="./img/about-2.jpg" alt="pic-2">
      <img class=" w-3/12" src="./img/about-4.jpg" alt="pic-4">
      <img class=" w-3/12" src="./img/about-3.png" alt="pic-3">
    </div>

  </section>

  <?php
    include 'footer.php';
  ?>
</body>

</html>