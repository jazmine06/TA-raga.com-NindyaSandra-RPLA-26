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
    <!-- Font -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <title>All Post - Mosting</title>
</head>

<body>
    <header class="mz-main-header">
        <a class="mz-logo" href=" #">
            <img alt="Logo" src="img/mz-logo.png" />
        </a>
        <a class="mz-nav-trigger" href=" #">
            <span>
                </span>
        </a>
        <nav class="mz-nav">
            <ul class="mz-top-nav">
                <li class="has-children account">
                    <a href=" #">
                        <img alt="avatar" src="img/mz-avatar.png"> Muhamad Hanafi
                    </a>
                    <ul>
                        <li>
                            <a href=" #">My Account</a>
                        </li>
                        <li>
                            <a href=" #">Edit Account</a>
                        </li>
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
                    Main
                </li>
                <li>
                    <a href="index.php">
                        <span class="nav-icon"><i class="ti-crown"></i></span> Overview
                    </a>
                </li>
                <li class="has-children">
                    <a href="post.php" class="link">
                        <span class="nav-icon"><i class="ti-write"></i></span> Posts
                    </a>
                    <ul>
                        <li>
                            <a href="add-post.php">Add New</a>
                        </li>
                        <li>
                            <a href="post.php">All Post</a>
                        </li>
                        <li>
                            <a href="category.php">Category</a>
                        </li>
                        <li>
                            <a href="tags.php">Tags</a>
                        </li>
                    </ul>
                </li>
                <li class="has-children">
                    <a href="pages.php" class="link">
                        <span class="nav-icon"><i class="ti-layout"></i></span> Pages
                    </a>
                    <ul>
                        <li>
                            <a href="add-pages.php">Add New</a>
                        </li>
                        <li>
                            <a href="pages.php">All Pages</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="media.php">
                        <span class="nav-icon"><i class="ti-gallery"></i></span> Media
                    </a>
                </li>
                <li>
                    <a href="comments.php">
                        <span class="nav-icon"><i class="ti-comment-alt"></i></span> Comments
                    </a>
                </li>
                <li>
                    <a href="menu.php">
                        <span class="nav-icon"><i class="ti-menu"></i></span> Menus
                    </a>
                </li>
                <li class="has-children">
                    <a href="users.php" class="link">
                        <span class="nav-icon"><i class="ti-user"></i></span> Users
                    </a>
                    <ul>
                        <li>
                            <a href="add-users.php">Add User</a>
                        </li>
                        <li>
                            <a href="users.php">All Users</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="setting.php">
                        <span class="nav-icon"><i class="ti-settings"></i></span> Setting
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content-wrapper">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <h5>All Pages (107)</h5>
                                        <span>
                                    Silahkan menggunakan tombol <strong>edit, delete, view</strong> untuk melakukan tindakan.
                                    </span>
                                    </div>
                                    <div class="col-sm-6 order-sm-3 mb-3 text-md-right">
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-primary">Add New</button>
                                            <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="32">All</button>
                                            <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="20">Published</button>
                                            <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="45">Draft</button>
                                            <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="35">Trash</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover dt-responsive" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th width="5" class="all">
                                                <label class="mz-check check-table mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </th>
                                            <th class="all">Title</th>
                                            <th class="min-tablet text-center" width="10%">Author</th>
                                            <th class="desktop text-center" width="12%">Date</th>
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
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="mz-check mb-0">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i>
                                                </label>
                                            </td>
                                            <td>
                                                it is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                <div class="row-action">
                                                    <span><a class="mz-link" href="#'">Edit</a></span>
                                                    <span><a class="mz-link delete" href="#">Delete</a></span>
                                                    <span><a href="#" target="blank">View</a></span>
                                                </div>
                                            </td>
                                            <td class="text-center"><a href="#">Muhanz</a></td>
                                            <td class="text-center"><span class="text-muted">Published <abbr title="2018-10-15 10:08:30">15 Oct 2018</abbr></span></td>
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

            $(function() {
                $('[data-toggle="tooltip"]').tooltip()
            })
        });
    </script>
</body>

</html>