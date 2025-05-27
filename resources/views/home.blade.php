<html lang="en">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Tugas Akhir Teknik Informatika
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: 'Inter', sans-serif;
    }
  </style>
 </head>
 <body class="bg-[#f3f4fb] min-h-screen flex flex-col">
  <header class="flex items-center justify-between bg-white px-4 sm:px-6 md:px-8 h-14 border-b border-gray-200">
   <div class="flex items-center space-x-2">
    <img alt="Logo Tugas Akhir Teknik Informatika, blue and black icon with text" class="w-15 h-15 object-contain" height="50" src="{{ asset('images/logo.png') }}" width="50"/>
    <div class="leading-[0.9]">
     <h1 class="text-xs font-extrabold uppercase text-gray-700 tracking-wide">
      TUGAS AKHIR
     </h1>
     <p class="text-[6px] font-semibold text-gray-400 -mt-1">
      FAKULTAS | -
     </p>
    </div>
    <i class="far fa-eye text-gray-400 text-sm ml-4">
    </i>
    <i class="fas fa-expand-arrows-alt text-gray-400 text-sm ml-3">
    </i>
   </div>
   <div>
    <a href="{{ route('login') }}">
  <button class="text-xs font-bold text-gray-700 uppercase">
    LOGIN
  </button>
