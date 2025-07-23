<!--Menu de navegação das abas do tradutor-->
<div id="drawer-navigation"
   class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-[#F8FBA6] w-64"
   tabindex="-1" aria-labelledby="drawer-navigation-label">
   <h5 id="drawer-navigation-label" class="text-xl font-bold text-[#746587]">Menu</h5>
   <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
      class="absolute top-4.5 end-2.5 inline-flex items-center justify-center">
      <img src="../imgs/icones/closeMenu.png" alt="">
   </button>

   <div class="py-4 overflow-y-auto">
      <ul class="space-y-2 text-xl">
         <li>
            <a href="perfil.php"
               class="flex items-center p-2 text-[#746587] rounded-lg transition duration-500 hover:text-white hover:bg-[#746587]">
               <span class="ms-1">Perfil</span>
            </a>
         </li>

         <li>
            <a href="tradutor.php"
               class="flex items-center p-2 text-[#746587] rounded-lg transition duration-500 hover:text-white hover:bg-[#746587]">
               <span class="ms-1">Tradutor</span>
            </a>
         </li>

         <li>
            <a href="sobre_nos.php"
               class="flex items-center p-2 text-[#746587] rounded-lg transition duration-500 hover:text-white hover:bg-[#746587]">
               <span class="ms-1">Sobre nós</span>
            </a>
         </li>

         <li>
            <a href="suporte.php"
               class="flex items-center p-2 text-[#746587] rounded-lg transition duration-500 hover:text-white hover:bg-[#746587]">
               <span class="ms-1">Suporte</span>
            </a>
         </li>

         <li>
            <!--Sair da conta-->
            <form method="POST" action="../controller/controller_logout.php" id="form-sair">
               <!--Botão de sair da conta-->
               <button type="button" onclick="abrirModalSair()"
                  class="flex w-full p-2 text-[#746587] rounded-lg transition duration-500 hover:text-white hover:bg-[#746587]">
                  <span class="ms-1">Sair da conta</span>
               </button>

               <!--Modal de sair da conta-->
               <div id="modal-sair" class="hidden fixed inset-0 z-50 flex justify-center items-center bg-gray-200/50">
                  <div
                     class="bg-white py-5 px-10 rounded-4xl border-2 border-gray-800 shadow-xl hover:scale-105 hover:border-black transition duration-900">
                     <h1 class="text-3xl">Você tem certeza que deseja sair da conta?</h1>

                     <div class="flex justify-center gap-5 mt-5">
                        <button type="button"
                           class="btn-confirmar 
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                           Sim
                        </button>
                        <button type="button"
                           class="btn-cancelar
                    py-2 px-7 rounded-3xl bg-black text-white border-2 hover:bg-yellow-200 hover:text-black transition duration-700">
                           Não
                        </button>
                     </div>
                  </div>
               </div>
            </form>

         </li>
      </ul>
   </div>
</div>