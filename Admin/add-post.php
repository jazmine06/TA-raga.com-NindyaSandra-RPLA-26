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
    <link rel="stylesheet" href="css/tagsinput.css">
    <!-- Font -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Modernizr -->
    <script src="js/modernizr.js"></script>
    <script src="https://kit.fontawesome.com/3cba79e54c.js" crossorigin="anonymous"></script>
    <title>Admin Raga.Com</title>
</head>

<body>
    <header class="mz-main-header">
       
        </a>
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
                            <a href="logout.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>
    <!-- Main -->
    <main class="mz-main-content">
        <!-- Sidebar -->
        <nav class="mz-side-nav">
            <ul>
                <li class="mz-label">
                    raga.com
                </li>
                <a href="index.php">
                  Dashboard
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
        <!-- Content -->
        <div class="content-wrapper">
            <div class="main-content">
                <form>
                    <div class="row">
                        <div class="col-12 col-md-30">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                 Artikel Baru
                              </h5>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Judul artikel">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="description" class="form-control" placeholder="Isi Artikel"></textarea>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="card">
                                <div class="card-header">
                         <h5>
                            Tambahkan Gambar
                        </h5>
                          </div>
                          <div class="card-body">
                              <div class="m-3 text-center data-image">
                                  <input type="file" name="cover_image" id="cover_image">
                                  
                              </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-30">
                            <div class="card">
                                <div class="card-header">
                                    <h5>
                                 Kategori
                              </h5>
                                </div>
                                <div class="card-body">
                                    <div id="list_box_cat">
                                        <ul class="list-1">
                                            <li>
                                                <label class="mz-check">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i> Bola
                                                </label>
                                                    <li>

                                            </li>
                                            <li>
                                                <label class="mz-check">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i> Balap
                                                </label>
                                            </li>
                                            <li>
                                                <label class="mz-check">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i> Basket
                                                </label>
                                            </li>
                                            <li>
                                                <label class="mz-check">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i> Voli
                                                </label>
                                            </li>
                                            <li>
                                                <label class="mz-check">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i> Panahan
                                                </label>
                                            </li>
                                            <li>
                                                <label class="mz-check">
                                                    <input type="checkbox">
                                                    <i class="mz-blue"></i> Hobi
                                                </label>
                                            </li>
                                    </div>
                                    
                            <div class="card">
                                    <div class="card-header">
                                        <h5>
                                     Tindakan
                                  </h5>
                                    </div>
                                    <div class="box-tool">
                                        <a href="" class="text-danger">Hapus</a>
                                    </div>
                                    <div class="card-body pt-2">
                                        <ul class="list-group list-group-flush mb-3">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Penulis
                                                <span class="badge badge-light badge-pill">Admin</span>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Diedit Oleh
                                                <span class="badge badge-light badge-pill">Admin</span>
                                            </li>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Tanggal Publish
                                                <small><abbr title="21-10-2018 12:53">21-10-2022 12:53</abbr></small>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Tanggal Edit
                                                <small><abbr title="21-10-2018 12:53">21-10-2022 12:53</abbr></small>
                                            </li>
                                        </ul>
                                        <button type="button" class="btn btn-primary  btn-sm float-right">Kirim</button>
                                    </div>
                                </div>
                           
                                    <!-- Modal -->
                                    <div class="modal fade p-0" id="modal-media" role="dialog" data-backdrop="static">
                                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                            <div class="modal-content rounded-0">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Media Library Mosting</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body p-0">
                                                    <embed id="frame_media" src="" width="100%" height="550" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                
            </div>
            
        </div>
        <!-- .content-wrapper -->
    </main>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/pace.min.js"></script>
    <script src="js/tinymce/jquery.tinymce.min.js"></script>
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/bootstrap-tagsinput.js"></script>
    <script src="js/typeahead.bundle.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            // text-editor with filemanager
            tinymce.init({
                selector: "textarea",
                menubar: false,
                height: 400,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor preview fullscreen',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code help wordcount'
                ],
                toolbar: 'insert | formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | preview | fullscreen | help',
                external_filemanager_path: "filemanager/",
                filemanager_title: "Media Library Mosting",
                // filemanager_sort_by : users_folder,
                filemanager_access_key: "191a7cb7086e4e399cf2e76d6ca7b501", // for security access direct
                external_plugins: {
                    "filemanager": window.location.origin + "/filemanager/plugin.min.js"
                },
                media_advtab: false
            });

            //open media
            $(".open_media").click(function(e) {
                e.preventDefault();
                var id = $(this).attr('data-set');
                var url_media = window.location.origin + '/filemanager/dialog.php?type=1&descending=0&field_id=' + id + '&akey=191a7cb7086e4e399cf2e76d6ca7b501';
                $('#frame_media').attr('src', url_media);
                $("#modal-media").modal();
            });

            //hide box-image, set image, hide modal
            window.responsive_filemanager_callback = function(field_id) {
                var url = jQuery('#' + field_id).val();
                // show images
                $(".data-image").append('<img src="' + url + '" class="fluid img-cover  mb-3" style="width: 100%;">').hide().fadeIn("slow");
                // show button delete
                $(".data-image").append('<div id="remove-image-cover"> <a href="#">Hapus Gambar</a></div>').hide().fadeIn("slow");
                // hide box images                 
                $(".box-image").hide();
                // close modal media
                jQuery("#modal-media").modal("hide");
            }

            $(document).on('click', '#remove-image-cover', function(e) {
                e.preventDefault();
                //remove button delete
                $(this).fadeOut("slow", function() {
                    $(this).remove();
                });
                //remove img tag, show back box-image and reset value from id #cover_image
                $(".img-cover").fadeOut("slow", function() {
                    $('.img-cover').remove();
                    $('.box-image').fadeIn("slow");
                    $('#cover_image').val('');
                });

            });
            //Tags
            var list_tags = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {
                    url: 'list_tags.json',
                    filter: function(list) {
                        return $.map(list, function(list_tag) {
                            return {
                                name: list_tag
                            };
                        });
                    }
                }
            });

            list_tags.initialize();

            $('.tags').tagsinput({
                typeaheadjs: {
                    name: 'list_tags',
                    displayKey: 'name',
                    valueKey: 'name',
                    source: list_tags.ttAdapter()
                }
            });
            // pre tags
            $(function() {
                $('.tags').on('change', function(event) {

                    var val = $('.tags').val()
                    if (val === null)
                        val = "null";
                    $('code', $('pre.val')).php(($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\""));
                    $('code', $('pre.items')).php(JSON.stringify($('.tags').tagsinput('items')));
                }).trigger('change');
            });

        });
    </script>
</body>

</html>