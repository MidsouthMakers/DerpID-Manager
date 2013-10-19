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
    <h1>Create User</h1>
    @include('admin/partials/user-add-form')

</div>
@include('footer')
</body>
</html>
