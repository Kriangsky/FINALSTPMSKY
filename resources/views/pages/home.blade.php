<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <a href="">Dashboard</a>
            <a href="">Timeline</a>
            <a href="{{ route('logout') }}">Log out</a>
        </div>
        <div class="information">
            <div class="detail-information">
                <div class="title">
                    <img src="https://i.pinimg.com/736x/71/a0/af/71a0afe1309c0e391d89df6010caf0f1.jpg"
                        class="img-fluid rounded-circle">
                    <h1>{{ auth()->user()->leadername }}'s Profile</h1>
                </div>
                <p><strong>Group Name:</strong> {{ auth()->user()->groupname }}</p>
                <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                <p><strong>Leader Name:</strong> {{ auth()->user()->leadername }}</p>
                <p><strong>WA Number:</strong> {{ auth()->user()->wanumber }}</p>
                <p><strong>Line ID:</strong> {{ auth()->user()->lineid }}</p>
                <p><strong>GitHub ID:</strong> {{ auth()->user()->githubid }}</p>
                <p><strong>Birthplace:</strong> {{ auth()->user()->birthplace }}</p>
                <p><strong>Birthdate:</strong> {{ auth()->user()->birthdate }}</p>
            </div>
            <div class="images-right">
                <p><strong>CV:</strong></p>
                <img src="https://i.pinimg.com/736x/71/a0/af/71a0afe1309c0e391d89df6010caf0f1.jpg"
                    alt="CV Image" class="img-fluid">

                <p><strong>Flazz:</strong></p>
                <img src="https://i.pinimg.com/736x/71/a0/af/71a0afe1309c0e391d89df6010caf0f1.jpg"
                    alt="Flazz Image" class="img-fluid">

                <p><strong>Non-Binusian ID:</strong></p>
                <img src="https://i.pinimg.com/736x/71/a0/af/71a0afe1309c0e391d89df6010caf0f1.jpg"
                    alt="Non-Binusian ID Image" class="img-fluid">
            </div>
        </div>
    </div>
</body>

</html>
