# Laravel Learning Journey - Ninja Network

Learning Laravel fundamentals: **Layouts & Slots**

## 🚀 Quick Setup

```bash
laravel new ninja_network
```

**Local Development:** `ninja_network.test`

![Project Preview](previews/image.png)

## 🎯 Layouts & Slots

### 1. Layout Must Be in Components Folder
Create layout file in: `resources/views/components/layout.blade.php`

```blade
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/ninjas">Ninja List</a>
        <a href="/ninjas/create">Create Ninja</a>
    </nav>
    <div class="container">
        {{ $slot }}
    </div>
</body>
</html>
```

### 2. Using `<x-layout>` Component
Use the layout in any view:

```blade
<x-layout>
    <h1>Welcome to Ninja Network, {{ $name }}</h1>
</x-layout>
```

```blade
<x-layout>
    <h2>Ninja List</h2>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <a href="/ninjas/{{ $ninja['id'] }}">
                    {{ $ninja['name'] }} - {{ $ninja['skill'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
```

### 3. Slot - Everything Renders Inside
- **No need to write HTML tags** (DOCTYPE, html, head, body)
- **Content goes between** `<x-layout>` and `</x-layout>`
- **`{{ $slot }}`** renders all the content inside the component

### 4. Route Wildcard Matching
Laravel tries to match routes **from top to bottom**:

```php
Route::get('/ninjas', function () {
    // This matches /ninjas
});

Route::get('/ninjas/create', function () {
    // This matches /ninjas/create (specific route)
});

Route::get('/ninjas/{id}', function ($id) {
    // This matches /ninjas/1, /ninjas/2, etc.
});
```

**Important:** Specific routes (`/ninjas/create`) must come **before** wildcard routes (`/ninjas/{id}`)

## 🛠️ How Layouts Work

1. **Create layout** → `components/layout.blade.php`
2. **Define slot** → `{{ $slot }}` where content goes
3. **Use in views** → `<x-layout>Your content</x-layout>`
4. **Laravel renders** → Wraps your content with the layout

## 📁 File Structure
```
resources/views/
  components/
    layout.blade.php        ← Layout component with {{ $slot }}
  welcome.blade.php         ← Uses <x-layout>
  ninjas/
    index.blade.php         ← Uses <x-layout>
    show.blade.php          ← Uses <x-layout>
```

## ✅ Benefits
- **DRY (Don't Repeat Yourself)** - No duplicate HTML structure
- **Consistent navigation** - Same nav on every page
- **Easy maintenance** - Change layout once, affects all pages
- **Clean views** - Focus on content, not HTML boilerplate

