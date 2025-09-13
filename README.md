# Laravel Learning Journey - Ninja Network

Learning Laravel fundamentals: **Route Wildcards & View Data**

## 🚀 Quick Setup

```bash
laravel new ninja_network
```

**Local Development:** `ninja_network.test`

![Project Preview](previews/image.png)
![Route Wildcards](previews/image1.png)
![View Data](previews/image2.png)

## 🎯 Route Wildcards & View Data

### Route Wildcards
Use `{}` to capture URL parameters:

```php
// Capture ID from URL: /ninjas/1, /ninjas/2, etc.
Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
});
```

**How it works:**
- `/ninjas/1` → `$id = 1`
- `/ninjas/2` → `$id = 2`
- Any number after `/ninjas/` gets captured

### Passing Data to Views

#### 1. Simple Data
```php
Route::get('/', function () {
    return view('welcome', ['name' => 'Auvro']);
});
```

#### 2. Array Data
```php
Route::get('/ninjas', function () {
    $ninjas = [
        ['name'=>'Auvro', 'skill'=>'Laravel', 'id'=>1],
        ['name'=>'Oitij', 'skill'=>'Vue', 'id'=>2]
    ];
    return view('ninjas.index', ['ninjas' => $ninjas]);
});
```

### Using Data in Blade Views

#### Display Simple Data
```blade
<h1>Welcome to Ninja Network, {{ $name }}</h1>
```

#### Display Array Data
```blade
<a href="/ninjas/{{ $ninjas[0]['id'] }}">
    {{ $ninjas[0]['name'] }} - {{ $ninjas[0]['skill'] }}
</a>
```

#### Display Wildcard Data
```blade
<p>Ninja ID: {{ $id }}</p>
```

## 🛠️ Complete Flow Example

1. **User visits:** `/ninjas/1`
2. **Route matches:** `Route::get('/ninjas/{id}'...)`
3. **Wildcard captured:** `$id = 1`
4. **Data passed:** `['id' => $id]`
5. **View rendered:** `ninjas.show.blade.php`
6. **Output:** `Ninja ID: 1`

## 📁 File Structure
```
routes/web.php              ← Define routes with wildcards
resources/views/
  welcome.blade.php         ← Receives 'name' data
  ninjas/
    index.blade.php         ← Receives 'ninjas' array
    show.blade.php          ← Receives 'id' from wildcard
```

