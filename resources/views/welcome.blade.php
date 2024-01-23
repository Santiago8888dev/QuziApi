<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consumo de servicio Api</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h2>Questions</h2>
        <form>
            @foreach ($data as $item)

            <div class="row mb-3">
                <label for="">Question n {{ $loop->iteration }}</label>
              <label for="disabledSelect" class="form-label">{{ $item->question }}</label>
              <select id="disabledSelect" class="form-select">
                <option>Disabled select</option>
              </select>
            </div>
            @endforeach


              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</body>
</html>
