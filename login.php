<link rel="stylesheet" href="./dist/output.css">

<div class="fixed inset-0 flex items-center justify-center z-50">
  <div class="bg-black bg-opacity-50 absolute inset-0"></div>
  <div class="bg-[#212329] p-6 rounded shadow-lg w-[600px] relative">
    <button class="absolute top-2 right-2 p-2" onclick="closeLogin()">✖</button>
    <img class=" w-40 h-full" src="img/steam-logo.png" alt="">
    <form method="post">
      <div class="mb-4">
        <label for="username" class="block text-[#149FFE] font-medium text-left">SIGN IN WITH ACCOUNT NAME</label>
        <input type="text" id="username" name="username" class=" p-2 w-full rounded bg-[#31343C]">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-[#6E7074] text-left">PASSWORD</label>
        <input type="password" id="password" name="password" class="p-2 w-full rounded bg-[#31343C]">
      </div>
      <div class="mb-4 flex items-center">
        <input type="checkbox" id="remember" name="remember" class="mr-2">
        <label for="remember" class="text-[#6E7074]">Remember Me</label>
      </div>
      <button type="submit"
        class="bg-[#13A3FD] text-white font-bold px-28 py-2 rounded hover:bg-[#4596C9]">Login</button>
    </form>
    <div class="mt-4 text-gray-600 text-center">
      Don't have an account? <a href="#" class="text-[#be0000] hover:underline">Sign up</a>
    </div>
  </div>
</div>

<script>
function closeLogin() {
  document.querySelector('.fixed').style.display = 'none';
}
</script>