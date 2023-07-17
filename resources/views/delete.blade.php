<!doctype html>
<html lang="en">

<head>
  <title>Delete data</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-dark">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 mt-5 ">
                <form class="bg-warning p-5 text-dark rounded" >
                    <div class="mb-3">
                      <label  class="form-label">ID Number</label>
                      <input id="myId" type="text" class="form-control"  placeholder="Enter id no." >

                    </div>

                    <button onclick="deleteData()" type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
