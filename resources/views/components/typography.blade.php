{{--
    Typography Component
    Documentation: docs/components/typography.md
--}}
@props(['variant' => 'h1'])

@if ($variant == 'h1')
<h1 {{ $attributes->merge(['class' => 'scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl dark:text-white']) }}>
    {{ $slot }}
</h1>

@elseif ($variant == 'h2')
<h2 {{ $attributes->merge(['class' => 'mt-10 scroll-m-20 border-b h2b-2 text-3xl font-semibold tracking-tight transition-colors first:mt-0 dark:border-gray-700 dark:text-gray-100']) }}>
    {{ $slot }}
</h2>

@elseif ($variant == 'h3')
<h3 {{ $attributes->merge(['class' => 'mt-8 scroll-m-20 text-2xl font-semibold tracking-tight dark:text-gray-100']) }}>
    {{ $slot }}
</h2>

@elseif ($variant == 'h4')
<h4 {{ $attributes->merge(['class' => 'scroll-m-20 text-xl font-semibold tracking-tight dark:text-gray-100']) }}>
    {{ $slot }}
</h2>

@elseif ($variant == 'h5')
<h5 {{ $attributes->merge(['class' => 'scroll-m-20 text-lg font-semibold tracking-tight dark:text-gray-100']) }}>
    {{ $slot }}
</h5>

@elseif ($variant == 'p')
<p {{ $attributes->merge(['class' => 'leading-7 [&:not(:first-child)]:mt-6 dark:text-gray-300']) }}>
    {{ $slot }}
</p>

@elseif ($variant == 'small')
<small {{ $attributes->merge(['class' => 'text-sm font-medium leading-none dark:text-gray-400']) }}>
    {{ $slot }}
</small>

@elseif ($variant == 'lead')
<p {{ $attributes->merge(['class' => 'text-xl text-muted-foreground dark:text-gray-400']) }}>
    {{ $slot }}
</p>

@elseif ($variant == 'large')
<div {{ $attributes->merge(['class' => 'text-lg font-semibold dark:text-gray-200']) }}>
    {{ $slot }}
</div>

@elseif ($variant == 'muted')
<div {{ $attributes->merge(['class' => 'text-sm text-muted-foreground dark:text-gray-500']) }}>
    {{ $slot }}
</div>

@elseif ($variant == 'blockquote')
<blockquote {{ $attributes->merge(['class' => 'mt-6 border-l-2 pl-6 italic dark:border-gray-700 dark:text-gray-300']) }}>
    {{ $slot }}
</blockquote>

@elseif ($variant == 'inline-code')
<code {{ $attributes->merge(['class' => 'relative rounded bg-muted px-[0.3rem] py-[0.2rem] font-mono text-sm font-semibold dark:bg-gray-800 dark:text-gray-300']) }}>
    {{ $slot }}
</code>
@endif