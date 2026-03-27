<section class=" text-white py-16 ">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-start w-[1200px]">

    <div class="flex flex-col justify-center gap-4">
      <h1 class="text-4xl md:text-5xl font-bold leading-snug">Свяжитесь<br>с нами</h1>
      <p class="text-lg">Оставьте заявку и мы свяжемся с вами<br>или позвоните по номеру:</p>
      <p class="text-2xl font-bold mt-2">+7 (999) 123-45-67</p>
    </div>

    <div class="p-8 rounded-xl shadow-lg w-[640px]">
      <form class="grid grid-cols-1 gap-4">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" required placeholder="Имя*" class="w-full p-3 rounded-[100px] bg-white text-white">
          <input type="tel" required placeholder="Телефон*" class="w-full p-3 rounded-[100px]  bg-white text-white ">
        </div>

        <input type="email" required placeholder="E-mail*" class="w-full p-3 rounded-[100px]  bg-white text-white">
        <textarea placeholder="Комментарий" class="w-full p-3 rounded-[24px]  bg-white text-white h-32 resize-none "></textarea>
        <div class="flex justify-between">
            <label class="flex items-center gap-2 text-sm text-[14px] w-[276px]" >
            <input type="checkbox" class="w-4 h-4 rounded bg-[#111111]">
            Нажимая на кнопку, я соглашаюсь на обработку персональных данных
            </label> 
            <button type="submit" class="btn btn-primary w-[230px] justify-center">Оставить заявку</button>
         </div>
      </form>
    </div>

  </div>
</section>