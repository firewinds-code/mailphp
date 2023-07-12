<?php include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail</title>
    <?php include("header.php"); ?>
</head>

<body class="hold-transition sidebar-mini">

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include('sidebar.php'); ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="card card-primary" style="margin:10px ; ">
                    <div class="card-header">
                        <h3 class="card-title">Mail</h3>
                    </div>

                    <!-- form start -->
                    <form action="emailscript.php" method="post" id="mail" autocomplete="off">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="InputEmail">From<span style="color:#FF0000">*</span></label>
                                <input type="email" class="form-control" id="fromemail"
                                    placeholder="Enter email address" name="fromemail" required>
                            </div><br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">To<span style="color:#FF0000">*</span></label>
                                <input type="email" class="form-control" id="toemail"
                                    placeholder="Enter email address" name="toemail" required>
                            </div><br>
                            <div class="form-group">
                                <label for="exampleInputName">Subject<span style="color:#FF0000">*</span></label>
                                <input type="text" class="form-control" id="subject" placeholder="Enter Subject"
                                    name="subject" required>
                            </div><br>
                            <div class="form-group">
                                <label for="exampleInputName">Message<span style="color:#FF0000">*</span></label>
                                <textarea class="form-control" id="message" placeholder="Enter Message"
                                    name="message" required></textarea>
                            </div>
                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="send" id="send" value="send">
                        </div>
                    </form>
                </div>
                
            </section>
        </div>
        <br>
        <?php include("footer.php"); ?>
        <!-- Page specific script -->
        <script>
        $('#mail').validate({
            rules: {
                from: {
                    required: true,
                    email: true,
                },
                to: {
                    required: true,
                    email: true,
                },
                subject: {
                    required: true,
                },
                message: {
                    required: true
                },
            },
            messages: {
                from: {
                    required: "Please enter an email address",
                    email: "Please enter a valid email address"
                },
                to: {
                    required: "Please enter an email address",
                    email: "Please enter a valid email address"
                },
                subject: {
                    required: "Please provide a Subject for the Email"
                },
                message: "Please enter your message"    
            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
        </script>
</body>

</html>