</a>
   </div>
  </header>
  <div class="flex flex-1 overflow-hidden">
   <nav class="bg-white w-48 border-r border-gray-200 flex flex-col px-4 py-6 space-y-6 text-gray-500 text-sm select-none">
    <a class="flex items-center space-x-2 text-gray-400 cursor-default" href="#">
     <i class="fas fa-home text-xs">
     </i>
     <span>
      Beranda
     </span>


    </a>
    <a class="flex items-center space-x-2 hover:text-gray-700 transition-colors duration-200" href="{{ route('panduan') }}">
     <i class="fas fa-book-open text-xs">
     </i>
     <span>
      Panduan
     </span>

     
    </a>
    <a class="flex items-center space-x-2 hover:text-gray-700 transition-colors duration-200" href="{{ route('judul') }}">
     <i class="fas fa-file-alt text-xs">
     </i>
     <span>
      Judul Tugas Akhir
     </span>


    </a>
    <a class="flex items-center space-x-2 hover:text-gray-700 transition-colors duration-200" href="{{ route('dokumen') }}">
     <i class="fas fa-download text-xs">
     </i>
     <span>
      Dokumen
     </span>


    </a>
   </nav>
   <main class="flex-1 overflow-auto p-6 space-y-6">
    <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
     <section class="bg-white rounded-md shadow-sm flex-1 p-4">
      <h2 class="text-xs font-bold text-gray-700 uppercase mb-3">
       JADWAL SEMINAR
      </h2>
      <table class="w-full text-xs text-gray-600 border-separate border-spacing-y-3">
       <thead>
        <tr class="text-gray-700 font-semibold text-[10px]">
         <th class="text-left pl-3 w-6">
          #
         </th>
         <th class="text-left w-1/3">
          Nama
         </th>
         <th class="text-left w-1/4">
          Waktu
         </th>
         <th class="text-left w-1/4">
          Ruang
         </th>
        </tr>
       </thead>
       <tbody>
        <tr class="bg-[#f9fafc] rounded-md align-top">
         <td class="pl-3 py-2 align-top">
          <div class="w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
           <i class="fas fa-user text-gray-500 text-xs">
           </i>
          </div>
         </td>
         <td class="py-2 align-top">
          <p class="font-semibold text-[10px] text-gray-700 leading-tight">
           NUR SUHARNITA M
          </p>
          <p class="text-[8px] text-gray-400 leading-tight">
           21103041101
          </p>
         </td>
         <td class="py-2 align-top text-[10px] text-gray-600 leading-tight">
          24-04-2025
          <br/>
          9:00 WIB
         </td>
         <td class="py-2 align-top text-[10px] text-gray-600 leading-tight">
          FT-2.11
         </td>
        </tr>
        <tr class="bg-[#f9fafc] rounded-md align-top">
         <td class="pl-3 py-2 align-top">
          <div class="w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
           <i class="fas fa-user text-gray-500 text-xs">
           </i>
          </div>
         </td>
         <td class="py-2 align-top">
          <p class="font-semibold text-[10px] text-gray-700 leading-tight">
           WAHYU BUDI UTOMO
          </p>
          <p class="text-[8px] text-gray-400 leading-tight">
           20103041030
          </p>
         </td>
         <td class="py-2 align-top text-[10px] text-gray-600 leading-tight">
          17-05-2025
          <br/>
          8:30 WIB
         </td>
         <td class="py-2 align-top text-[10px] text-gray-600 leading-tight">
          FT-2.12
         </td>
        </tr>
       </tbody>
      </table>
     </section>
     <section class="bg-white rounded-md shadow-sm w-full md:w-1/3 p-4">
      <h2 class="text-xs font-bold text-gray-700 uppercase mb-3">
       JADWAL UJIAN
      </h2>
      <table class="w-full text-xs text-gray-600 border-separate border-spacing-y-3">
       <thead>
        <tr class="text-gray-700 font-semibold text-[10px]">
         <th class="text-left pl-3 w-6">
          #
         </th>
         <th class="text-left w-1/3">
          Nama
         </th>
         <th class="text-left w-1/4">
          Waktu
         </th>
         <th class="text-left w-1/4">
          Ruang
         </th>
        </tr>
       </thead>
       <tbody>
        <tr class="bg-[#f9fafc] rounded-md align-top">
         <td class="pl-3 py-2 align-top">
          <div class="w-6 h-6 rounded-full bg-gray-300 flex items-center justify-center">
           <i class="fas fa-user text-gray-500 text-xs">
           </i>
          </div>
         </td>
         <td class="py-2 align-top">
          <p class="font-semibold text-[10px] text-gray-700 leading-tight">
           NUR SUHARNITA M
          </p>
          <p class="text-[8px] text-gray-400 leading-tight">
           21103041101
          </p>
         </td>
         <td class="py-2 align-top text-[10px] text-gray-600 leading-tight">
          17-05-2025
          <br/>
          10:00 WIB
         </td>
         <td class="py-2 align-top text-[10px] text-gray-600 leading-tight">
          FT-2.12
         </td>
        </tr>
       </tbody>
      </table>
     </section>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
     <section class="bg-white rounded-md shadow-sm p-4">
      <h3 class="text-xs font-semibold text-gray-700 text-center mb-1">
       Total Mahasiswa (Proses) TA Berdasarkan Tahun
      </h3>
      <p class="text-[8px] text-gray-400 text-center mb-3">
       Data Ini Dimulai Semester Genap 2019/2020
      </p>
      <img alt="Pie chart showing total students in process of thesis based on year, with legend for years 2023, 2021, 2020, 2019, 2018, 2017, 2016, 2015" class="mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/0ef27716-0d9c-4c17-cb4b-d1cce512320d.jpg" width="240"/>
     </section>
     <section class="bg-white rounded-md shadow-sm p-4">
      <h3 class="text-xs font-semibold text-gray-700 text-center mb-1">
       Total Mahasiswa (Selesai) TA Berdasarkan Tahun
      </h3>
      <p class="text-[8px] text-gray-400 text-center mb-3">
       Data Ini Dimulai Semester Genap 2019/2020
      </p>
      <img alt="Pie chart showing total students finished thesis based on year, with legend for years 2022, 2021, 2020, 2019, 2018, 2017, 2016, 2015, 2014, 2013, 2000" class="mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/ef91aede-2d63-4f09-c662-48f4656d946e.jpg" width="240"/>
     </section>
     <section class="bg-white rounded-md shadow-sm p-4">
      <h3 class="text-xs font-semibold text-gray-700 text-center mb-1">
       Rincian Total Mahasiswa Sidang Ujian TA
      </h3>
      <p class="text-[8px] text-gray-400 text-center mb-3">
       Data Ini Dimulai Semester Genap 2019/2020
      </p>
      <img alt="Bar chart showing detailed total students for thesis exam sessions from 2019-2020 to 2024-2025 with values 37, 18, 19, 10, 9, 30, 25, 31, 22" class="mx-auto" height="200" src="https://storage.googleapis.com/a1aa/image/8c600531-d973-49bb-fe7e-5fe0549e65a4.jpg" width="240"/>
     </section>
    </div>
   </main>
  </div>
 </body>
</html>
