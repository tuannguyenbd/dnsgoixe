<?php
$color = businessConfig('website_color')?->value;
$text = businessConfig('text_color')?->value
?>


@if(isset($color))

<style>
    :root {
        --text-primary: {{$color['primary'] ?? 'var(--text-primary)'}};
        --text-secondary: {{$color['secondary'] ?? 'var(--text-secondary)'}};
        --bs-body-bg: {{$color['background'] ?? 'var(--bs-body-bg)'}};
        --bs-primary: {{$color['primary'] ?? 'var(--bs-primary)'}};
        --bs-secondary-rgb: {{$color['secondary'] ?? 'var(--bs-secondary-rgb)'}};
        --bs-secondary: {{$color['secondary'] ?? 'var(--bs-secondary)'}};
    }
</style>

@endif

@if(isset($text))
    <style>
        :root {
            --title-color: {{$text['primary'] ?? 'var(--title-color)'}};
            --title-color-rgb: {{$text['secondary'] ?? 'var(--title-color-rgb)'}};
        }
    </style>
@endif
