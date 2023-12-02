<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="noindex">
    <title>Dashboard</title>

    <!-- styles -->
    <link rel="stylesheet" href="/storage/assets/css/dashboard/dashboard-style.css">
    <link rel="stylesheet" href="/storage/assets/css/icon-style.min.css">
    <link rel="stylesheet" href="/storage/assets/css/cropper.min.css">
    <link rel="icon" type="image/png" sizes="48x48" href="/storage/assets/img/favicon.ico">
</head>

@yield('content-dashboard')
@if(check_login_from_admin_to_member())
    <div
        style="text-align:center;width: 10%;height:auto;padding:10px; border-radius: 10px; position: fixed;background: #ffc107;top: 80%;left: 5%;right:2%;z-index: 99999">
        <strong>Admin Login : #{{ admin_to_member_id() }}</strong>
        <br>
        <span style="padding: 5px;border-radius: 10px">
            <form method="post" action="{{ route('backToAdmin') }}">
               <button type="submit">Back To Panel</button>
                @csrf
            </form>
    </span>
    </div>
@endif
<!-- start loading -->
<div class="page-loading visible">
    <div class="loading-content">
        <img
            src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjIsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCA2MTUuMiAzMzEuNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNjE1LjIgMzMxLjQ7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiMwMjAzMDI7fQ0KPC9zdHlsZT4NCjxnPg0KCTxnPg0KCQk8Zz4NCgkJCTxnPg0KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00OC44LDE5OC4ySDMzLjN2LTE1MmgwYzguNiwwLDE1LjUsNi45LDE1LjUsMTUuNVYxOTguMnoiLz4NCgkJCTwvZz4NCgkJCTxnPg0KCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xMzkuMSwxOTguMmgtMTUuNXYtMTUyaDBjOC42LDAsMTUuNSw2LjksMTUuNSwxNS41VjE5OC4yeiIvPg0KCQkJPC9nPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTMwMiw4OC40djE1LjhjLTEwLjctMTEuNC0yNS45LTE4LjQtNDIuOC0xOC4xYy0zMCwwLjUtNTQuNywyNC42LTU2LjEsNTQuNWMtMS41LDMyLjgsMjQuNyw2MCw1Ny4yLDYwDQoJCQkJYzE2LjQsMCwzMS4zLTcsNDEuNy0xOC4xdjE1LjhoMTUuNXYtOTQuM0MzMTcuNSw5NS4zLDMxMC41LDg4LjQsMzAyLDg4LjRMMzAyLDg4LjR6IE0yNjQuMSwxODQuOGMtMjYsMi4zLTQ3LjctMTkuNC00NS4zLTQ1LjMNCgkJCQljMS44LTE5LjksMTcuOC0zNiwzNy43LTM3LjdjMjYtMi4zLDQ3LjcsMTkuNCw0NS4zLDQ1LjNDMzAwLDE2NywyODQsMTgzLjEsMjY0LjEsMTg0Ljh6Ii8+DQoJCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTU1LjksODguNHYxNS44Yy0xMC43LTExLjQtMjUuOS0xOC40LTQyLjgtMTguMWMtMzAsMC41LTU0LjcsMjQuNi01Ni4xLDU0LjVjLTEuNSwzMi44LDI0LjcsNjAsNTcuMiw2MA0KCQkJCWMxNi40LDAsMzEuMy03LDQxLjctMTguMXYxNS44aDE1LjV2LTk0LjNDNTcxLjQsOTUuMyw1NjQuNSw4OC40LDU1NS45LDg4LjRMNTU1LjksODguNHogTTUxOCwxODQuOGMtMjYsMi4zLTQ3LjctMTkuNC00NS4zLTQ1LjMNCgkJCQljMS44LTE5LjksMTcuOC0zNiwzNy43LTM3LjdjMjYtMi4zLDQ3LjcsMTkuNCw0NS4zLDQ1LjNDNTUzLjksMTY3LDUzNy45LDE4My4xLDUxOCwxODQuOHoiLz4NCgkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zODkuNSw4Ni4xYy0yNy4zLDAuNS00OC45LDIzLjQtNDguOSw1MC42djYxLjVoMTUuNXYtNjEuNmMwLTE5LjIsMTUuNy0zNS4zLDM0LjktMzUNCgkJCQljMTguNiwwLjMsMzMuNywxNS42LDMzLjcsMzQuM3Y2Mi4zaDE1LjV2LTYyLjNDNDQwLjMsMTA4LjEsNDE3LjQsODUuNSwzODkuNSw4Ni4xeiIvPg0KCQkJPGc+DQoJCQkJPGc+DQoJCQkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik05NCwxOTguMkg3OC40Vjg4LjRoMGM4LjYsMCwxNS41LDYuOSwxNS41LDE1LjVWMTk4LjJ6Ii8+DQoJCQkJPC9nPg0KCQkJCTxnPg0KCQkJCQk8Y2lyY2xlIGNsYXNzPSJzdDAiIGN4PSI4Ni4yIiBjeT0iNjAiIHI9IjEzLjkiLz4NCgkJCQk8L2c+DQoJCQk8L2c+DQoJCQk8Zz4NCgkJCQk8Zz4NCgkJCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTE4NC4zLDE5OC4yaC0xNS41Vjg4LjRoMGM4LjYsMCwxNS41LDYuOSwxNS41LDE1LjVWMTk4LjJ6Ii8+DQoJCQkJPC9nPg0KCQkJCTxnPg0KCQkJCQk8Y2lyY2xlIGNsYXNzPSJzdDAiIGN4PSIxNzYuNiIgY3k9IjYwIiByPSIxMy45Ii8+DQoJCQkJPC9nPg0KCQkJPC9nPg0KCQk8L2c+DQoJCTxnPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTMzLjMsMjg4LjRsNy44LTQ5LjZsMTgsMzkuN2wxOC40LTM5LjhsNy4zLDQ5LjdoLTUuNGwtNC40LTMyLjdsLTE2LDM0LjdsLTE1LjgtMzQuN2wtNC43LDMyLjdIMzMuM3oiLz4NCgkJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0xNTEsMjY0LjljMC0xNCwxMC45LTI0LjMsMjQuNS0yNC4zczI0LjUsMTAuMywyNC41LDI0LjNjMCwxNC0xMC45LDI0LjMtMjQuNSwyNC4zDQoJCQkJQzE2MS45LDI4OS4yLDE1MSwyNzguOSwxNTEsMjY0Ljl6IE0xNTYuNCwyNjQuOWMwLDEwLjgsOC41LDE5LjQsMTkuMSwxOS40czE5LjEtOC42LDE5LjEtMTkuNGMwLTEwLjgtOC41LTE5LjQtMTkuMS0xOS40DQoJCQkJUzE1Ni40LDI1NC4xLDE1Ni40LDI2NC45eiIvPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTI2Ny4zLDI0MS40aDkuNmM0LjcsMCwxMS40LDAuNSwxNy4zLDUuNWM0LjMsMy42LDgsOS42LDgsMThjMCw5LjktNC45LDE1LjItOC4yLDE4DQoJCQkJYy00LjMsMy43LTguOCw1LjQtMTcuMiw1LjRoLTkuNVYyNDEuNHogTTI3Mi41LDI4My40aDQuNmMzLjcsMCw4LjktMC40LDEzLjUtNC4yYzMuNS0zLDYuMy03LjYsNi4zLTE0LjMNCgkJCQljMC0xMS4zLTcuOS0xOC42LTE5LjgtMTguNmgtNC42VjI4My40eiIvPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTM5NC4xLDI0Ni4zaC0xOS4ydjE0aDE4LjZ2NC45aC0xOC42djE4LjNoMTkuMnY0LjloLTI0LjR2LTQ3aDI0LjRWMjQ2LjN6Ii8+DQoJCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNDY2LjcsMjQxLjR2NDIuMWgxM3Y0LjloLTE4LjJ2LTQ3SDQ2Ni43eiIvPg0KCQkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTU2NS41LDI1MC43Yy0wLjYtMS4zLTEuNy0yLjctMi43LTMuNWMtMC45LTAuNy0yLjYtMS42LTUuMy0xLjZjLTQuNywwLTcuOSwyLjktNy45LDcuMw0KCQkJCWMwLDEuOCwwLjUsMi45LDEuOCw0LjFjMS40LDEuNCwzLjIsMi4yLDQuOSwzbDQuNSwyYzMsMS4zLDUuOCwyLjcsNy44LDVjMS45LDIuMiwyLjgsNS4xLDIuOCw4YzAsOC43LTYuNCwxNC40LTE0LjksMTQuNA0KCQkJCWMtMy4xLDAtNy0wLjYtMTAuMi0zLjhjLTIuMy0yLjMtMy43LTUuNS00LjQtOC4zbDUuMS0xLjRjMC40LDIuNSwxLjUsNC42LDIuOCw2YzIsMiw0LjQsMi42LDYuOCwyLjZjNi40LDAsOS40LTQuNiw5LjQtOS4zDQoJCQkJYzAtMi4xLTAuNi0zLjktMi4zLTUuNWMtMS4zLTEuMy0zLjItMi4xLTUuNi0zLjJsLTQuMi0yYy0xLjgtMC44LTQuMi0xLjgtNi4zLTMuOWMtMi0yLTMuMi00LjItMy4yLTcuNw0KCQkJCWMwLTcuMyw1LjYtMTIuMSwxMy4yLTEyLjFjMi45LDAsNS4yLDAuNiw3LjUsMi4xYzEuOSwxLjMsMy41LDMuMiw0LjYsNS4yTDU2NS41LDI1MC43eiIvPg0KCQk8L2c+DQoJPC9nPg0KCTxnPg0KCQk8cGF0aCBjbGFzcz0ic3QwIiBkPSJNNTg0LjksNDYuNWM3LjQsMCwxMy41LDYuMSwxMy41LDEzLjVzLTYuMSwxMy41LTEzLjUsMTMuNXMtMTMuNS02LjEtMTMuNS0xMy41UzU3Ny41LDQ2LjUsNTg0LjksNDYuNXoNCgkJCSBNNTg0LjksNzEuNWM2LjMsMCwxMS41LTUuMiwxMS41LTExLjVzLTUuMi0xMS41LTExLjUtMTEuNXMtMTEuNSw1LjItMTEuNSwxMS41UzU3OC42LDcxLjUsNTg0LjksNzEuNXogTTU4MCw1Mi4xaDYNCgkJCWMxLjMsMCw0LjUsMC41LDQuNSw0LjNjMCwyLjctMi4zLDQuMi00LjEsNC4ySDU4Nmw1LDcuNGgtM2wtNC44LTcuM2gtMC43djcuM0g1ODBWNTIuMXogTTU4Mi41LDU4LjZoMi4yYzIuNSwwLDMtMSwzLTIuMg0KCQkJcy0wLjQtMi4yLTIuNy0yLjJoLTIuNlY1OC42eiIvPg0KCTwvZz4NCjwvZz4NCjwvc3ZnPg0K"
            class="loading-logo" width="277" height="76" alt="liliana">
        <span class="loader"></span>
    </div>
</div>

<!-- scripts -->
<script src="/storage/assets/js/env.js"></script>
<script src="/storage/assets/js/lib/jQuery.min.js"></script>
<script src="/storage/assets/js/lib/lazyload.min.js"></script>
<script src="/storage/assets/js/lib/cropper.min.js"></script>
<script src="/storage/assets/js/lib/jquery-cropper.min.js"></script>
<script src="/storage/assets/js/popup.js"></script>
<script src="/storage/assets/js/modal-side.js"></script>
<script src="/storage/assets/js/photo-selector.js"></script>
<script src="/storage/assets/js/api-request-manager.js"></script>
<script src="/storage/assets/js/modal-screen.js"></script>
<script src="/storage/assets/js/wheel-picker.js"></script>
<script src="/storage/assets/js/media-library.js"></script>
<script src="/storage/assets/js/file-selector.js"></script>
<script src="/storage/assets/js/pro-validation.js"></script>
<script src="/storage/assets/js/component.js"></script>
<script src="/storage/assets/js/dashboard.js"></script>
@yield('js')

</body>

</html>
