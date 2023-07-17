<!doctype html>
<html lang="en">

<head>
  <title>Insert data</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="bg-success">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-6 mt-5 ">
                <form class="bg-info p-5 text-dark rounded" >
                    <div class="mb-3">
                      <label  class="form-label">Name</label>
                      <input id="myName" type="text" class="form-control"  placeholder="Enter name" >

                    </div>
                    <div class="mb-3">
                      <label  class="form-label">Email</label>
                      <input id="myEmail" type="email" class="form-control" placeholder="Enter email" >
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Class</label>
                        <input id="myClass" type="text" class="form-control" placeholder="Enter class" >
                      </div>

                    <button onclick="myData()" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/axios.min.js') }}"></script>
    <script  type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
