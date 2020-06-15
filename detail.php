

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
 
    <style type="text/css">
        
        /* CSS Test begin */
.comment-box {
    margin-top: 30px !important;
}
/* CSS Test end */

.comment-box img {
    width: 50px;
    height: 50px;
}
.comment-box .media-left {
    padding-right: 10px;
    width: 65px;
}
.comment-box .media-body p {
    border: 1px solid #ddd;
    padding: 10px;
}
.comment-box .media-body .media p {
    margin-bottom: 0;
}
.comment-box .media-heading {
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 7px 10px;
    position: relative;
    margin-bottom: -1px;
}
.comment-box .media-heading:before {
    content: "";
    width: 12px;
    height: 12px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-width: 1px 0 0 1px;
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    position: absolute;
    top: 10px;
    left: -6px;
}

    </style>

</head>
<body>

    <?php require_once('header.php'); ?>
     <div class="loader"></div>
<div class='container'>
  
         <div class="media comment-box">

            <div class="media-left">
                <a href="#">
                    <img class="img-responsive user-photo" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading"></h4>
                <p id="body"></p>
              
            </div>
        </div>
</div>


<script type="text/javascript">
        
$(document).ready(function() {
    
    // posts list
    var root = 'https://jsonplaceholder.typicode.com';
    $.ajax({
     url: root+"/posts/1",
     method: 'GET',
     contentType: 'application/json',
     success: function(posts) {

        var title = posts.title;
        $('.media-heading').html(title);

        $('#body').html(posts.body);
        $('.loader').remove();

     }
    });

});

    </script>


</body>
</html>