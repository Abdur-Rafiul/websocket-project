<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js">
</script>
<style>
    body,
    html {
        height: 100%;
        margin: 0;
        background: #7F7FD5;
        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
    }

    .chat {
        margin-top: auto;
        margin-bottom: auto;
    }

    .card {
        height: 500px;
        border-radius: 15px !important;
        background-color: rgba(0, 0, 0, 0.4) !important;
    }

    .contacts_body {
        padding: 0.75rem 0 !important;
        overflow-y: auto;
        white-space: nowrap;
    }

    .msg_card_body {
        overflow-y: auto;
    }

    .card-header {
        border-radius: 15px 15px 0 0 !important;
        border-bottom: 0 !important;
    }

    .card-footer {
        border-radius: 0 0 15px 15px !important;
        border-top: 0 !important;
    }

    .container {
        align-content: center;
    }

    .search {
        border-radius: 15px 0 0 15px !important;
        background-color: rgba(0, 0, 0, 0.3) !important;
        border: 0 !important;
        color: white !important;
    }

    .search:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .type_msg {
        background-color: rgba(0, 0, 0, 0.3) !important;
        border: 0 !important;
        color: white !important;
        height: 60px !important;
        overflow-y: auto;
    }

    .type_msg:focus {
        box-shadow: none !important;
        outline: 0px !important;
    }

    .attach_btn {
        border-radius: 15px 0 0 15px !important;
        background-color: rgba(0, 0, 0, 0.3) !important;
        border: 0 !important;
        color: white !important;
        cursor: pointer;
    }

    .send_btn {
        border-radius: 0 15px 15px 0 !important;
        background-color: rgba(0, 0, 0, 0.3) !important;
        border: 0 !important;
        color: white !important;
        cursor: pointer;
    }

    .search_btn {
        border-radius: 0 15px 15px 0 !important;
        background-color: rgba(0, 0, 0, 0.3) !important;
        border: 0 !important;
        color: white !important;
        cursor: pointer;
    }

    .contacts {
        list-style: none;
        padding: 0;
    }

    .contacts li {
        width: 100% !important;
        padding: 5px 10px;
        margin-bottom: 15px !important;
    }

    .active {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .user_img {
        height: 70px;
        width: 70px;
        border: 1.5px solid #f5f6fa;

    }

    .user_img_msg {
        height: 40px;
        width: 40px;
        border: 1.5px solid #f5f6fa;

    }

    .img_cont {
        position: relative;
        height: 70px;
        width: 70px;
    }

    .img_cont_msg {
        height: 40px;
        width: 40px;
    }

    .online_icon {
        position: absolute;
        height: 15px;
        width: 15px;
        background-color: #4cd137;
        border-radius: 50%;
        bottom: 0.2em;
        right: 0.4em;
        border: 1.5px solid white;
    }

    .offline_icon {
        position: absolute;
        height: 15px;
        width: 15px;
        background-color: #e92614;
        border-radius: 50%;
        bottom: 0.2em;
        right: 0.4em;
        border: 1.5px solid white;
    }

    .offline {
        background-color: #c23616 !important;
    }

    .user_info {
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 15px;
    }

    .user_info span {
        font-size: 20px;
        color: white;
    }

    .user_info p {
        font-size: 10px;
        color: rgba(255, 255, 255, 0.6);
    }

    .video_cam {
        margin-left: 50px;
        margin-top: 5px;
    }

    .video_cam span {
        color: white;
        font-size: 20px;
        cursor: pointer;
        margin-right: 20px;
    }

    .msg_cotainer {
        margin-top: auto;
        margin-bottom: auto;
        margin-left: 10px;
        border-radius: 25px;
        background-color: #82ccdd;
        padding: 10px;
        position: relative;
    }

    .msg_cotainer_send {
        margin-top: auto;
        margin-bottom: auto;
        margin-right: 10px;
        border-radius: 25px;
        background-color: #78e08f;
        padding: 10px;
        position: relative;
    }

    .msg_time {
        position: absolute;
        left: 0;
        bottom: -15px;
        color: rgba(255, 255, 255, 0.5);
        font-size: 10px;
    }

    .msg_time_send {
        position: absolute;
        right: 0;
        bottom: -15px;
        color: rgba(255, 255, 255, 0.5);
        font-size: 10px;
    }

    .msg_head {
        position: relative;
    }

    #action_menu_btn {
        position: absolute;
        right: 10px;
        top: 10px;
        color: white;
        cursor: pointer;
        font-size: 20px;
    }

    .action_menu {
        z-index: 1;
        position: absolute;
        padding: 15px 0;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border-radius: 15px;
        top: 30px;
        right: 15px;
        display: none;
    }

    .action_menu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .action_menu ul li {
        width: 100%;
        padding: 10px 15px;
        margin-bottom: 5px;
    }

    .action_menu ul li i {
        padding-right: 10px;

    }

    .action_menu ul li:hover {
        cursor: pointer;
        background-color: rgba(0, 0, 0, 0.2);
    }

    @media(max-width: 576px) {
        .contacts_card {
            margin-bottom: 15px !important;
        }
    }
