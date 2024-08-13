<!DOCTYPE html>
<html>

<head>
    <title>Edit Contact</title>
</head>

<body>
    <h1>Edit Contact</h1>

    <form method="POST" action="{{ route('contacts.update', $contact) }}">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ old('name', $contact->name) }}">
        @error('name')
            <p>{{ $message }}</p>
        @enderror

        <label>Email:</label>
        <input type="email" name="email" value="{{ old('email', $contact->email) }}">
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <label>Phone:</label>
        <input type="text" name="phone" value="{{ old('phone', $contact->phone) }}">

        <label>Address:</label>
        <input type="text" name="address" value="{{ old('address', $contact->address) }}">

        <button type="submit">Update</button>
    </form>

    <a href="{{ route('contacts.index') }}">Back</a>
</body>

</html>
