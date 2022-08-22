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
                   
            <h1 class="text-sm-start"> 不動産検索サイト検索結果一覧</h1>
            <p class="text-start text-uppercase fs-3"> 賃貸物件（住居）</p>
            <div class="w-75 m-auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">詳細</th>
                            <th scope="col">物件名</th>
                            <th scope="col">物件住所</th>
                            <th scope="col">家賃</th>
                            <th scope="col">間取</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($list as $data)                  
                        <tr>                       
                            <td>
                                <a href="detail?bukken_id={{ $data->bukken_id }}&bukken_seq={{ $data->bukken_seq }}" class="btn btn-sm btn-primary">詳細</a>
                            </td>
                            <td>{{ $data->bukken_name }}</td>
                            <td>{{ $data->bukken_address }}</td>
                            <td>{{ $data->room_cost }}</td>
                            <td>{{ $data->madori_name }}</td>
                        </tr>
                      @endforeach
                      
                    </tbody>
                </table>
            </div>
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
