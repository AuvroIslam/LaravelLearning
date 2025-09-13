# Laravel Learning Journey - Ninja Network

Learning Laravel fundamentals through building the **Ninja Network** application.

## 🚀 Quick Setup

```bash
laravel new ninja_network
```

**Local Development:** `ninja_network.test`

![Project Preview](previews/image.png)

## 🎯 Core Laravel Concepts

### Routes and Views
Laravel uses routes to connect URLs to views or controllers.

#### Basic Route Example
```php
// In routes/web.php
Route::get('/ninjas', function() {
    return view('ninjas.index');
});
```

**How it works:**
1. User visits `/ninjas` URL
2. Laravel looks for this route in `routes/web.php`
3. Route returns a view from `resources/views/ninjas/index.blade.php`

### Blade Templating
We use **Blade** to create dynamic views with special features:

```php
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
```

**Blade Features:**
- `{{ }}` - Echo variables/data
- `@if`, `@foreach` - Control structures  
- `@extends`, `@section` - Template inheritance
- `{!! !!}` - Raw HTML output

### File Structure
```
routes/
  web.php           ← Define your routes here
resources/
  views/
    welcome.blade.php     ← Your views here
    ninjas/
      index.blade.php     ← Organized in folders
```

## �️ How Everything Works

1. **Request comes in** → `ninja_network.test/ninjas`
2. **Laravel checks routes** → `routes/web.php`
3. **Route found** → `Route::get('/ninjas', ...)`
4. **View returned** → `resources/views/ninjas/index.blade.php`
5. **Blade processes** → Dynamic content rendered
6. **HTML sent to browser** → User sees the page

