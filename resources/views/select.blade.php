<!doctype html>
<html lang="en">

<head>
  <title>Data Show</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark">

    <div class="container ">
        <table class="table table-success table-striped mt-5 ">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">CLASS</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($selectKey as $item)
                     <tr>
                        <th scope="row">{{ $item->id }} </th>
                        <td>{{ $item->name }} </td>
                        <td>{{ $item->email }} </td>
                        <td>{{ $item->class }} </td>
                    </tr>
                @endforeach



            </tbody>
        </table>

    </div>


</body>

</html>
