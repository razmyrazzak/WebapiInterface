var js_myjs = function () {
    var burl = $('meta[name="_base"]').attr('content');
    var _tok = $('meta[name="_token"]').attr('content');
    var errorMessages = {
        1: 'Please enter your first name',
        2: 'Please enter your last name',
        3: 'Please enter your profession',
        4: 'Please enter your document number',
        5: 'Please enter your social security number',
        6: 'Please enter your email address',
        7: 'Please enter your password',
        8: 'Please agree with our terms and conditions',
        9: 'Your password not matched',
        10: 'Please enter your user name',
        11: 'Please enter your password',
        12: 'Service name cannot be empty',
        13: 'Service description cannot be empty',
        14: 'Service price cannot be empty or cannot be zero',
        15: 'Please enter your confirm password',
        16: 'Please enter your token name',
        17: 'Please enter your token',
        18: 'Please enter email subject',
        19: 'Please enter email contents',
    };
    var validateEmail = function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    };

    var datatables = function () {

        $('.subscription_table').DataTable();
        $token_table = $('.manage_api').DataTable({
            sDom: "<'row'<'col-xs-6 col-md-6'<'row'<'page_length'l><'col-xs-6 col-md-3 addNewService'xx>>><'col-xs-6  col-md-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p>>",
            ajax: "ajax/token-table",
            processing: true,
            serverSide: true,
            "lengthChange": false,
            "pageLength": 10,
            info: false,
            columnDefs: [
                {
                    targets: [5],
                    orderable: false
                }
            ],
        });
        $service_table = $('.service_table').DataTable({
            sDom: "<'row'<'col-xs-6 col-md-6'<'row'<'page_length'l><'col-xs-6 col-md-3 addNewService'xx>>><'col-xs-6  col-md-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p>>",
            ajax: "ajax/service-table",
            processing: true,
            serverSide: true,
            "pageLength": 10,
            "lengthChange": false,
            initComplete: function () {
                $('<a class="dt-button" id="addNewService" href="#"><span>ADD NEW SERVICE</span></a>').appendTo($(".addNewService").empty());
            },
            info: false,
            columnDefs: [
                {
                    targets: [0],
                    order: [[1, "desc"]],
                },
                {
                    targets: [4, 5],
                    orderable: false
                }
            ],
        });
        $('.dataTables_length select').addClass("form-control input-sm");
        $('.dataTables_filter input').addClass("form-control input-sm");
        $user_table = $('.user_table').DataTable({
            dom: 'Bfrtip',
            ajax: "ajax/manage-users-table",
            processing: true,
            responsive: true,
            serverSide: true,
            initComplete: function () {
                $('<a class="dt-button" href="#" id="addNewUser"><span>ADD NEW USER</span></a>').appendTo($(".addNewUser").empty());
            },
            info: false,
            columnDefs: [
                {
                    targets: 1,
                    className: 'noVis1'
                }, {
                    targets: 2,
                    width: "2%"
                }, {
                    targets: 3,
                    width: "2%"
                }, {
                    targets: 4,
                    width: "2%"
                }, {
                    targets: 5,
                    width: "2%"
                }, {
                    targets: 6,
                    width: "2%"
                }, {
                    targets: [7],
                    orderable: false
                },
                {
                    targets: [8],
                    orderable: false
                }
            ],
            buttons: [
                {
                    text: 'ADD USER',
                    action: function (e, dt, node, config) {
                        $("#addNewUserModel").modal("show");
                    }
                },
                {
                    extend: 'colvis',
                    columns: ':not(.noVis)'
                }
            ]
        });

        $user_table = $('.user_tablexx').DataTable({
            sDom: "<'row'<'col-xs-6 col-md-6'<'row'<'page_length'l><'col-xs-6 col-md-3 addNewUser'xx>>><'col-xs-6 col-md-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p>>",
            ajax: "ajax/manage-users-table",
            processing: true,
            serverSide: true,
            responsive: true,
            "pageLength": 10,
            columnDefs: [
                {
                    targets: [7],
                    orderable: false
                },
                {
                    targets: [8],
                    orderable: false
                }
            ],
            initComplete: function () {
                $('<a class="dt-button" href="#" id="addNewUser"><span>ADD NEW USER</span></a>').appendTo($(".addNewUser").empty());
            },
            info: false,
        });
        $('.dataTables_length select').addClass("form-control input-sm");
        $('.dataTables_filter input').addClass("form-control input-sm");
    };
    var user = function () {
        $("#updateAdminAccount").submit(function (e) {
            e.preventDefault();
            if ($('#updateAdminAccount input[name="email"]').val() == '') {
                errMsg(errorMessages[6]);
                return false;
            } else if ($('#updateAdminAccount input[name="password"]').val() == '') {
                errMsg(errorMessages[7]);
                return false;
            }
            ajaxPost($('#updateAdminAccount').serialize(), "/ajax/update-admin-account", 'updateAdminAccount', "");
        });
        $("#generateNewPassowrdFrom").submit(function (e) {
            e.preventDefault();
            if ($('#generateNewPassowrdFrom input[name="password"]').val() == '') {
                errMsg(errorMessages[11]);
                return false;
            } else if ($('#generateNewPassowrdFrom input[name="cpassword"]').val() == '') {
                errMsg(errorMessages[15]);
                return false;
            } else if ($('#generateNewPassowrdFrom input[name="cpassword"]').val() != $('#generateNewPassowrdFrom input[name="password"]').val()) {
                errMsg(errorMessages[9]);
                return false;
            }
            ajaxPost($('#generateNewPassowrdFrom').serialize(), "/ajax/generate-new-password", 'generateNewPassowrd', "");
        });
        $("#addNewUserForm").submit(function (e) {
            e.preventDefault();
            if ($('#addNewUserForm input[name="first_name"]').val() == '') {
                errMsg(errorMessages[1]);
                return false;
            } else if ($('#addNewUserForm input[name="last_name"]').val() == '') {
                errMsg(errorMessages[2]);
                return false;
            } else if ($('#addNewUserForm input[name="email"]').val() == '') {
                errMsg(errorMessages[6]);
                return false;
            } else if ($('#addNewUserForm input[name="profession"]').val() == '') {
                errMsg(errorMessages[3]);
                return false;
            } else if ($('#addNewUserForm input[name="dni"]').val() == '') {
                errMsg(errorMessages[4]);
                return false;
            } else if ($('#addNewUserForm input[name="cuil"]').val() == '') {
                errMsg(errorMessages[5]);
                return false;
            }
            ajaxPost($('#addNewUserForm').serialize(), "/ajax/add-user", 'addNewUser', $user_table);
        });
    };
    var process = function () {
        $(document).ready(function () {
            $(document).on("click", "#addNewService", function () {
                $("#addNewServiceModel").modal("show");
            });
            $(".login_modal").click(function () {
                $("#registerModal").modal("toggle");
                $("#loginModal").modal("show");
            });

            $(".forgot-pass").click(function () {
                $("#loginModal").modal("toggle");
                $("#forgotPasswordModal").modal("show");
            });

            $('#loginModal').on('hidden.bs.modal', function () {
                $('#userLoginForm')[0].reset();
            });
        });



        $('.price').keypress(function (event) {
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
        });
        $(document).on("click", ".delete", function () {
            $row = $(this).attr("row");
            if ($row == "service") {
                var data = [$(this).data('id'), '/ajax/service/delete/', 'deleteSerivce', $service_table];
                confirmBox("Are you sure?", "You will not be able to recover this service!", "warning", "Yes", "No", "btn-danger", data, "Your service not deleted :)");
            } else if ($row == "user") {
//                var data = [$(this).data('id'), '/ajax/service/delete/', 'deleteSerivce', $service_table];
//                confirmBox("Are you sure?", "You will not be able to recover this service!", "warning", "Yes", "No", "btn-danger", data, "Your service not deleted :)");

            }
        });
        $(document).on("click", ".edit", function () {
            $row = $(this).attr("row");
            if ($row == "service") {
                ajaxGet($(this).data('id'), "/ajax/service/edit/", 'editService', "");
            } else if ($row == "token") {
                ajaxGet($(this).data('id'), "/ajax/token/edit/", 'editToken', "");
            }
        });
        $(document).on("click", ".mode", function () {
            $row = $(this).attr("row");
            if ($row == "service") {
                ajaxGet($(this).data('id'), "/ajax/service/status/", 'statusService', $service_table);
            } else if ($row == "user") {
                ajaxGet($(this).data('id'), "/ajax/user/status/", 'statusUser', $user_table);
            }
        });
        $(document).on("click", ".email_trigger", function () {
            $("#user_email_notification_id").val($(this).attr('data-id'));
            $("#sendUserEmailNotification").modal("show");
        });

        $(document).on("click", ".calculate_pensions_money", function () {

        });
    };

    function confirmBox(title, text, alertType, confirmButtonText, cancelButtonText, confirmButtonClass, data, cancelledText) {
        swal({
            title: title,
            text: text,
            type: alertType,
            showCancelButton: true,
            confirmButtonClass: confirmButtonClass,
            confirmButtonText: confirmButtonText,
            cancelButtonText: cancelButtonText,
            closeOnConfirm: false,
            closeOnCancel: false
        },
        function (isConfirm) {
            if (isConfirm) {
                swal("Deleted!", "Your imaginary file has been deleted!", "success");
                ajaxGet(data[0], data[1], data[2], data[3]);
            } else {
                swal("Cancelled", cancelledText, "error");
            }
        });
    }

    var notification = function () {
        $("#sendEmailNotification").submit(function (e) {
            e.preventDefault();
            if ($('#sendEmailNotification input[name="subject"]').val() == '') {
                errMsg(errorMessages[18]);
                return false;
            } else if ($('#sendEmailNotification textarea[name="content"]').val() == '') {
                errMsg(errorMessages[19]);
                return false;
            }
            ajaxPost($('#sendEmailNotification').serialize(), "/ajax/send-email-notification", 'sendEmailotification', "");
        });
        $('#sendUserEmailNotification').on('hidden.bs.modal', function () {
            $('#sendEmailNotification')[0].reset();
        });
        //
    }

    var api = function () {
        $("#editTokenForm").submit(function (e) {
            e.preventDefault();
            if ($('#editTokenForm input[name="token_name"]').val() == '') {
                errMsg(errorMessages[16]);
                return false;
            } else if ($('#editTokenForm textarea[name="token"]').val() == '') {
                errMsg(errorMessages[17]);
                return false;
            }
            ajaxPost($('#editTokenForm').serialize(), "/ajax/update-api", 'updateTokenForm', $token_table);
        });
    }
    var service = function () {
        $("#serviceForm").submit(function (e) {
            e.preventDefault();
            if ($('#serviceForm input[name="name"]').val() == '') {
                errMsg(errorMessages[12]);
                return false;
            } else if ($('#serviceForm textarea[name="description"]').val() == '') {
                errMsg(errorMessages[13]);
                return false;
            } else if ($('#serviceForm input[name="price"]').val() == '' || $('#serviceForm input[name="price"]').val() == 0) {
                errMsg(errorMessages[14]);
                return false;
            }
            ajaxPost($('#serviceForm').serialize(), "/ajax/add-service", 'serviceForm', $service_table);
        });

        $("#editServiceForm").submit(function (e) {
            e.preventDefault();
            if ($('#editServiceForm input[name="name"]').val() == '') {
                errMsg(errorMessages[12]);
                return false;
            } else if ($('#editServiceForm textarea[name="description"]').val() == '') {
                errMsg(errorMessages[13]);
                return false;
            } else if ($('#editServiceForm input[name="price"]').val() == '' || $('#editServiceForm input[name="price"]').val() == 0) {
                errMsg(errorMessages[14]);
                return false;
            }
            ajaxPost($('#editServiceForm').serialize(), "/ajax/update-service", 'editServiceForm', $service_table);
        });


        //
    };
    var login = function () {
        $("#resetPassword").submit(function (e) {
            e.preventDefault();
            if ($('#resetPassword input[name="email"]').val() == '') {
                errMsg(errorMessages[6]);
                return false;
            }
            ajaxPost($('#resetPassword').serialize(), "/user-reset-password", 'userResetPassword', "");
        });
        $("#adminLoginForm").submit(function (e) {
            e.preventDefault();
            if ($('#adminLoginForm input[name="email"]').val() == '') {
                errMsg(errorMessages[10]);
                return false;
            } else if ($('#adminLoginForm input[name="password"]').val() == '') {
                errMsg(errorMessages[11]);
                return false;
            }
            ajaxPost($('#adminLoginForm').serialize(), "/admin-login", 'adminLoginForm', "");
        });

        $("#userLoginForm").submit(function (e) {
            e.preventDefault();
            if ($('#userLoginForm input[name="email"]').val() == '') {
                errMsg(errorMessages[10]);
                return false;
            } else if ($('#userLoginForm input[name="password"]').val() == '') {
                errMsg(errorMessages[11]);
                return false;
            }
            ajaxPost($('#userLoginForm').serialize(), "/user-login", 'userLoginForm', "");
        });
    };
    var register = function () {
        $("#frmRegistration").submit(function (e) {
            e.preventDefault();
            if ($('#frmRegistration input[name="first_name"]').val() == '') {
                errMsg(errorMessages[1]);
                return false;
            } else if ($('#frmRegistration input[name="last_name"]').val() == '') {
                errMsg(errorMessages[2]);
                return false;
            } else if ($('#frmRegistration input[name="profession"]').val() == '') {
                errMsg(errorMessages[3]);
                return false;
            } else if ($('#frmRegistration input[name="dni"]').val() == '') {
                errMsg(errorMessages[4]);
                return false;
            } else if ($('#frmRegistration input[name="cuil"]').val() == '') {
                errMsg(errorMessages[5]);
                return false;
            } else if ($('#frmRegistration input[name="email"]').val() == '') {
                errMsg(errorMessages[6]);
                return false;
            } else if ($('#frmRegistration input[name="password"]').val() == '') {
                errMsg(errorMessages[7]);
                return false;
            } else if ($('#frmRegistration input[name="cpassword"]').val() != $('#frmRegistration input[name="password"]').val()) {
                errMsg(errorMessages[9]);
                return false;
            }
            //
//            else if ($('#frmRegistration checkbox[name="terms"]').prop() == '') {
//                errMsg(errorMessages[7]);
//                return false;
//            }
            ajaxPost($('#frmRegistration').serialize(), "/register", 'createdNewUser', "");
        });
    };
    function showLoader(text) {
        $('#loaderText').html(text);
        $('#loader').show();
    }


    function ajaxGet(da, u, ptt, table) {
        var rd;
        $.ajax({
            type: "GET", url: burl + u + da, dataType: "JSON", cache: false,
            statusCode: {
                400: function (response) {
                    errMsg('Bad request Error: 400')
                },
                401: function (response) {
                    errMsg('Sesion is expired please Login again');
                },
                404: function (response) {
                    errMsg('Requested page is not found');
                },
                419: function (response) {
                    errMsg('Requested page is not found');
                }
            },
            success: function (d) {
                if (d.success == 1) {
                    rd = d;
                    if ('msg' in d) {
                        if (ptt == 'deleteAdmin') {
                            okMsg(d.msg);
                        } else if (ptt == 'statusService') {
                            okMsg(d.msg);
                        } else if (ptt == 'deleteSerivce') {
                            okMsg(d.msg);
                        } else if (ptt == 'statusUser') {
                            okMsg(d.msg);
                        }
                    }
                    if (d.data) {
                        var data = d.data;
                        if (ptt == 'editService') {
                            $("#editServiceTitle").html("Update " + data.name);
                            $('#editServiceForm input[name="name"]').val(data.name);
                            $('#editServiceForm input[name="price"]').val(data.price);
                            $('#editServiceForm input[name="id"]').val(data.id);
                            $('#editServiceForm textarea[name="description"]').val(data.description);
                            $("#editNewServiceModel").modal("show");
                        } else if (ptt == 'editToken') {
                            $("#editTokenTitle").html("Update " + data.token_name);
                            $('#editTokenForm input[name="token_name"]').val(data.token_name);
                            $('#editTokenForm textarea[name="token"]').val(data.token);
                            $('#editTokenForm input[name="id"]').val(data.id);
                            $("#editTokenModel").modal("show");
                        }
                    }

                }
                else if (d.success == 0) {
                    rd = d;
                    if ('msg' in d) {
                        errMsg(d.msg);
                    }
                }
            },
            complete: function () {
                if (ptt == 'adminStatus') {
                    afterComplete(ptt, rd, u, table);
                } else if (ptt == 'statusService') {
                    afterComplete(ptt, rd, u, table);
                } else if (ptt == 'deleteSerivce') {
                    afterComplete(ptt, rd, u, table);
                } else if (ptt == 'statusUser') {
                    afterComplete(ptt, rd, u, table);
                }
            }
        });
        function afterComplete(ptt, rd, u, table) {
            if (ptt == 'deleteAdmin') {
                table.ajax.reload();
            } else if (ptt == 'statusService') {
                table.ajax.reload();
            } else if (ptt == 'deleteSerivce') {
                table.ajax.reload();
            } else if (ptt == 'statusUser') {
                table.ajax.reload();
            }
        }
    }
    function ajaxPost(da, u, ptt, table) {
        $(".lodding_spinner").show();
        var rd;
        $.ajax({
            type: "POST", url: burl + u, data: da + "&_token=" + _tok, dataType: "JSON", cache: false,
            statusCode: {
                400: function (response) {
                    errMsg('Bad request Error: 400')
                },
                401: function (response) {
                    errMsg('Sesion is expired please Login again');
                },
                404: function (response) {
                    errMsg('Requested page is not found');
                },
                419: function (response) {
                    errMsg('Requested page is not found');
                }
            },
            success: function (d) {
                $(".lodding_spinner").hide();
                if (d.success == 1) {
                    rd = d;
                    if ('msg' in d) {
                        if (ptt == 'createdNewUser') {
//                            okMsg(d.msg);
                            $('#frmRegistration')[0].reset();
                            window.location = d.url;
                        }
                    }
                    if (ptt == 'userLoginForm') {
                        $('#userLoginForm')[0].reset();
                        window.location = d.url;
                    } else if (ptt == 'adminLoginForm') {
                        $('#adminLoginForm')[0].reset();
                        window.location = d.url;
                    }
                    else if (ptt == 'serviceForm') {
                        $('#serviceForm')[0].reset();
                        okMsg(d.msg);
                    } else if (ptt == 'editServiceForm') {
                        okMsg(d.msg);
                    } else if (ptt == 'addNewUser') {
                        okMsg(d.msg);
                    } else if (ptt == 'generateNewPassowrd') {
                        okMsg(d.msg);
                        $('#generateNewPassowrd')[0].reset();
                        setTimeout(function () {
                            window.location = "login";
                        }, 3000);
                    } else if (ptt == 'updateTokenForm') {
                        okMsg(d.msg);
                    } else if (ptt == 'updateAdminAccount') {
                        okMsg(d.msg);
                        $('#admin_password').val();
                    } else if (ptt == 'userResetPassword') {
                        okMsg(d.msg);
                        $('#resetPassword')[0].reset();
                    }
                }
                else if (d.success == 0) {
                    rd = d;
                    if ('msg' in d) {
                        errMsg(d.msg);
                    }
                }
            },
            complete: function () {
                afterComplete(ptt, rd, u, table);
            }
        });
        function afterComplete(ptt, rd, u, table) {
            if (ptt == 'addAdmin') {
                if (rd.success == 1) {
                    $("#createNewAdminModal").modal("toggle");
                    table.ajax.reload();
                }
            } else if (ptt == 'serviceForm') {
                if (rd.success == 1) {
                    $("#addNewServiceModel").modal("toggle");
                    table.ajax.reload();
                }
            } else if (ptt == 'editServiceForm') {
                if (rd.success == 1) {
                    $("#editNewServiceModel").modal("toggle");
                    table.ajax.reload();
                }
            } else if (ptt == 'updateTokenForm') {
                if (rd.success == 1) {
                    $("#editTokenModel").modal("toggle");
                    table.ajax.reload();
                }
            }
        }
    }
    function errMsg(msg) {
        tostmsg('error', msg);
    }
    function okMsg(msg) {
        tostmsg('success', msg);
    }
    function infoMsg(msg) {
        tostmsg('info', msg);
    }
    function tostmsg(type, msg) {
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "positionClass": "toast-bottom-right",
            "onclick": null,
            "showDuration": "5000",
            "hideDuration": "1000",
            "timeOut": "3000",
            "extendedTimeOut": "1000"
        }
        toastr[type](msg, '');
    }
    return {
        init: function () {
            register();
            login();
            datatables();
            process();
            service();
            user();
            api();
            notification();
        }
    };
}();