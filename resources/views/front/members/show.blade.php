<!-- resources/views/members/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Members</title>
</head>
<body>
    <h1>Members List</h1>
    <ul>
        @foreach ($members as $member)
            <li>{{ $member->id}} ({{ $member->fullName }})</li>
        @endforeach
    </ul>
</body>
</html>
