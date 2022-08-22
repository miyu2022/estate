<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.84.0">
        <title>不動産検索サイト</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Custom styles for this template -->
        <!-- bootから移したら、パスをそろえること-->
        <link href="css/product.css" rel="stylesheet">
        <style>
            h1 {
                padding: 20px;
                margin: 30px;
            }
            p {
                margin: 30px;
            }
        </style> 
    </head>
    <body>

        <header class="site-header sticky-top py-1">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            </a>
            <a class="py-2 d-none d-md-inline-block" href="#">売買</a>
            <a class="py-2 d-none d-md-inline-block" href="#">賃貸</a>
            <a class="py-2 d-none d-md-inline-block" href="#">家主さまへ</a>
            <a class="py-2 d-none d-md-inline-block" href="#">その他</a>
           
            </nav>
        </header>
        <main>                   
            <h1 class="text-sm-start">物件詳細</h1>
            <div class="w-75 m-auto">
                <div class="card">
                    <h5 class="card-header">{{ $detail->bukken_name }}  {{ $detail->room_number }}号室</h5>
                    <div class="card-body">
                        <h5 class="card-title"> 家賃:{{ $detail->room_cost }}円  間取:{{ $detail->madori_name }} ({{ $detail->room_type_memo}})  </h5>
                    </div>
                                        
                    
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>                                                    
                        </div>    
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                </div>                                                    
                        </div>
                        
                        <div ciass="card"
                        >
                            <h5 class="card-title"> 住所:{{ $detail->room_adderss }} </h5>
                        </div>
            </div>

            <a href="#" class="btn btn-primary">印刷する</a>
        </main>
        <footer class="container py-5">
            <div class="row">
                <div class="col-12 col-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                    <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="#">Team</a></li>
                    <li><a class="link-secondary" href="#">Locations</a></li>
                    <li><a class="link-secondary" href="#">Privacy</a></li>
                    <li><a class="link-secondary" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <script src="js/bootstrap.bundle.min.js"></script>        
    </body>
</html>
