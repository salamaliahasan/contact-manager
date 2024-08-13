<!DOCTYPE html>
<html>

<head>
    <title>Create Contact</title>
</head>

<body>
    <h1>Create Contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone') }}">

        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address') }}">

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back</a>
</body>

</html>
