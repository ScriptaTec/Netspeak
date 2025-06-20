<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respostaTradutor</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <div class="jersey bg-[url(../imgs/respostaTradutor.png)] h-screen bg-cover bg-center">

        <div class="flex justify-center items-center h-screen">

            <div class="h-86 w-120 py-5 px-20 rounded-3xl border-2 border-white bg-[#9E8CBE] relative"
                style="box-shadow: -10px 10px 0px #746587">

                <!--Decoração no fundo do campo de traduções-->
                <div class="absolute top-26 right-24 h-3 w-3 bg-[#AE99D2]"></div>
                <div class="absolute top-20 right-10 h-5 w-10 bg-[#AE99D2]"></div>

                <div class="absolute bottom-40 left-0 h-10 w-10 bg-[#AE99D2]"></div>
                <div class="absolute bottom-10 left-20 h-3 w-5 bg-[#AE99D2]"></div>
                <div class="absolute bottom-0 right-40 h-5 w-24 bg-[#AE99D2]"></div>

                <!--Selecionar tipo de conversão-->
                <div class="flex justify-center">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"
                        class="text-[#746587] bg-white focus:outline-none font-medium rounded-sm text-xl px-5 py-2.5 text-center inline-flex items-center"
                        style="box-shadow: -6px 6px 0px #AE99D2" type="button">Tipo de conversão

                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                </div>

                <!--Opções-->
                <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44">
                    <ul class="py-2 text-center text-sm text-[#746587]" aria-labelledby="dropdownHoverButton">
                        <li>
                            <span href="#" class="block px-4 py-2 hover:bg-gray-100">Formal para informal</span>
                        </li>
                        <li>
                            <span href="#" class="block px-4 py-2 hover:bg-gray-100">Informal para formal</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

</body>

</html>