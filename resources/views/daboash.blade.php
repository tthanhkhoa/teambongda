<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>Dashboard - Admin</title>

    <meta name="description" content="Static &amp; Dynamic Tables" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- bootstrap & fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

    <!-- page specific plugin styles -->

    <!-- text fonts -->
    <link rel="stylesheet" href="{{asset('assets/css/fonts.googleapis.com.css')}}" />

    <!-- ace styles -->
    <link rel="stylesheet" href="{{asset('assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

    <!--[if lte IE 9]>
            <link rel="stylesheet" href="{{asset('assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
        <![endif]-->
    <link rel="stylesheet" href="{{asset('assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/ace-rtl.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}" />

    <!--[if lte IE 9]>
          <link rel="stylesheet" href="{{asset('assets/css/ace-ie.min.css')}}" />
        <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="{{asset('assets/js/ace-extra.min.js')}}"></script>
    <script src="{{asset('js/iziToast.min.js')}}"></script>

    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

    <!--[if lte IE 8]>
        <script src="{{asset('assets/js/html5shiv.min.js')}}"></script>
        <script src="{{asset('assets/js/respond.min.js')}}"></script>
        <![endif]-->
</head>

<body class="no-skin">
    <div id="navbar" class="navbar navbar-default          ace-save-state">
        <div class="navbar-container ace-save-state" id="navbar-container">
            <div class="navbar-buttons navbar-header pull-right" role="navigation">
                <ul class="nav ace-nav">
                    <li class="light-blue dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                            <img class="nav-user-photo" src="{{asset('assets/images/avatars/user.jpg')}}" alt="Jason's Photo" />
                            <span class="user-info">
                                <small>Welcome,</small>
                                                 Jason
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>
                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-power-off"></i>
                                                                          Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <div id="sidebar" class="sidebar responsive ace-save-state">
            <ul class="nav nav-list">
                <li class="">
                    <a href="#">
                        <i class="menu-icon fa fa-tachometer"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>
                    <b class="arrow"></b>
                </li>
            </ul>
        </div>

        <div class="main-content">
            <div class="main-content-inner">
                <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                    <ul class="breadcrumb">
                        <li>
                            <i class="ace-icon fa fa-home home-icon"></i>
                            <a href="#">Home</a>
                        </li>

                        <li>
                            <a href="#">Tables</a>
                        </li>
                        <li class="active">Simple &amp; Dynamic</li>
                    </ul>
                    <!-- /.breadcrumb -->

                    <div class="nav-search" id="nav-search">
                        <form class="form-search">
                            <span class="input-icon">
                                <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                <i class="ace-icon fa fa-search nav-search-icon"></i>
                            </span>
                        </form>
                    </div>
                    <!-- /.nav-search -->
                </div>

                <div class="page-content">
                    <div class="page-header">
                        <h1>
                         Tables
                            <small>
                                <i class="ace-icon fa fa-angle-double-right"></i>
                                Static &amp; Dynamic Tables
                                                     </small>
                        </h1>
                    </div>
                    <!-- /.page-header -->

                    <div class="row">
                        <div class="col-xs-12">
                            <!-- PAGE CONTENT BEGINS -->
                            <div class="row">
                                <div class="col-xs-12">
                                    <table id="simple-table" class="table  table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Họ tên</th>
                                                <th>Số điện thoại</th>
                                                <th>Vote Time</th>
                                                <th>Thời gian đăng ký</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>

                                        <tbody id="rowDanhSach">
                                        @foreach($danhsach as $item)
                                            <tr id="{{$item->id}}">
                                                <td>{{$item->id}}</td>
                                                <td id="HoTen{{$item->id}}">{{$item->HoTen}}</td>
                                                <td id="SoDienThoai{{$item->id}}">{{$item->SoDienThoai}}</td>
                                                <td id="VoteTime{{$item->id}}">{{$item->VoteTime}}</td>
                                                <td>{{$item->created_at}}</td>

                                                <td>
                                                    <label class="pos-rel">
                                                        <input id="status{{$item->id}}" class="status" data-id="{{$item->id}}" data-status="{{$item->Status}}" type="checkbox" {{$item->Status == 1 ? 'checked':''}} />
                                                        <span class="lbl"></span>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="hidden-sm hidden-xs btn-group">
                                                        <a class="id_edit btn btn-xs btn-info" data-target="#AddModel" data-toggle="modal" id="id_edit{{$item->id}}"
                                                        data-id="{{$item->id}}" data-HoTen="{{$item->HoTen}}" data-SoDienThoai="{{$item->SoDienThoai}}" data-VoteTime="{{$item->VoteTime}}">
                                                            <i class="ace-icon fa fa-pencil bigger-120"></i>
                                                        </a>

                                                        <a class="btn btn-xs btn-danger" data-id="{{$item->id}}" data-target="#confirm_delete" data-toggle="modal" data-id="{{$item->id}}">
                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                        </a>
                                                    </div>

                                                    <div class="hidden-md hidden-lg">
                                                        <div class="inline pos-rel">
                                                            <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                                                <i class="ace-icon fa fa-cog icon-only bigger-110"></i>
                                                            </button>

                                                            <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                                                <li>
                                                                    <a href="#" class="id_edit tooltip-success" data-rel="tooltip" data-target="#AddModel" data-toggle="modal" title="Edit"
                                                                       id="id_edit{{$item->id}}"
                                                                       data-id="{{$item->id}}" data-HoTen="{{$item->HoTen}}" data-SoDienThoai="{{$item->SoDienThoai}}" data-VoteTime="{{$item->VoteTime}}">
                                                                        <span class="green">
                                                                            <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a data-target="#confirm_delete" data-toggle="modal" data-id="{{$item->id}}" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                                        <span class="red">
                                                                            <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.span -->
                            </div>
                        {{ $danhsach->links() }}
                            <!-- /.row -->
                            <div class="hr hr-18 dotted hr-double"></div>
                            <!-- PAGE CONTENT ENDS -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.page-content -->
            </div>
        </div>
        <!-- /.main-content -->

        <div class="footer">
            <div class="footer-inner">
                <div class="footer-content">
                    <span class="action-buttons">
                        <a href="#">
                            <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                        </a>

                        <a href="#">
                            <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div>

    <div class="modal fade" id="confirm_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <input type="hidden" name="row_id_del" id="row_id_del" value="">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Xác nhận xoá  </h4>
                </div>

                <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xoá trường này??</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Huỷ</button>
                    <a id="delete_" class="btn btn-danger btn-ok">Đồng ý!!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade ng-scope" id="AddModel" role="modal" style="display: none;" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="false">×</span></button>
                    <h4 class="modal-title">Cập nhật thông tin</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">

                            <form id="registrationForm"  class="form-horizontal ng-pristine ng-valid">
                                {!! csrf_field() !!}
                                <input id="id_user" type="hidden">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Họ và tên</label>
                                    <div class="col-lg-10">
                                        <input id="HoTen" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="HoTen" placeholder="Họ và tên" ng-model="currItem.name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Số điện thoại</label>
                                    <div class="col-lg-10">
                                        <input id="SoDienThoai" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="SoDienThoai" placeholder="Số điện thoại" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Vote time</label>
                                    <div class="col-lg-10">
                                        <input id="VoteTime" type="text" class="form-control ng-pristine ng-untouched ng-valid" name="VoteTime" placeholder="Vote Time" ng-model="currItem.major">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button id="edit" type="button "   class="edit btn btn-primary" >Save changes</button>
                                </div>
                            </form>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>

    <!-- <![endif]-->

    <!--[if IE]>
