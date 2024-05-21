<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
    .asztal {
        border: 1px solid #80808026;
        padding: 13px;
    }

    .form {
        width: 25%;
        margin: 0;
        margin-top: 20px;

    }

    header {
        text-align: start;
        padding: 5px;
    }

    header>h1 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .tema {
        width: 20%;
    }

    .mobil {
        display: none;
    }

    .divek {
        border: 1px solid #8080803d;
        padding: 20px;
    }

    @media only screen and (max-width: 600px) {

        body {
            text-align: center;
        }

        .asztal {
            display: none;
        }

        .mobil {
            display: block;
        }


        .tema {
            width: 50%;
        }

    }
</style>
<header>
    <nav class="navbar navbar-default bg-light">
        <div class="navbar-header">
            <a class="navbar-brand">Szótár</a>
        </div>
    </nav>
    <h1>Szavak</h1>
</header>
<article>
    <div class="container-xxl asztal">

        <form action="{{route('szavak.index')}}" method="GET">
            <select name="temaId" id="" onchange="this.form.submit()" class="form-select tema">
                <option value="" selected>Válasz témat(összes)</option>
                @foreach ($temak as $item)
                    <option value="{{$item->id}}" {{ request("temaId") == $item->id ? 'selected' : '' }}>{{$item->temanev}}
                    </option>
                @endforeach
            </select>
        </form>



        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ANGOL</th>
                    <th>MAGYAR</th>
                    <th>visszajelzés</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($szavak as $item)
                    <tr>
                        <td>{{$item->angol}}</td>
                        <td><input type="text" id="" class="form-control"></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container mt-3 mobil">
        <form action="{{route('szavak.index')}}" method="GET">
            <select name="temaId" id="" onchange="this.form.submit()" class="form-select tema">
                <option value="" selected>Válasz témat(összes)</option>
                @foreach ($temak as $item)
                    <option value="{{$item->id}}" {{ request("temaId") == $item->id ? 'selected' : '' }}>{{$item->temanev}}
                    </option>
                @endforeach
            </select>
        </form>
        @foreach ($szavak as $item)
            <div class="divek">
                <h4>{{$item->angol}}</h4>
                <input type="text" id="{{$item->id}}" class="form-control">
                <p class="valasz"></p>

            </div>
        @endforeach
    </div>
</article>

<script>

    function vizsgal(let id, let megoldas) {
        if(document.getElementById(id).value == megoldas)
        {
            document.getElementsByClassName("valasz").innerHTML = "✔";
        }
        
    }
</script>