</style>

<div class="container-fluid h-100">
    <div class="row justify-content-center h-100">
        <div class="col-md-4 col-xl-3 chat">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." name="" class="form-control search">
                        <div class="input-group-prepend">
                            <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-body contacts_body">
                    <ul class="contacts">
                        @foreach ($users as $user)
                            @if ($user->id != Auth::user()->id)
                                <li data-id="{{ $user->id }}" class="user-list {{ $user->active ? "active" : "" }}">
                                    <div class="d-flex bd-highlight">
                                        <div class="img_cont">
                                            <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg"
                                                class="rounded-circle user_img">
                                            <span id="{{ $user->id }}-status" class="offline_icon"></span>
                                        </div>
                                        <div class="user_info">
                                            <span>{{ $user->name }}</span>
                                            <p id="{{ $user->id }}-is_status"></p>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>

                </div>

                <div class="card-footer"></div>
            </div>
        </div>
        <div class="col-md-8 col-xl-6 chat">
            <div class="card">


                <div id="show-data"></div>

                <div class="card-footer ">
                    <form action="javascript:sender_create('sender-create-form','{{ route("send.message") }}')"
                        id="sender-create-form">
                        <input type="text" id="receiver-id-val" name="receiver_id">
                        <div class="input-group" style="margin-top: 40px!important">
                            <div class="input-group-append">
                                <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                            </div>
                            <textarea name="message" class="form-control type_msg" placeholder="Type your message..."></textarea>
                            <div class="input-group-append">
                                <button class="input-group-text send_btn btn"><i
                                        class="fas fa-location-arrow"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function sender_create(form_id, action) {
        var ajaxTime = new Date().getTime();
        $.ajax({
            url: action,
            type: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: new FormData($('#' + form_id)[0]),
            processData: false,
            contentType: false,
            beforeSend: function(jqXHR, settings) {

            },
            success: function(response) {
                if (response.success) {
                    var html = `
        <div class="d-flex justify-content-start mb-4">
            <div class="img_cont_msg">
                <img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg">
            </div>
            <div class="msg_cotainer">
                ${response.chat.message}
                <span class="msg_time">8:40 AM, Today</span>
            </div>
        </div>
    `;

                    $('.msg_card_body').append(html);

                }


                if (response.error) {

                }
            },
            error: function(response) {
                var icon = '<i class="bi bi-x-octagon"></i> '
                var totalTime = new Date().getTime() - ajaxTime;
                var time = Math.round(totalTime / 1000);

                if (response && response.status) {
                    var status_code = response.status

                    if (status_code == 419) {

                    }

                    if (status_code == 500) {
                        var message = '<span class="text-danger">' + icon +
                            'Something went wrong ! (Error Code: 500)</span>'
                    }
                }
                if (response && response.responseJSON && 'errors' in response.responseJSON) {

                }
            }
        });
    }
</script>
<script>
    $(document).ready(function() {
        $('#action_menu_btn').click(function() {
            $('.action_menu').toggle();
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.user-list').click(function() {
            var user_id = $(this).attr('data-id')
            $('#receiver-id-val').val(user_id)
            var ajaxTime = new Date().getTime();
            $.ajax({
                url: '{{ route("chat.message") }}',
                type: 'post',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    receiver_id: user_id
                },
                beforeSend: function(jqXHR, settings) {

                },
                success: function(response) {
                    if (response.success) {
                        $('#show-data').html(response.html)
                    }

                    if (response.error) {

                    }
                },
                error: function(response) {
                    var icon = '<i class="bi bi-x-octagon"></i> '
                    var totalTime = new Date().getTime() - ajaxTime;
                    var time = Math.round(totalTime / 1000);

                    if (response && response.status) {
                        var status_code = response.status

                        if (status_code == 419) {

                        }

                        if (status_code == 500) {
                            var message = '<span class="text-danger">' + icon +
                                'Something went wrong ! (Error Code: 500)</span>'
                            showErrorMessage(message, time)
                        }

                    }
                    if (response && response.responseJSON && 'errors' in response
                        .responseJSON) {

                    }
                }
            });
        })

    })
</script>

