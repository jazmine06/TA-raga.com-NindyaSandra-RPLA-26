<!DOCTYPE doctype html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="resource-type" content="document" />
    <meta name="robots" content="all, index, nofollow" />
    <meta name="googlebot" content="all, index, nofollow" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Muhanz" />
    <link rel="icon" href="img/favicon.png" sizes="16x16" type="image/png">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap v4.1.3 (https://getbootstrap.com/) -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/reset.css">
    <!-- MZ Style -->
    <link href="css/mz-style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="css/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/datatables/responsive.bootstrap4.css" rel="stylesheet">
    <style>
        @media only screen and (max-width: 768px) {
            .dataTables_length {
                text-align: right;
            }
        }
    </style>
    <!-- Font -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <script src="https://kit.fontawesome.com/3cba79e54c.js" crossorigin="anonymous"></script>
    <title>Admin Raga.Com</title>
</head>

<body>
    <header class="mz-main-header">
        <a class="mz-nav-trigger" href=" #">
            <span>
                </span>
        </a>
        <nav class="mz-nav">
            <ul class="mz-top-nav">
                <li class="has-children account">
                    <a href=" #">
                        <img alt="avatar" src="img/mz-avatar.png"> Admin
                    </a>
                    <ul>

                        <li>
                            <a href=" #">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- .mz-main-header -->
    <main class="mz-main-content">
        <!-- Sidebar -->
        <nav class="mz-side-nav">
            <ul>
                <li class="mz-label">
                    raga.com
                </li>
                <li>
                    <a href="index.php">
                        <span class="nav-icon"><i class="fa-thin fa-grid-horizontal"></i></span> Dashboard
                    </a>
                </li>
                <li>
                    <a href="add-post.php">
                        <span class="nav-icon"><i class="fa-solid fa-plus"></i></span> Tambah Berita
                    </a>
                </li>
                <li>
                    <a href="post.php">
                        <span class="nav-icon"><i class="fa-solid fa-gear"></i></span> Manage Berita
                    </a>
                </li>
                <li>
                    <a href="category.php">
                        <span class="nav-icon"><i class="ti-comment-alt"></i></span> Kategori
                    </a>
                </li>
                </li>
                <li>
                    <a href="comments.php">
                        <span class="nav-icon"><i class="fa-regular fa-comments"></i></span> Komentar
                    </a>
                </li>
    
                    </ul>
                </li>
               
            </ul>
        </nav>
        <div class="content-wrapper">
            <div class="main-content">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Kategori</h5>
                                <span>Form tambah dan edit detail kategori</span>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nama kategori">
                                    </div>
                                    
                                    <div class="form-group">
                                       
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h5>List Kategori</h5>
                                <span>Silahkan menggunakan tombol <strong>edit dan delete</strong> untuk melakukan tindakan.</span>
                                
                            </div>
                            <div class="card-body">
                                <table class="table table-hover dt-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5" class="all">
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </th>
                                            <th class="all">Nama Kategori</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody class="body-table">
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                BOLA
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                
                                                </div>
                                            </td>
                                        
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                        
                                                BALAP
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                BASKET
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                VOLI
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                   
                                                </div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                PANAHAN
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                HOBI
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                   
                                                </div>
                                            </td>
                                           
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                Terima kasih telah menggunakan <a href="#">Template Mosting For Blog Admin</a> By. <a href="#">MuHanz</a>.
            </div>
        </div>
        <!-- .content-wrapper -->
    </main>
    <!-- .mz-main-content -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/typeahead.bundle.js"></script>
    <script src="js/main.js"></script>
    <!-- datatables -->
    <script src="js/datatables/jquery.dataTables.min.js"></script>
    <script src="js/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="js/datatables/dataTables.responsive.min.js"></script>
    <script src="js/datatables/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('table').DataTable({
                ordering: false,
                language: {
                    "lengthMenu": "Tampilkan _MENU_",
                    "search": "_INPUT_",
                    "searchPlaceholder": "Pencarian..."
                }

            });

            $.fn.dataTable.ext.classes.sPageButton = 'btn btn-sm';
        });
    </script>
</body>

</html>