<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Notes</title>

   <!-- Tailwind CSS CDN link for styling, with additional plugins for forms, typography, and aspect-ratio -->
  <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">

   /* General button styles */
    .btn {
      @apply bg-white rounded-md px-4 py-2 text-center font-medium text-slate-500 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50 h-10;
    }


    /* Input field styling */
    .input {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none rounded-md border-slate-300;
    }
     
     
      /* Note item container styling */
    .note-item {
      @apply text-sm rounded-md bg-white p-4 leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
    }
    
     /* Note title styling */
    .note-title {
      @apply text-lg font-semibold text-slate-800 hover:text-slate-600;
    }

 

  
    

  </style>
  {{-- blade-formatter-enable --}}
</head>

<body class="container mx-auto mt-10 mb-10 max-w-3xl">
    <!-- The main content of the page will be inserted here, where the 'content' section is yielded -->
  @yield('content')
</body>

</html>