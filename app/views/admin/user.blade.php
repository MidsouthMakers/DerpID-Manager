<!-- app/views/admin/user.blade.php -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DerpID-Manager - Admin Users</title>
    @include('header-styles')
</head>
<body>
@include('admin/partials/admin-header')
<div class="welcome">
    <h1>Admin</h1>
    <p>This is where we would CRUD users.</p>
    <ul
        <li>
            <a href="/admin/user/create">Create User</a>
        </li>
    </ul>

</div>
@include('footer')
</body>
</html>
