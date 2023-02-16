<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    .form-container {
        width: 500px;
        margin: 0 auto;
    }

    .form-wrapper {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f8f8f8;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Style for form inputs */
    .form-input {
        display: block;
        margin-bottom: 10px;
        padding: 5px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    /* Style for form labels */
    .form-label {
        display: block;
        margin-bottom: 5px;
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 600;
    }

    /* Style for form submit button */
    .form-submit {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    /* Style for form submit button on hover */
    .form-submit:hover {
        background-color: #3e8e41;
    }

    /* Style for select container */
    .select-container {
        position: relative;
        width: 100%;
    }

    /* Style for select */
    .select {
        display: block;
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: #fff;
        background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M17.3 6.3c-.4-.4-1-.4-1.4 0L10 12.3 3.4 6.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4l7 7c.2.2.5.3.7.3s.5-.1.7-.3l7-7c.4-.4.4-1 0-1.4z" fill="%23333"/></svg>');
        background-repeat: no-repeat;
        background-position: right 10px center;
        cursor: pointer;
        -webkit-appearance: none;
        /* Remove default arrow for Safari */
        -moz-appearance: none;
        /* Remove default arrow for Firefox */
        appearance: none;
        /* Remove default arrow for other browsers */
    }

    /* Style for select options */
    select option {
        font-size: 16px;
        padding: 10px;
        color: #333;
        background-color: #fff;
        transition: all 0.2s ease-in-out;
    }

    /* Style for select options on hover */
    select option:hover {
        background-color: #f2f2f2;
        cursor: pointer;
    }

    /* Style for select options when selected */
    select option:checked {
        background-color: #007bff;
        color: #fff;
    }

    /* Style for select dropdown */
    .select-dropdown {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        overflow-y: auto;
        max-height: 200px;
    }
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello world</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>

<body class="antialiased">
    <div class="form-wrapper">
        <form method="post" action="submit" class="form-container">
            @csrf
            <label for="Name" class="form-label">Name : </label>
            <input type="textname" name="name" class="form-input">
            <label for="Address" class="form-label">Address : </label>
            <input type="textname" name="address" class="form-input">
            <label for="Mobile" class="form-label">Mobile : </label>
            <input type="textname" name="mobile" class="form-input">
            <label for="cars" class="form-label">Choose a course:</label>
            <div class="select-container">
                <select name="courses" id="courses" class="select">
                    @foreach($courses as $course)
                    <option value={{$course->id}}>{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" name="submit" class="form-submit">
        </form>
    </div>
</body>

</html>