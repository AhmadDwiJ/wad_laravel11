<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Movie Table</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      display: flex;
      justify-content: center;
      padding: 20px;
    }

    table {
      width: 80%;
      margin: 50px auto;
      font-family: Arial, sans-serif;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      border-collapse: separate;
      border-spacing: 0;
      overflow: hidden;
    }

    thead tr {
      background-color: #333;
      color: #fff;
    }

    tbody tr {
      background-color: #f9f9f9;
    }

    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    th, td {
      padding: 12px 18px;
      border: 1px solid #ddd;
      text-align: center;
      font-size: 16px;
    }

    th {
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }

    tr:hover {
      background-color: #eaeaea;
    }
  </style>
</head>
<body>
</body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Director</th>
                            <th>Release Year</th>
                            <th>Genre</th>
                        </tr>
                        </thead>

                        <tbody>
                            @foreach ($films as $movie)
                                <tr>
                                    <td>{{ $movie->id }}</td>
                                    <td>{{ $movie->title }}</td>
                                    <td>{{ $movie->director }}</td>
                                    <td>{{ $movie->released_year }}</td>
                                    <td>{{ $movie->genre }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
</body>
    

</html>