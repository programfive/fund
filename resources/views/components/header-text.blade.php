@props(['title'])

<header
  class=" space-y-2 items-start justify-between sm:flex sm:space-y-0 sm:space-x-4  sm:rtl:space-x-reverse sm:py-4">
  <div>
    <h1 {{ $attributes->merge(['class' => ' text-2xl font-bold tracking-tight']) }}>
      {{ $title }}
    </h1>
    
  </div>
</header>
