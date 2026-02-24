{{--
    Typography Component
    Based on shadcn/ui Typography design
    Documentation: docs/components/typography.md
--}}
@props(['variant' => 'p'])

@if ($variant == 'h1')
<h1 {{ $attributes->merge(['class' => 'scroll-m-20 text-4xl font-extrabold tracking-tight text-balance lg:text-5xl']) }}>
    {{ $slot }}
</h1>

@elseif ($variant == 'h2')
<h2 {{ $attributes->merge(['class' => 'scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0']) }}>
    {{ $slot }}
</h2>

@elseif ($variant == 'h3')
<h3 {{ $attributes->merge(['class' => 'scroll-m-20 text-2xl font-semibold tracking-tight']) }}>
    {{ $slot }}
</h3>

@elseif ($variant == 'h4')
<h4 {{ $attributes->merge(['class' => 'scroll-m-20 text-xl font-semibold tracking-tight']) }}>
    {{ $slot }}
</h4>

@elseif ($variant == 'p')
<p {{ $attributes->merge(['class' => 'leading-7 [&:not(:first-child)]:mt-6']) }}>
    {{ $slot }}
</p>

@elseif ($variant == 'lead')
<p {{ $attributes->merge(['class' => 'text-xl text-muted-foreground']) }}>
    {{ $slot }}
</p>

@elseif ($variant == 'large')
<div {{ $attributes->merge(['class' => 'text-lg font-semibold']) }}>
    {{ $slot }}
</div>

@elseif ($variant == 'small')
<small {{ $attributes->merge(['class' => 'text-sm font-medium leading-none']) }}>
    {{ $slot }}
</small>

@elseif ($variant == 'muted')
<p {{ $attributes->merge(['class' => 'text-sm text-muted-foreground']) }}>
    {{ $slot }}
</p>

@elseif ($variant == 'blockquote')
<blockquote {{ $attributes->merge(['class' => 'mt-6 border-l-2 pl-6 italic']) }}>
    {{ $slot }}
</blockquote>

@elseif ($variant == 'inline-code')
<code {{ $attributes->merge(['class' => 'relative rounded bg-muted px-[0.3rem] py-[0.2rem] font-mono text-sm font-semibold']) }}>
    {{ $slot }}
</code>

@elseif ($variant == 'list')
<ul {{ $attributes->merge(['class' => 'my-6 ml-6 list-disc [&>li]:mt-2']) }}>
    {{ $slot }}
</ul>

@elseif ($variant == 'table')
<div {{ $attributes->merge(['class' => 'my-6 w-full overflow-y-auto']) }}>
    <table class="w-full">
        {{ $slot }}
    </table>
</div>
@endif
