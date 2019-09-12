<footer class="">
        <div class="container-fluid border border-dark bg-dark shadow">
            <div class="container">
                <div class="row">
                    <div class="col-md-2" style="margin-top: 30px;">
                        <ul style="list-style-type: none;">
                            <li></li>
                            <li><a href="{{ route('admin.termos.uso') }}">Termos de uso</a></li>
                            <li><a href="{{ route('admin.sobre.empresa') }}">Sobre o site</a></li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4 font-branca">© 2019 Moura Todos os direitos reservados.</div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 align-middle"><img src="{{ URL::asset('img/logofooter.jpg') }}" width="100" height="100" alt="" class="img-thumbnail" style="margin-top: 8px;"></div>
                </div>
            </div>
        </div>
    </footer>
    <style>
    html, body{
    height: 80vh;
    }

    .main-content{
        margin-top: 30px;
        min-height: 100%;
    }

    .marg-top{
        margin-top: 30px;
    }

    .font-branca{
        color : #ffffff;
        margin-top: 45px;
    }
    </style>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>

