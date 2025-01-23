# PRIMEROS PASOS CON TAILWIND

## 1. INSTALACION DE TAILWIND

https://tailwindcss.com/docs/installation/using-vite

## 2. INTRODUCCION A TAILWIND Y SUS CLASES DE COLORES

## 3. BACKGROUND-COLOR + TRUCOS EN TAILWIND

```html
<button class="bg-indigo-500 ...">Save changes</button>
```

```html
<p class="text-blue-600">The quick brown fox...</p
```

## 4. SISTEMA DE ESPACIADO EN TAILWIND

```html
<div class="w-96"></div>
<div class="w-1/2"></div>
<div class="w-4/5"></div>
```

```html
<div class="w-xl ...">w-xl</div>
<div class="w-lg ...">w-lg</div>
<div class="w-md ...">w-md</div>
<div class="w-sm ...">w-sm</div>
<div class="w-xs ...">w-xs</div>
<div class="w-2xs ...">w-2xs</div>
<div class="w-3xs ...">w-3xs</div>
```

## 5. DETERMINAR HEIGHT EN TAILWIND

```html
<div class="h-96 ...">h-96</div>
<div class="h-80 ...">h-80</div>
```

## 6. MIN-WIDTH, MIN-HEIGHT, MAX-HEIGHT, MAX-WIDTH

```html
<div class="min-w-80 ...">min-w-80</div>
<div class="min-w-64 ...">min-w-64</div>
<div class="min-w-3/4 ...">min-w-3/4</div>
<div class="w-full ...">w-full</div>
<div class="min-w-lg ...">min-w-lg</div>
<div class="min-w-md ...">min-w-md</div>
<div class="min-w-sm ...">min-w-sm</div>
<div class="min-w-xs ...">min-w-xs</div>
```

```html
<div class="w-full max-w-96 ...">max-w-96</div>
<div class="w-full max-w-80 ...">max-w-80</div>

<div class="w-full max-w-9/10 ...">max-w-9/10</div>
<div class="w-full max-w-3/4 ...">max-w-3/4</div>
```

```html
<div class="min-h-80 ...">min-h-80</div>
<div class="min-h-64 ...">min-h-64</div>

<div class="min-h-full ...">min-h-full</div>
<div class="min-h-9/10 ...">min-h-9/10</div>
<div class="min-h-3/4 ...">min-h-3/4</div>
```

```html
<div class="h-full max-h-80 ...">max-h-80</div>
<div class="h-full max-h-64 ...">max-h-64</div>

<div class="h-full max-h-1/2 ...">max-h-1/2</div>
<div class="h-full max-h-1/4 ...">max-h-1/4</div>
<div class="h-full max-h-full ...">max-h-full</div>
```

## 7. PRACTICA SECCION + MARGENES-PADDING

## 8. PRACTICA SECCION + MANIPULACION DE TEXTOS

## 9. FUENTES EN TAILWIND + PRACTICA SECCION

## 10. BORDES EN TAILWIND + PRACTICA SECCION

```html
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="h-screen text-white flex justify-center items-center">
        <div
            class="bg-blue-700 w-2/5 h-2/3 border-8 border-double justify-center items-center flex flex-col rounded-md shadow-xl">
            <img class="h-64 w-64 rounded-full object-cover"
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiv6LZSP05dCOSabNJAEASN6eifbg6SkC41CAHXKInFvlJk9XFfdQFLtE9K1X950a5HC0&usqp=CAU"
                alt="">
            <div class="gap-8 w-full h-2/5 flex flex-col justify-center items-center ">
                <h1 class="text-4xl font-bold">Soy Spiderman</h1>
                <p class="text-[18px]">Bienvenido a mi universo</p>
                <button class="bg-white text-blue-700 rounded-full p-4 w-[170px]">Contáctame</button>
            </div>
        </div>
    </div>
</body>

</html>
```