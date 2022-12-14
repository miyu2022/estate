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
            /* h1 {
                padding: 20px;
                margin: 50px;
            }
            p {
                margin: 40px;
            } */
        </style>
        <link rel="stylesheet" href="css/index.css">
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
        <main class="mx-5">
            <h1 class="text-sm-start pt-1"> 不動産検索サイト</h1>

            <p class="text-sm-start"> ご希望の条件を選択してください</p>
            <form method="post" action="search"> <!--web.php のかたちに合わせる -->
                <!--　↓これがないと権限エラー419になる-->
                @csrf
                <div id="wrapper">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="bukken_type[]" value="1">
                                        <label class="form-check-label" for="save-info">マンション</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="type[]" value="1">
                                        <label class="form-check-label" for="save-info">アパート</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="bukken_type[]" value="1">
                                        <label class="form-check-label" for="save-info">一戸建</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>エリア</th>
                                <td>
                                    <div class="form-check">
                                        <!--[] 配列　2以上チェックするときのため -->
                                        <input type="checkbox" class="form-check-input" name="bukken_address[]" value="0">
                                        <label class="form-check-label" for="save-info">鹿児島市（中央）</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="bukken_address[]" value="1">
                                        <label class="form-check-label" for="save-info">鹿児島市（山田　中山）</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="bukken_address[]" value="2">
                                        <label class="form-check-label" for="save-info">鹿児島市（和田　谷山）</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="bukken_address[]" value="">
                                        <label class="form-check-label" for="save-info">鹿児島市（すべてのエリア）</label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>家賃</th>
                                <td>
                                    <div class="row">
                                        <div class="col-3">
                                            <div class="">
                                                <select class="form-select form-select-sm">
                                                    <option>下限なし</option>
                                                    <option>30,000</option>
                                                    <option>40,000</option>
                                                    <option>50,000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-1 pt-1 text-start">
                                            円～
                                        </div>
                                        <div class="col-3 text-start">
                                            <div class="">
                                                <select class="form-select form-select-sm">
                                                    <option>上限なし</option>
                                                    <option>60,000</option>
                                                    <option>70,000</option>
                                                    <option>80,000</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-1 pt-1 text-start">
                                            円～
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th>間取</th>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="madori_name[]" value="1" />
                                        <label>1R・1K・1LDK</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="madori_name[]" value="2" />
                                        <label>2K・2DK・2LDK</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="madori_name[]" value="3" /><label>3K・3DK・3LDK</label>
                                        <label>4LDK以上</label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center2 mt-5 mb-5">
                        <button type="submit" class="btn btn-lg btn-outline-secondary" >この条件で検索する</button>
                    </div>
                    <div class="text-center3 mt-3 mb-3">
                        <a href="{{ url('/') }}" class="btn btn-outline-secondary" >条件をクリアする</a>
                    </div>
                </div>
            </form>
        </main>
        <footer class="mx-5">
                <div class="row">
                    <div class="col-1 col-md">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
                    </div>
                    <div class="col-2 col-md text-start">
                        <small class="d-block mb-3 text-muted">&copy; 2017–2021</small>
                    </div>
                </div>
                <div>
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
