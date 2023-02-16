<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello world</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body  class="antialiased">
       <form method="post" action="../update/<?php echo $student->id ?>" >
        @csrf
        <label for="Name">Name : </label>
        <input type="textname" name="name" value=<?php echo $student->name ?>>
        <label for="Address">Address : </label>
        <input type="textname" name="address"  value=<?php echo $student->address ?>>
        <label for="Mobile">Mobile : </label>
        <input type="textname" name="mobile"  value=<?php echo $student->mobile ?>>
        <input type="submit" name="submit">
       </form>
    </body>
</html>
