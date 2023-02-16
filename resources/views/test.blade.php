<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<style>
/* Style for edit button */
.edit-button {
  background-color: #007bff;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

/* Style for edit button on hover */
.edit-button:hover {
  background-color: #0069d9;
}

/* Style for delete button */
.delete-button {
  background-color: #dc3545;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

/* Style for delete button on hover */
.delete-button:hover {
  background-color: #c82333;
}

/* Style for add button */
.add-button {
  background-color: #28a745;
  border: none;
  color: #fff;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 4px;
  cursor: pointer;
}

/* Style for add button on hover */
.add-button:hover {
  background-color: #218838;
}

    
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello i am wasif </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        #customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}

    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="antialiased">
    <a href="create" class="add-button" >Add student</a>
    <table id="customers">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Action</td>

        </tr>
        
        @foreach($dataArr[0] as $data)
        <tr>
            <td>{{$data->id}}</td>  
            <td>{{$data->name}}</td>
            <td><a href="delete/{{$data->id}}"   class="delete-button" >Delete   </a> <a href="edit/{{$data->id}}" class="edit-button">edit</a></td>
           </tr>
        @endforeach    
    </table>
    
</body>

</html>