<script src="{{asset('assets/js/jquery-1.11.3.min.js')}}"></script>
<![endif]-->
    <script type="text/javascript">
        if ('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!-- page specific plugin scripts -->
    <!-- ace scripts -->
    <script src="{{asset('assets/js/ace-elements.min.js')}}"></script>
    <script src="{{asset('assets/js/ace.min.js')}}"></script>
<script>
    $('tbody#rowDanhSach').on('click','.id_edit',function(){
        var HoTen = $(this).data('hoten');
        var id = $(this).data('id');
        var SoDienThoai = $(this).data('sodienthoai');
        var VoteTime = $(this).data('votetime');
        console.log('textbox');
        console.log(HoTen + "-" + SoDienThoai + "-"+VoteTime );
        var modal = $('#AddModel');
        modal.find("#HoTen").val(HoTen);
        modal.find("#id_user").val(id);
        modal.find("#SoDienThoai").val(SoDienThoai);
        modal.find("#VoteTime").val(VoteTime);
    });

    $('.status').click(function(e){
        e.preventDefault();
        console.log('change status');
        var _token = $("input[name='_token']").val();
        var id = $(this).data('id');
        var status = $(this).data('status');
        $.ajax({
            'url':'updateStatusDanhSach',
            'data':{
                '_token': _token,
                'id': id,
                'status': status
            },
            'type':'POST',
            success: function(data){
                if(data.result === true){
                    var id_status = 'status' + id;
                    var temp = document.getElementById(id_status);
                    temp.setAttribute("data-status", data.status);
                    var content = temp.outerHTML;
                    temp.outerHTML = content;
                    console.log(data);
                    iziToast.success({
                        title: 'Thông Báo',
                        message: 'Đã cập nhật thành công!',
                    });
                }else {
                    iziToast.error({
                        title: 'Thông báo',
                        message: 'Trong quá trình cập nhật đã xuất hiện lỗi.',
                    });
                }
            }
        })
    });

    $('.edit').click(function(e){
        e.preventDefault();

        var _token = $("input[name='_token']").val();
        var id = $('#id_user').val();
        var HoTen = $('#HoTen').val();
        var SoDienThoai = $('#SoDienThoai').val();
        var VoteTime = $('#VoteTime').val();
        $.ajax({
            'url':'updateDanhSach',
            'data':{
                '_token': _token,
                'id': id,
                'HoTen': HoTen,
                'SoDienThoai': SoDienThoai,
                'VoteTime': VoteTime
            },
            'type':'POST',
            success: function(data){
                $('#AddModel').modal('hide');
                if(data.result === true){
                    $('#HoTen' + id).html(HoTen);
                    $('#SoDienThoai' + id).html(SoDienThoai);
                    $('#VoteTime' + id).html(VoteTime);
                    var id_edit = 'edit' + masanpham;
                    var temp = document.getElementById(id_edit);
                    temp.setAttribute("data-hoten", HoTen);
                    temp.setAttribute("data-sodienthoai", SoDienThoai);
                    temp.setAttribute("data-votetime", VoteTime);
                    var content = temp.outerHTML;
                    temp.outerHTML = content;
                    console.log('congrate edit');
                    iziToast.success({
                        title: 'Thông Báo',
                        message: 'Đã cập nhật thành công!',
                    });
                }else {
                    iziToast.error({
                        title: 'Thông báo',
                        message: 'Trong quá trình cập nhật đã xuất hiện lỗi.',
                    });
                }
            }
        })
    });

</script>
</body>

</html>