<script type="module">
    Echo.join('status-update')
        .here((user) => {
            for (let index = 0; index < user.length; index++) {
                const element = user[index]['id'];
                if (sender_id != element) {
                    $('#' + user[index]['id'] + '-status').removeClass('offline_icon')
                    $('#' + user[index]['id'] + '-status').addClass('online_icon')
                    $('#' + user[index]['id'] + '-is_status')
                        .html(user[index]['name'] + ' is online')
                }

            }
        })
        .joining((user) => {
            $('#' + user.id + '-status').removeClass('offline_icon')
            $('#' + user.id + '-status').addClass('online_icon')
            $('#' + user.id + '-is_status').html(user.name + ' is online')
        })
        .leaving((user) => {
            $('#' + user.id + '-status').removeClass('online_icon')
            $('#' + user.id + '-status').addClass('offline_icon')
            $('#' + user.id + '-is_status').html(user.name + ' is offline')

        })
        .listen('UserStatusEvent', (event) => {
            // Code to handle the UserStatusEvent
        });

    Echo.private('broadcast-message')
        .listen('.getChatMessage', (data) => {
           var receiver_id= $('#receiver-id-val').val()
            
            if (sender_id == data.chat.receiver_id && receiver_id == data.chat.sender_id) {
                var html = '<div class="d-flex justify-content-end mb-4">' +
                    '<div class="msg_cotainer_send">' +
                    data.chat.message +
                    '<span class="msg_time_send">8:55 AM, Today</span>' +
                    '</div>' +
                    '<div class="img_cont_msg">' +
                    '<img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXGBgaGBcXFxgXFxgdFxcXHRcXGhcYHSggGBolHRYVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGyslHyUtLS0tLS0tLS0tLS0tLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAEBQMGAAECBwj/xABBEAABAwIDBAgFAgQDCAMAAAABAAIRAyEEEjEFQVFhBhMicYGRobEyUsHR8ELhBxQjcjOS8RUWNENigqKyU3OE/8QAGgEAAgMBAQAAAAAAAAAAAAAAAAECAwQFBv/EACkRAAICAgEDBAIBBQAAAAAAAAABAhEDIRIEMUEFEyJRMjNhFCNxgeH/2gAMAwEAAhEDEQA/APQq9PM0gbxz13bxv5rxnb+c13kVKbXNOjw4VALACNXtOY24CbCFfNodLX1AAwZZY4MiILhEDsiZtxOnNUfpPiKdWMQwAO/W0FrSdTeXkuIJ1DRKmpplfktf8JRWbWc0gPptY64uWkuZbX4SQ8Rujgrr0hq5g5rg46RbSI08JXjnQzpg7AVn1GsFRtRkOYXEGxkEG97nirmOmxxbbYd1KSXSarR2QZzBoEmADyKhKq2aceRxkn9CnpoGOytboAdL8PVeYVWQTxk+69E6SuljKosHkgCZMa35gqnfy7alSoC6L25ws+J6o09TJTlyiAbNDutaBqTaPP6FfSGHORoDKNAWF8gM21nevn2hT6pzX5hLTLeIt7EWK9i6KdJ6NejTaajBVa0Nc0mDYRInWVZRkZYcViC6jVD202gscIAjUEQTwuV4rtDFmlZph2s2ieHeYPkrx0yxpnqmk6SeF5i2h3a8V57jgKjoiQDabkxIJ9ChLdhekK62KrPu6XRxmY8NVJRqPGkDvGikoVQHQ2bbtN+hBKkq12zDjra14n2UhA7sQ/iJ7kNXa48STyR73AGMpka6QPX2XHWuvkbpvQAJR2c49pxDe8wpHspCwOY8hbzNvJRV6jnGCQY3WP3RWGwObUwOIiPZAA7WuJ+ENHEwPr9F0eqGsuPJGHZzeTuRdr5iPVY3BHcyOcA2QAOGM1aw+Q+yyriQ21xyCIds8zJdHfI9ioqzLRDT4n6piAztFs2D/MLn/aLdAHDmY+i5xNEHS35yQVQXj2ugAmrip3+32UZfOoEodzY/dFYBgLmtcQGkgE6wCdbJMaLD0XpZi93/AEtHq5XTZdd7aNekwCHgF17wJzG3ufiJn2rGkVhJVIKQCAB7LanmKYhzA78bAZXikGWUIyFK2xEmAJ6TirMZwudK0Cg4BA2fUfxnlOJUW3bBSmbpbBGGKlms+FFOJBU2FRgTkmd5AqAGIhJW1hSVZYFXHPNAWJVEWI0ClZahZah5dANgzQWUEGg8ohRTXOeV2I5AWx5gDvZjZ1EUnqSevWiCwqzVJNOy2vQqmKwBpqlZUKRoxh4YBkZgxKGfQgGpiZkkRWGglqoE6iuRTxgSqhEZkmgjUkZGXQAVY4ApTpJJg5CkAkzWUAdRZigAZmY1hJgYjpKFVSCS2YKCTaaHmeiSYhLC7Kn9iVMBRqRlMzQRSmSaaA0aVo4ZiNEB9s0mGToCFOEIJpoA46mSTyBClGaJiiIhOwkoGgNEkZoZgCkABOBYpACpCqSTyAkZmQBOGQpkADiBZiFGhEYaIZgTRlmgCxMGiZgDUYpCQggA1EiTRmSBkKgjQhZmgCpAqDmlKmEmlClERkMGBxhJAcpOqLmIAkquVTLFFFFFB//9k=' +
                    '" class="rounded-circle user_img_msg">' +
                    '</div>' +
                    '</div>';
                    //alert(receiver_id)
                $('.msg_card_body').append(html);
            }
        });
</script>
