<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                .<div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-3">Form Repeater</h1>
                        <p class="lead">Vlaidation and save multi data in same time</p>
                        <hr class="my-2">
                     <p>coded : Motasem alzyood</p>
                       
                    </div>
                </div>
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <table class="table table-bordered">

                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>City</th>
                                <th><a class="btn btn-outline-success addRow">add</a></th>

                            </tr>
                        </thead>

                        <tbody>
                            <tr>


                                <td><input type="text" class="form-control" name="name[]" placeholder="Name ..">
                                    @error('name.*')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><input type="number" class="form-control" name="age[]" placeholder="age ..">
                                    @error('age.*')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><select class="form-control" name="city[]">

                                        <option value="amman">Amman</option>
                                        <option value="zarqa">Zarqa</option>
                                        <option value="irbid">Irbid</option>
                                        <option value="maan">Ma’an</option>

                                    </select>
                                    @error('city.*')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </td>
                                <td><a class="btn btn-outline-danger remove">remove</a></td>
                            </tr>
                            <button class="btn btn-primary btn-lg mb-5"> Save Data </button>

                        </tbody>

                    </table>
                </form>


            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $('.addRow').on('click', function() {

            addRow();

        });

        function addRow() {

            var tr = ' <tr>' +

                ' <td><input type="text" class="form-control" name="name[]" placeholder="Name ..">'+

            ' @error("name.*") <div class="alert alert-danger">{{ $message }}</div> @enderror'+
                                       
                                   

'</td>' +
                ' <td><input type="number" class="form-control" name="age[]"  placeholder="age ..">'+
            ' @error("age.*") <div class="alert alert-danger">{{ $message }}</div> @enderror'+



'</td>' +
                ' <td>' +
                '<select  class="form-control" name="city[]" >' +

                ' <option>Amman</option>' +
                '  <option>Zarqa</option>' +
                ' <option>Irbid</option>' +
                '<option>Ma’an</option>' +

                '</select>'+
            ' @error("city.*") <div class="alert alert-danger">{{ $message }}</div> @enderror'+

'</td>' +
                ' <td><a class="btn btn-outline-danger remove">remove</a></td>' +
                '</tr>';
            $('tbody').append(tr);
        };

        $('tbody').on('click', '.remove', function() {

            $(this).parent().parent().remove();

        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"
        integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous">
    </script>

</body>

</html>
